<?php
/**
 * Page Template
 *

 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_discount_coupon_default.php 2022-04-09 08:49:16Z webchills $
 */
?>
<div class="centerColumn" id="discountcouponInfo">
<h1 id="discountcouponInfoHeading"><?php echo HEADING_TITLE; ?></h1>

<div id="discountcouponInfoMainContent" class="content">
<?php if ((DEFINE_DISCOUNT_COUPON_STATUS >= 1 and DEFINE_DISCOUNT_COUPON_STATUS <= 2) && $text_coupon_help == '') {
  require($define_page);
 } else {
  echo $text_coupon_help;
} ?>
</div>

<?php echo zen_draw_form('discount_coupon', zen_href_link(FILENAME_DISCOUNT_COUPON, 'action=lookup', 'SSL', false)); ?>
<fieldset>
<legend><?php echo TEXT_DISCOUNT_COUPON_ID_INFO; ?></legend>
<div class="div_discount_coupon">
<label class="inputLabel" for="lookup-discount-coupon"><?php echo TEXT_DISCOUNT_COUPON_ID; ?></label>
<?php echo zen_draw_input_field('lookup_discount_coupon', (isset($_POST['lookup_discount_coupon'])) ? $_POST['lookup_discount_coupon'] : '', 'size="40" id="lookup-discount-coupon" autofocus', 'search');?>
</div>
</fieldset>

<?php if ($text_coupon_help == '') { ?>
<div class="buttonRow forward"><?php echo zen_image_submit(BUTTON_IMAGE_SEND, BUTTON_LOOKUP_ALT); ?></div>
<?php } else { ?>
<div class="buttonRow forward"><?php echo '<a href="' . zen_href_link(FILENAME_DISCOUNT_COUPON) . '">' . zen_image_button(BUTTON_IMAGE_CANCEL, BUTTON_CANCEL_ALT) . '</a>&nbsp;&nbsp;' . zen_image_submit(BUTTON_IMAGE_SEND, BUTTON_LOOKUP_ALT); ?></div>
<?php } ?>
<div class="buttonRow back"><?php echo zen_back_link() . zen_image_button(BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) . '</a>'; ?></div>
<br class="clearBoth">
</form>
</div>
