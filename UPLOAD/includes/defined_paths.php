<?php
/**
 *** NOTE: This file contains a list of system-used paths for your site.
 ***       It should NOT be necessary to edit anything here. Anything requiring overrides can be done in override files. ***
 * -- CATALOG version --
 *
 * @package initSystem
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: defined_paths.php 2019-04-13 09:24:16Z webchills $
 */

if (!defined('DIR_WS_IMAGES')) define('DIR_WS_IMAGES', 'images/');
if (!defined('DIR_WS_INCLUDES')) define('DIR_WS_INCLUDES', 'includes/');
if (!defined('DIR_WS_FUNCTIONS')) define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
if (!defined('DIR_WS_CLASSES')) define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
if (!defined('DIR_WS_MODULES')) define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
if (!defined('DIR_WS_LANGUAGES')) define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');
if (!defined('DIR_WS_DOWNLOAD_PUBLIC')) define('DIR_WS_DOWNLOAD_PUBLIC', DIR_WS_CATALOG . 'pub/');
if (!defined('DIR_WS_TEMPLATES')) define('DIR_WS_TEMPLATES', DIR_WS_INCLUDES . 'templates/');
if (!defined('DIR_WS_UPLOADS')) define('DIR_WS_UPLOADS', DIR_WS_IMAGES . 'uploads/');
if (!defined('DIR_FS_UPLOADS')) define('DIR_FS_UPLOADS', DIR_FS_CATALOG . DIR_WS_UPLOADS);
if (!defined('DIR_FS_EMAIL_TEMPLATES')) define('DIR_FS_EMAIL_TEMPLATES', DIR_FS_CATALOG . 'email/');
if (!defined('DIR_FS_DOWNLOAD_PUBLIC')) define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');
if (!defined('SQL_CACHE_METHOD')) define('SQL_CACHE_METHOD', 'none');

if (!defined('DIR_FS_SQL_CACHE')) define('DIR_FS_SQL_CACHE', DIR_FS_CATALOG . 'cache'); // trailing slash omitted
if (!defined('DIR_FS_LOGS')) define('DIR_FS_LOGS', DIR_FS_CATALOG . 'logs'); // trailing slash omitted
if (!defined('DIR_FS_DOWNLOAD')) define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');

if (!defined('SESSION_STORAGE')) define('SESSION_STORAGE', 'db');
if (!defined('DIR_CATALOG_LIBRARY')) {
    define('DIR_CATALOG_LIBRARY', DIR_FS_CATALOG . DIR_WS_INCLUDES . 'library/');
}
