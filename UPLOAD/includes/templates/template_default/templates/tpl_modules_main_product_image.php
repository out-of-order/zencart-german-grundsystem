<?php
/**
 * Zen Cart German Specific
 * Module Template
 *

 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_modules_main_product_image.php 2022-04-09 08:06:16Z webchills $
 */
?>
<?php require(DIR_WS_MODULES . zen_get_module_directory(FILENAME_MAIN_PRODUCT_IMAGE)); ?>
<div id="productMainImage" class="centeredContent back">
<?php // bof Zen Colorbox 2012-04-30 niestudio ?>
<?php
if (function_exists('zen_colorbox') && ZEN_COLORBOX_STATUS == 'true') {
  if (ZEN_COLORBOX_GALLERY_MODE == 'true' && ZEN_COLORBOX_GALLERY_MAIN_IMAGE == 'true') {
    $rel = 'colorbox';
  } else {
    $rel = 'colorbox-' . rand(100, 999);
  }
?>
<script type="text/javascript"><!--
document.write('<?php echo '<a href="' . zen_colorbox($products_image_large, addslashes($products_name), LARGE_IMAGE_MAX_WIDTH, LARGE_IMAGE_MAX_HEIGHT) . '" rel="' . $rel . '" class="' . "nofollow" . '" title="' . addslashes($products_name) . '">' . zen_image($products_image_medium, addslashes($products_name), MEDIUM_IMAGE_WIDTH, MEDIUM_IMAGE_HEIGHT) . '<br><span class="imgLink">' . TEXT_CLICK_TO_ENLARGE . '</span></a>'; ?>');
//--></script>
<?php } else { ?>
<?php // eof Zen Colorbox 2012-04-30 niestudio ?>
<script type="text/javascript"><!--
document.write('<?php echo '<a href="javascript:popupWindow(\\\'' . zen_href_link(FILENAME_POPUP_IMAGE, 'pID=' . $_GET['products_id']) . '\\\')">' . zen_image(addslashes($products_image_medium), addslashes($products_name), MEDIUM_IMAGE_WIDTH, MEDIUM_IMAGE_HEIGHT) . '<br><span class="imgLink">' . TEXT_CLICK_TO_ENLARGE . '</span></a>'; ?>');
//--></script>
<?php // bof Zen Colorbox 2012-04-30 niestudio ?>
<?php } ?>
<?php // eof Zen Colorbox 2012-04-30 niestudio ?>
<noscript>
<?php
  echo '<a href="' . zen_href_link(FILENAME_POPUP_IMAGE, 'pID=' . $_GET['products_id']) . '" target="_blank">' . zen_image($products_image_medium, $products_name, MEDIUM_IMAGE_WIDTH, MEDIUM_IMAGE_HEIGHT) . '<br><span class="imgLink">' . TEXT_CLICK_TO_ENLARGE . '</span></a>';
?>
</noscript>
</div>