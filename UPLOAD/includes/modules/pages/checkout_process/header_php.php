<?php
/**
 * Checkout Process Page
 *
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: header_php.php 2023-10-29 21:58:16Z webchills $
 */
// This should be first line of the script:
  $zco_notifier->notify('NOTIFY_HEADER_START_CHECKOUT_PROCESS');

require DIR_WS_MODULES . zen_get_module_directory('checkout_process.php');

// load the after_process function from the payment modules
$payment_modules->after_process();

$zco_notifier->notify('NOTIFY_CHECKOUT_PROCESS_BEFORE_CART_RESET', $insert_id);
$_SESSION['cart']->reset(true);

// unregister session variables used during checkout
unset($_SESSION['sendto'], $_SESSION['billto'], $_SESSION['shipping'], $_SESSION['payment'], $_SESSION['comments']);
$order_total_modules->clear_posts();//ICW ADDED FOR CREDIT CLASS SYSTEM

// This should be before the zen_redirect:
$zco_notifier->notify('NOTIFY_HEADER_END_CHECKOUT_PROCESS', $insert_id);

zen_redirect(zen_href_link(FILENAME_CHECKOUT_SUCCESS, (isset($_GET['action']) && $_GET['action'] === 'confirm' ? 'action=confirm' : ''), 'SSL'));

require DIR_WS_INCLUDES . 'application_bottom.php';
