<?php
/**
 * Side Box Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_no_notifications.php 2011-08-09 15:49:16Z hugo13 $
 */
  $content = "";
  $content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent centeredContent">';
  $content .= '<a href="' . zen_href_link($_GET['main_page'], zen_get_all_get_params(array('action')) . 'action=notify', $request_type) . '">' . zen_image(DIR_WS_TEMPLATE_IMAGES . OTHER_IMAGE_BOX_NOTIFY_YES, OTHER_BOX_NOTIFY_YES_ALT) . '<br>' . sprintf(BOX_NOTIFICATIONS_NOTIFY, zen_get_products_name($_GET['products_id'])) .'</a>';
  $content .= '</div>';
?>