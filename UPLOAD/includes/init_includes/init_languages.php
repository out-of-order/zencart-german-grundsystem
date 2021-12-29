<?php
/**
 * initialise language handling
 * see {@link  http://www.zen-cart.com/wiki/index.php/Developers_API_Tutorials#InitSystem wikitutorials} for more details.
 *
 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: init_languages.php 2021-11-28 21:21:16Z webchills $
 */
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}
if (!isset($_SESSION['language']) || isset($_GET['language'])) {
  $lng = new language();
  if (isset($_GET['language']) && zen_not_null($_GET['language'])) {
    $lng->set_language($_GET['language']);
    $zco_notifier->notify('NOTIFY_LANGUAGE_CHANGE_REQUESTED_BY_VISITOR', $_GET['language'], $lng);
  } else {
    if (LANGUAGE_DEFAULT_SELECTOR == 'Browser') {
      $lng->get_browser_language();
      if (!zen_not_null($lng->language['id'])) {
        $lng->set_language(DEFAULT_LANGUAGE);
      }
    } else {
      $lng->set_language(DEFAULT_LANGUAGE);
    }
  }
  $_SESSION['language'] = (zen_not_null($lng->language['directory']) ? $lng->language['directory'] : 'english');
  $_SESSION['languages_id'] = (zen_not_null($lng->language['id']) ? (int)$lng->language['id'] : 1);
  $_SESSION['languages_code'] = (zen_not_null($lng->language['code']) ? $lng->language['code'] : 'en');
}
