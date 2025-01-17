<?php
/**
 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: init_gzip.php 2019-04-12 08:49:16Z webchills $
 */
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}
// Used in the "Backup Manager" to compress backups
  define('LOCAL_EXE_GZIP', '/usr/bin/gzip');
  define('LOCAL_EXE_GUNZIP', '/usr/bin/gunzip');
  define('LOCAL_EXE_ZIP', '/usr/local/bin/zip');
  define('LOCAL_EXE_UNZIP', '/usr/local/bin/unzip');

// GZIP for Admin
// if gzip_compression is enabled, start to buffer the output
  if ( (int)GZIP_LEVEL >= 1 && $ext_zlib_loaded = extension_loaded('zlib') && trim(ini_get('output_handler')) == '') {
    if (($ini_zlib_output_compression = (int)ini_get('zlib.output_compression')) < 1) {
      @ini_set('zlib.output_compression', 1);
    }
    if (($ini_zlib_output_compression = (int)ini_get('zlib.output_compression')) < 1) {
      ob_start('ob_gzhandler');
    } else {
      @ini_set('zlib.output_compression_level', (int)GZIP_LEVEL);
    }
  }

/**
 * tell any proxies to store both the compressed and uncompressed versions of content, so output doesn't get served mangled
 */
header("Vary: Accept-Encoding");
