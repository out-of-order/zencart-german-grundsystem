<?php
/**
 * Header code file for the Advanced Search Input page
 *
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: header_php.php 2023-10-28 14:49:16Z webchills $
 */
  require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));
  $breadcrumb->add(NAVBAR_TITLE_1);

//test:
//&keyword=die+hard&categories_id=10&inc_subcat=1&manufacturers_id=4&pfrom=1&pto=50&dfrom=01%2F01%2F2003&dto=12%2F20%2F2005

  $sData['keyword'] =  stripslashes(isset($_GET['keyword']) ? zen_output_string_protected($_GET['keyword']) : '');
  $sData['search_in_description'] = (isset($_GET['search_in_description']) ? zen_output_string((int)$_GET['search_in_description']) : 1);
  $sData['categories_id'] = (isset($_GET['categories_id'])    ? zen_output_string((int)$_GET['categories_id']) : 0);
  $sData['inc_subcat'] = (isset($_GET['inc_subcat'])       ? zen_output_string((int)$_GET['inc_subcat']) : 1);
  $sData['manufacturers_id'] = (isset($_GET['manufacturers_id']) ? zen_output_string((int)$_GET['manufacturers_id']) : 0);
  $sData['dfrom'] =    (isset($_GET['dfrom']) ? zen_output_string($_GET['dfrom']) : zen_output_string(DOB_FORMAT_STRING));
  $sData['dto'] =      (isset($_GET['dto'])   ? zen_output_string($_GET['dto']) : zen_output_string(DOB_FORMAT_STRING));
  $sData['pfrom'] =    (isset($_GET['pfrom']) ? zen_output_string($_GET['pfrom']) : '');
  $sData['pto'] =      (isset($_GET['pto'])   ? zen_output_string($_GET['pto']) : '');

// check manufacturers
$result = $db->Execute("SELECT manufacturers_id FROM " . TABLE_MANUFACTURERS . " LIMIT 1");
$skip_manufacturers = ($result->EOF);
