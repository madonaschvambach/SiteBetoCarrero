<?php
/**
 * @author Bruno Massa
 * @file
 *  Live Translation settings and admin pages
 */

module_load_include('inc', 'live_translation');

/**
 * Show which modules now have uptaded translations.
 *
 * @return
 *   HMTL. The list of module and in which language they have updated strings.
 */
function _live_translation_report() {
  module_load_include('update.inc', 'live_translation');

  if (arg(3) == 'update') {
    _live_translation_update();
  }
  elseif (arg(3) == 'import' and arg(4) and arg(5)) {
    _live_translation_import(arg(4), arg(5));
  }
  elseif (arg(3) == 'update_all') {
    live_translation_update_all();
  }
  $data = _live_translation_get_status();

  return empty($data) ? t('There is no language enabled (besides English)') : theme('live_translation_report', $data);
}

/**
 * Let users to select the translation server URL.
 *
 * @return
 *   HMTL. The list of module and in which language they have updated strings.
 */
function _live_translation_settings() {
  $languages = language_list('enabled');
  $form['live_translation_servers'] = array(
    '#title'  => t('Servers'),
    '#tree'   => TRUE,
    '#type'   => 'fieldset',
  );

  foreach ($languages[1] as $langcode => $language) {
    if ($langcode == 'en') {
      continue;
    }
    $form['live_translation_servers'][$langcode] = array(
      '#default_value' => _live_translation_servers($langcode),
      '#title'         => $language->native,
      '#type'          => 'textfield',
    );
  }
  return system_settings_form($form);
}

/**
 * Show which modules now have uptaded translations.
 *
 * @ingroup themable
 */
function theme_live_translation_report($data) {
  $output = l(t('Check the updates now.'), 'admin/reports/live-translation/update');
  $output.= '&nbsp;&nbsp;&nbsp;'.l(t('Update all.'), 'admin/reports/live-translation/update_all');

  $statuses = array(
    LIVE_TRANSLATION_STATUS_UNKNOWN => array('name' => t('Unknown'),                                  'class' => 'warning'),
    LIVE_TRANSLATION_STATUS_OUTDATE => array('name' => '',                                            'class' => 'error'),
    LIVE_TRANSLATION_STATUS_OK      => array('name' => t('Ok'),                                       'class' => 'ok'),
    LIVE_TRANSLATION_STATUS_PROJECT => array('name' => t('Project not available on server'),          'class' => ''),
    LIVE_TRANSLATION_STATUS_VERSION => array('name' => t('Project version not available on server'),  'class' => ''),
  );
  foreach ($data as $langcode => $language) {
    $rows = array();
    $collapsed = TRUE;
    foreach ($language as $mod => $module) {
      if ($module['status'] == LIVE_TRANSLATION_STATUS_OUTDATE) {
        $status = l(t('Outdated: !strings new strings', array('!strings' => $module['strings'])), "admin/reports/live-translation/import/$mod/$langcode");
        $collapsed = FALSE;
      }
      else {
        $status = $statuses[$module['status']]['name'];

        if ($module['status'] == LIVE_TRANSLATION_STATUS_UNKNOWN) {
          $collapsed = FALSE;
        }
      }

      $rows[] = array(
        'data'  => array(
          $module['name'],
          $status,
          $module['un'],
          (($module['status'] == LIVE_TRANSLATION_STATUS_PROJECT || $module['status'] == LIVE_TRANSLATION_STATUS_VERSION) or $module['time'] == 0) ? '-' : format_date($module['time'], 'small')
        ),
        'class' => array($statuses[$module['status']]['class'])
      );
      $language = $module['lang'];
    }
    $output .= theme('fieldset', array('element' => array(
      '#title'        => $language,
      '#children'     => theme('table', array(
          'header' => array(t('Module'), t('Status'), t('Untranslated'), t('Last update')),
          'rows' => $rows,
      ))
    )));
  }

  drupal_add_css(drupal_get_path('module', 'update') .'/update.css');

  return $output;
}