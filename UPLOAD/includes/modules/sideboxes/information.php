<?php
/**
 * Zen Cart German Specific
 * information sidebox - displays list of general info links, as defined in this file
 *
 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: information.php 2022-04-09 16:17:16Z webchills $
 */

$information = [];

  if (DEFINE_SHIPPINGINFO_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_SHIPPING) . '">' . BOX_INFORMATION_SHIPPING . '</a>';
  }
  if (DEFINE_PRIVACY_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_PRIVACY) . '">' . BOX_INFORMATION_PRIVACY . '</a>';
  }
  if (DEFINE_CONDITIONS_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_CONDITIONS) . '">' . BOX_INFORMATION_CONDITIONS . '</a>';
  }
  if (DEFINE_WIDERRUFSRECHT_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_WIDERRUFSRECHT) . '">' . BOX_INFORMATION_WIDERRUFSRECHT . '</a>';
  }
  if (DEFINE_ZAHLUNGSARTEN_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_ZAHLUNGSARTEN) . '">' . BOX_INFORMATION_ZAHLUNGSARTEN . '</a>';
  }
  
  if (DEFINE_IMPRESSUM_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_IMPRESSUM) . '">' . BOX_INFORMATION_IMPRESSUM . '</a>';
  }
  if (DEFINE_CONTACT_US_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_CONTACT_US, '', 'SSL') . '">' . BOX_INFORMATION_CONTACT . '</a>';
  }

// forum/bb link:
  if (!empty($external_bb_url) && !empty($external_bb_text)) {
    $information[] = '<a href="' . $external_bb_url . '" rel="noopener" target="_blank">' . $external_bb_text . '</a>';
  }

  if (DEFINE_SITE_MAP_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_SITE_MAP) . '">' . BOX_INFORMATION_SITE_MAP . '</a>';
  }

// only show GV FAQ when feature enabled
  if (defined('MODULE_ORDER_TOTAL_GV_STATUS') && MODULE_ORDER_TOTAL_GV_STATUS == 'true') {
    $information[] = '<a href="' . zen_href_link(FILENAME_GV_FAQ) . '">' . BOX_INFORMATION_GV . '</a>';
  }
// only show Discount Coupon FAQ when feature enabled
  if (DEFINE_DISCOUNT_COUPON_STATUS <= 1 && defined('MODULE_ORDER_TOTAL_COUPON_STATUS') && MODULE_ORDER_TOTAL_COUPON_STATUS == 'true') {
    $information[] = '<a href="' . zen_href_link(FILENAME_DISCOUNT_COUPON) . '">' . BOX_INFORMATION_DISCOUNT_COUPONS . '</a>';
  }

  if (SHOW_NEWSLETTER_UNSUBSCRIBE_LINK == 'true') {
    $information[] = '<a href="' . zen_href_link(FILENAME_UNSUBSCRIBE) . '">' . BOX_INFORMATION_UNSUBSCRIBE . '</a>';
  }

  require($template->get_template_dir('tpl_information.php',DIR_WS_TEMPLATE, $current_page_base,'sideboxes'). '/tpl_information.php');

  $title =  BOX_HEADING_INFORMATION;
  $title_link = false;

  require($template->get_template_dir($column_box_default, DIR_WS_TEMPLATE, $current_page_base,'common') . '/' . $column_box_default);