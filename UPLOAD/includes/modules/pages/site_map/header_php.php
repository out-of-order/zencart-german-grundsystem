<?php
/**
 * site_map header_php.php
 *
 * @package page
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: header_php.php 2011-08-09 15:49:16Z hugo13 $
 */

// This should be first line of the script:
$zco_notifier->notify('NOTIFY_HEADER_START_SITE_MAP');
/**
 * load language files
 */
require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));
$breadcrumb->add(NAVBAR_TITLE);
// include template specific file name defines
$define_page = zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', FILENAME_DEFINE_SITE_MAP, 'false');
/**
 * load the site map class
 */
require DIR_WS_CLASSES . 'site_map.php';
$zen_SiteMapTree = new zen_SiteMapTree;
// This should be last line of the script:
$zco_notifier->notify('NOTIFY_HEADER_END_SITE_MAP');