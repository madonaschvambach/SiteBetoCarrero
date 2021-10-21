<?php
/**
 * @author Bruno Massa
 * @file
 *  Live Translation update functions.
 */

module_load_include('inc', 'live_translation');

/**
 * Import the PO file from the translation server.
 *
 * @param $module
 *   String. The module code.
 * @param $lancode
 *   String. The language code.
 */
function _live_translation_import($module, $langcode, $batch = false) {
  module_load_include('inc', 'update', 'update.compare');
  $modules        = update_get_projects();
  $languages      = language_list('enabled');
  $current_time   = time();
  $import_status  = variable_get('live_translation_import_status', array());
  $import_time    = variable_get('live_translation_import_time', array());
  $update_time    = variable_get('live_translation_update_time', array());
  $file_url       = implode('/', array(
    _live_translation_servers($langcode),
    LIVE_TRANSLATION_SERVER_URL,
    $module,
    $modules[$module]['info']['version'],
    $langcode,
    (isset($import_time[$langcode][$module])) ? $import_time[$langcode][$module] : 0
  ));

  $filename = 'live_translation_import.po';
  $file     = file_directory_temp() .'/'. $filename;

  // This could take a long time.
  @set_time_limit(0);

  // Nothing to do if already downloaded.
  if (file_exists($file)) {
    $message   = t('File %file already exists.', array('%file' => $file));
  }

  // Download the PO file from server
  elseif (!$contents = drupal_http_request($file_url)) {
    $message  = t('Unable to download and save %download_link file.', array('%download_link' => $file_url));
    $no_file  = TRUE;
  }

  // Check if there is any strings
  elseif ($contents->data == '') {
    $message  = t('No new strings for %module.', array('%module' => $module));
    $no_file  = TRUE;
    $ok       = TRUE;
  }

  // Save it in the local filesystem.
  elseif (!file_put_contents($file, $contents->data)) {
    $message  = t('Unable to download and save %download_link file.', array('%download_link' => $file_url));
  }


  // Extract and parse the local file and remove the tarball.
  else {
    include_once './includes/locale.inc';
    // LOCALE_IMPORT_OVERWRITE
    // LOCALE_IMPORT_KEEP
    $mode = LOCALE_IMPORT_KEEP;

    // 'default'
    $group = 'default';

    // Now import strings into the language
    $file_obj = new stdClass();
    $file_obj->uri = $file;
    $file_obj->filename = $filename;
    if ($ret = _locale_import_po($file_obj, $langcode, $mode, $group) == FALSE) {
      $message  = t('The translation import of %filename failed.', array('%filename' => $filename));
    }
    else {
      $message  = t('The translation import of %filename was a sucess.', array('%filename' => $filename));
      $ok       = TRUE;

      // Update the import and update status
      $import_status[$langcode][$module] = 0;
      $import_time[$langcode][$module]   = $current_time;
      $update_time[$langcode][$module]   = $current_time + LIVE_TRANSLATION_LIMIT;
      variable_set('live_translation_import_status', $import_status);
      variable_set('live_translation_import_time', $import_time);
      variable_set('live_translation_update_time',  $update_time);
    }
  }

  // Display any error message
  if (isset($message)) {
    drupal_set_message($message, isset($ok) ? 'status' : 'error');
    watchdog('live_translation', $message, array(),  isset($ok) ? WATCHDOG_NOTICE : WATCHDOG_ERROR);
  }

  // Delete the file
  if (empty($no_file)) {
    unlink($file);
  }

  // Go to the report page
  if (!$batch) {
    drupal_goto('admin/reports/live-translation');
  }
}

/**
 * Check if there is any new translation on the server.
 *
 * @param $return
 *   Boolean (optinoal). If its going to return data to a page
 *   or will be executed silenced.
 */
function _live_translation_update($return = FALSE) {
  module_load_include('inc', 'update', 'update.compare');
  $modules        = update_get_projects();
  $languages      = language_list('enabled');
  $import_status  = variable_get('live_translation_import_status',  array());
  $import_time    = variable_get('live_translation_import_time', array());

  foreach ($languages[1] as $langcode => $language) {
    if ($langcode == 'en' or _live_translation_servers($langcode) == '') {
      continue;
    }
    foreach ($modules as $mod => $module) {
      $module_releases[$mod] = $module['info']['version'];
    }

    $pending_translations = xmlrpc(
      _live_translation_servers($langcode) .'/xmlrpc.php',
      array(
        'live_translation_update' => array(
          $langcode,
          isset($import_time[$langcode]) ? $import_time[$langcode] : 0,
          $module_releases
        )
      )
    );

    // Save the tokens on DB for further use. But in case
    // of error, show a message
    if (xmlrpc_error()) {
      watchdog('live_translation_update', xmlrpc_error_msg(), array(), WATCHDOG_ERROR);
      drupal_set_message(xmlrpc_error_msg(), 'error');
    }
    else {
      $untranslated   = variable_get('live_translation_update_untranslated', array());
      $update_time    = variable_get('live_translation_update_time', array());
      watchdog('live_translation', 'Translation status updated to !langname', array('!langname' => $language->native), WATCHDOG_ERROR);
      drupal_set_message(t('Translation status updated to !langname', array('!langname' => $language->native)));

      foreach ($modules as $mod => $module) {
        $update_time[$langcode][$mod]   = time() + LIVE_TRANSLATION_LIMIT;
        if (is_array($pending_translations[$mod])) {
          $import_status[$langcode][$mod] = $pending_translations[$mod]['new'];
          $untranslated[$langcode][$mod]  = $pending_translations[$mod]['un'];
        }
        else {
          $import_status[$langcode][$mod] = $pending_translations[$mod];
          $untranslated[$langcode][$mod]  = 0;
        }
      }

      // Update the status
      variable_set('live_translation_update_time', $update_time);
      variable_set('live_translation_update_untranslated', $untranslated);
      variable_set('live_translation_import_status', $import_status);
    }
  }

  // Go to the report page
  if ($return) {
    return;
  }
  drupal_goto('admin/reports/live-translation');
}

/**
 * Get all modules statuses
 *
 * @return array
 */
function _live_translation_get_status() {
  module_load_include('inc', 'update', 'update.compare');
  $modules        = update_get_projects();
  $languages      = language_list('enabled');
  $status         = _live_translation_status();
  $import_status  = variable_get('live_translation_import_status', array());
  $import_time    = variable_get('live_translation_import_time', array());
  $untranslated   = variable_get('live_translation_update_untranslated', array());
  $data           = array();

  foreach ($languages[1] as $langcode => $language) {
    if ($langcode == 'en') {
      continue;
    }
    foreach ($modules as $mod => $module) {
      $data[$langcode][$mod] = array(
        'name'    => $module['info']['project'],
        'lang'    => $language->native,
        'status'  => $status[$langcode][$mod],
        'strings' => isset($import_status[$langcode][$mod]) ? $import_status[$langcode][$mod] : 0,
        'time'    => isset($import_time[$langcode][$mod]) ? $import_time[$langcode][$mod] : 0,
        'un'      => isset($untranslated[$langcode][$mod]) ? $untranslated[$langcode][$mod] : '-',
      );
    }
  }
  return $data;
}
