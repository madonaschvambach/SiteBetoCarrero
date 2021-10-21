<?php
/**
 * @author Bruno Massa
 * @file
 *  Live Translation misc (non-kook) functions
 */

/**
 * Check the current state of translations:
 *  - LIVE_TRANSLATION_STATUS_OK means that its up-to-date
 *  - LIVE_TRANSLATION_STATUS_UNKNOWN means that the translation server was not
 *      consulted for 3 days or more
 *  - LIVE_TRANSLATION_STATUS_OUTDATE means that we know that the translations
 *      are outdated compared to the server.
 *
 * @return
 *   int. The translation status like described above.
 */
function _live_translation_status($single_value = NULL) {
  static $result, $result_single;

  if (empty($result)) {
    module_load_include('inc', 'update', 'update.compare');
    $modules        = array_keys(update_get_projects());
    $languages      = language_list('enabled');
    $import_status  = variable_get('live_translation_import_status', array());
    $import_time    = variable_get('live_translation_import_time', array());
    $update_time    = variable_get('live_translation_update_time', array());
    $time           = time();
    $result_single = LIVE_TRANSLATION_STATUS_OK;

    foreach (array_keys($languages[1]) as $langcode) {
      if ($langcode == 'en') {
        continue;
      }

      foreach ($modules as $mod) {
        if (!isset($update_time[$langcode][$mod]) or $update_time[$langcode][$mod] < $time) {
          $result[$langcode][$mod] = LIVE_TRANSLATION_STATUS_UNKNOWN;
          $result_single = LIVE_TRANSLATION_STATUS_UNKNOWN;
        }
        elseif (!empty($import_status[$langcode][$mod]) and $import_status[$langcode][$mod] > 0) {
          $result[$langcode][$mod] = LIVE_TRANSLATION_STATUS_OUTDATE;
          $result_single = ($result_single == LIVE_TRANSLATION_STATUS_OK) ? LIVE_TRANSLATION_STATUS_OUTDATE : LIVE_TRANSLATION_STATUS_OK;
        }
        elseif (!empty($import_status[$langcode][$mod]) and $import_status[$langcode][$mod] == -1) {
          $result[$langcode][$mod] = LIVE_TRANSLATION_STATUS_PROJECT;
        }
        elseif (!empty($import_status[$langcode][$mod]) and $import_status[$langcode][$mod] == -2) {
          $result[$langcode][$mod] = LIVE_TRANSLATION_STATUS_VERSION;
        }
        else {
          $result[$langcode][$mod] = LIVE_TRANSLATION_STATUS_OK;
        }
      }
    }
  }

  return empty($single_value) ? $result : $result_single;
}

/**
 * Return the default server URLs.
 *
 * @param $lang
 *   String. The language code.
 * @return
 *   String. The server URL that stores translations
 */
function _live_translation_servers($langcode) {
  $servers = variable_get('live_translation_servers', array());
  if (isset($servers[$langcode])) {
    return $servers[$langcode];
  }

  switch ($langcode) {
    case 'am':
      return 'http://www.drupal.am';
    case 'be': // Belarussian
      return 'http://drupaler.ru';
    case 'bg': // Bulgarian
      return 'http://drupaler.ru';
    case 'cat':
      return 'http://drupal.cat';
    case 'cz':
      return 'http://l10n.drupal.cz';
    case 'dk':
      return 'http://drupal.l10n.dk';
    case 'es': // Spanish
      return 'http://l10n.drupal.org.es';
    case 'et': // Estonian
      return 'http://drupaler.ru';
    case 'fr': // French
      return 'http://l10n.drupalfr.org';
    case 'gr': // Greek
      return 'http://l10n.mydrupal.gr';
    case 'hu': // Hungarian
      return 'http://forditas.mindworks.hu';
    case 'id':
      return 'http://drupal.web.id';
    case 'in':
      return 'http://l10n.kashipur.in';
    case 'it':
      return 'http://l10n.drupalitalia.org';
    case 'kk': // Kazakh
      return 'http://drupaler.ru';
    case 'lv': // Latvian
      return 'http://l10n.drupal.lv';
    case 'no': // Norwegian
      return 'http://lokalisering.drupalnorge.no';
    case 'pl': // Polish
      return 'http://drupaltranslate.pl';
    case 'pt-br': // Portuguese - Brazil
      return 'http://traducao.titanatlas.com';
    case 'pt-pt': // Portuguese - Portugal
      return 'http://l10n.drupal-pt.org';
    case 'ro': // Romanian
      return 'http://l10n.drupal.zetnet.ro';
    case 'ru': // Russian
      return 'http://drupaler.ru';
    case 'sk': // Slovakian
      return 'http://www.fem.uniag.sk/drupal-l10n-server';
    case 'sr': // Serbian
      return 'http://drupaler.ru';
    case 'th': // Thai
      return 'http://l10n.drupal.in.th';
    case 'tr':
      return 'http://l10n.drupaltr.org';
    case 'uk': // Ukrainian
      return 'http://drupaler.ru';
    case 'vi': // Vietnan
      return 'http://vietcoop.net';
    default:
      return '';
  }

// Basque team   http://itzulpengintza.uhinak.net/
// Bengali team  http://www.mat3impex.com/bengali-drupal-l10n-server/
// Croatian  http://prijevod.drupalhr.org/
// Filipino team   http://pili.pin.as/translations/
// Hebrew team   http://l10n.avramzon.net/
// Persian/Farsi   http://l10n.farzanbeh.com/
// Punjabi   http://kitchen.satluj.com/
// Scots team  http://scots.freso.dk/
// Simplified Chinese team   http://drupalchina.org/hanhua/
// Slovenian team  http://drupal.internetstoritve.com/
// Spanish team  Core: http://l10n.drupal.org.es/ Contrib: http://l10n.drupal-contrib.org/
// Tamil team  http://groups.tamil2friends.com/
}
