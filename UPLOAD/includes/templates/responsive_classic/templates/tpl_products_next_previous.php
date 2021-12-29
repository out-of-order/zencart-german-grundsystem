<?php
/**
 * Page Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_products_next_previous.php 2019-06-15 17:33:58Z webchills $
 * @author Linda McGrath osCommerce@WebMakers.com
 * @author Thanks to Nirvana, Yoja and Joachim de Boer
 */
?>
<?php
  if (!isset($display_as_mobile)) $display_as_mobile = ($detect->isMobile() && !$detect->isTablet() || $_SESSION['layoutType'] == 'mobile' or  $detect->isTablet() || $_SESSION['layoutType'] == 'tablet'); 
?>
<div class="navNextPrevWrapper centeredContent">
<?php
// only display when more than 1
  if ($products_found_count > 1) {
?>
<p class="navNextPrevCounter"><?php echo (PREV_NEXT_PRODUCT); ?><?php echo ($position+1 . "/" . $counter); ?></p>
<div class="navNextPrevList"><a href="<?php echo zen_href_link(zen_get_info_page($previous), "cPath=$cPath&products_id=$previous"); ?>"><?php if ($display_as_mobile) { echo '<i class="fa fa-chevron-circle-left" title="' . BUTTON_PREVIOUS_ALT . '"></i></a></div>';?><?php } else { ?><?php echo $previous_image . $previous_button; ?></a></div><?php } ?>

<div class="navNextPrevList"><a href="<?php echo zen_href_link(FILENAME_DEFAULT, "cPath=$cPath"); ?>"><?php if ($display_as_mobile) { echo '<i class="fa fa-list" title="' . BUTTON_VIEW_ALL_ALT . '"></i></a></div>';?><?php } else { ?><?php echo zen_image_button(BUTTON_IMAGE_RETURN_TO_PROD_LIST, BUTTON_RETURN_TO_PROD_LIST_ALT); ?></a></div><?php } ?>

<div class="navNextPrevList"><a href="<?php echo zen_href_link(zen_get_info_page($next_item), "cPath=$cPath&products_id=$next_item"); ?>"><?php if ($display_as_mobile) { echo '<i class="fa fa-chevron-circle-right" title="' . BUTTON_NEXT_ALT . '"></i></a></div>';?><?php } else { ?><?php echo  $next_item_button . $next_item_image; ?></a></div><?php } ?>

<?php
  }
?>
</div>
