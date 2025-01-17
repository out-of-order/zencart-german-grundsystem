<?php
/**
 * initsystem.php
 *
 * loads and interprets the autoloader files
 *
 * @package initSystem
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: initsystem.php 2012-11-06 15:29:16Z webchills $
 */
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}

$base_dir = DIR_WS_INCLUDES . 'auto_loaders/';
if (file_exists(DIR_WS_INCLUDES . 'auto_loaders/overrides/' . $loader_file)) {
  $base_dir = DIR_WS_INCLUDES . 'auto_loaders/overrides/';
}
/**
 * load the default application_top autoloader file.
 */
if (file_exists($base_dir . $loader_file)) include($base_dir . $loader_file);
if ($loader_dir = dir(DIR_WS_INCLUDES . 'auto_loaders')) {
  while ($loader_file = $loader_dir->read()) {
    $matchPattern = '/^' . $loaderPrefix . '\./';
    if ((preg_match($matchPattern, $loader_file) > 0) && (preg_match('~^[^\._].*\.php$~i', $loader_file) > 0)) {
      if ($loader_file != $loaderPrefix . '.core.php') {
        $base_dir = DIR_WS_INCLUDES . 'auto_loaders/';
        if (file_exists(DIR_WS_INCLUDES . 'auto_loaders/overrides/' . $loader_file)) {
          $base_dir = DIR_WS_INCLUDES . 'auto_loaders/overrides/';
        }
        /**
         * load the application_top autoloader files.
         */
        include($base_dir . $loader_file);
      }
    }
  }
  $loader_dir->close();
}
