<?php
/**
 * Module Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_modules_upcoming_products.php 2024-04-12 20:30:16Z webchills $
 */
?>
<!-- bof: upcoming_products -->
<fieldset id="upcoming-products" class="clearBoth">
<legend><?php echo TABLE_HEADING_UPCOMING_PRODUCTS; ?></legend>
<table id="upcomingProductsTable">
<caption><?php echo CAPTION_UPCOMING_PRODUCTS; ?></caption>
  <tr>
    <th scope="col" id="upProductsHeading"><?php echo TABLE_HEADING_PRODUCTS; ?></th>
    <th scope="col" id="upDateHeading"><?php echo TABLE_HEADING_DATE_EXPECTED; ?></th>
  </tr>
<?php
    for($i=0, $row=0, $n=sizeof($expectedItems); $i<$n; $i++, $row++) {
      $rowClass = (($row / 2) == floor($row / 2)) ? "rowEven" : "rowOdd";
      echo '  <tr class="' . $rowClass . '">' . "\n";
      echo '    <td ><a href="' . zen_href_link(zen_get_info_page($expectedItems[$i]['products_id']), 'cPath=' . $productsInCategory[$expectedItems[$i]['products_id']] . '&products_id=' . $expectedItems[$i]['products_id']) . '">' . $expectedItems[$i]['products_name'] . '</a></td>' . "\n";
      echo '    <td class="alignRight" >' . zen_date_short($expectedItems[$i]['date_expected']) . '</td>' . "\n";
      echo '  </tr>' . "\n";
    }
?>
</table>
</fieldset>
<!-- eof: upcoming_products -->
