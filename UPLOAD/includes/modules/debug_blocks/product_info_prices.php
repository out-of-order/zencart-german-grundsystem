<?php
/**
 * product_info_prices.php
 *
 * @package debugTools
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: product_info_prices.php 2011-08-09 15:49:16Z hugo13 $
 */


if ($debug_on == '1') {
  echo 'Looking at ' . (int)$_GET['products_id'] . '<br>';
  echo 'Base Price ' . zen_get_products_base_price((int)$_GET['products_id']) . '<br>';
  echo 'Actual Price ' . zen_get_products_actual_price((int)$_GET['products_id']) . '<br>';
  echo 'Special Price ' . zen_get_products_special_price((int)$_GET['products_id'], true) . '<br>';
  echo 'Sale Maker Discount Type ' . zen_get_products_sale_discount_type((int)$_GET['products_id']) . '<br>';
  echo 'Discount Calc ' . zen_get_discount_calc((int)$_GET['products_id']) . '<br>';
  echo 'Discount Calc Attr $100 $75 $50 $25 ' . zen_get_discount_calc((int)$_GET['products_id'], true, 100) . ' | ' . zen_get_discount_calc((int)$_GET['products_id'], true, 75) . ' | ' . zen_get_discount_calc((int)$_GET['products_id'], true, 50) . ' | ' . zen_get_discount_calc((int)$_GET['products_id'], true, 25) . '<br>';

  echo '<br> Start of page - product <br>' .
  zen_get_show_product_switch($products_id_current, 'weight') . '<br>' .
  zen_get_show_product_switch($products_id_current, 'weight_attributes') . '<br>' .
  zen_get_show_product_switch($products_id_current, 'date_added') . '<br>' .
  zen_get_show_product_switch($products_id_current, 'quantity') . '<br>' .
  zen_get_show_product_switch($products_id_current, 'model') . '<br>' .
  SHOW_PRODUCT_INFO_WEIGHT_ATTRIBUTES . '<br>' .
  SHOW_PRODUCT_INFO_WEIGHT . '<br>' .
  SHOW_PRODUCT_INFO_MANUFACTURER . '<br>' .
  SHOW_PRODUCT_INFO_QUANTITY . '<br>' .
  '<br>';
}
?>
<?php
if (false) {
echo 'Looking at ' . (int)$_GET['products_id'] . '<br>';
echo 'Base Price ' . zen_get_products_base_price((int)$_GET['products_id']) . '<br>';
echo 'Actual Price ' . zen_get_products_actual_price((int)$_GET['products_id']) . '<br>';
echo 'Special Price ' . zen_get_products_special_price((int)$_GET['products_id'], true) . '<br>';
echo 'Sale Maker Discount Type ' . zen_get_products_sale_discount_type((int)$_GET['products_id']) . '<br>';
echo 'Discount Calc ' . zen_get_discount_calc((int)$_GET['products_id']) . '<br>';
echo 'Discount Calc Attr $100 $75 $50 $25 ' . zen_get_discount_calc((int)$_GET['products_id'], true, 100) . ' | ' . zen_get_discount_calc((int)$_GET['products_id'], true, 75) . ' | ' . zen_get_discount_calc((int)$_GET['products_id'], true, 50) . ' | ' . zen_get_discount_calc((int)$_GET['products_id'], true, 25) . '<br>';
}
?>