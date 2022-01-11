<?php
/**
 * checkout_success header_php.php
 *

 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: header_php.php 2020-01-20 21:23:42Z webchills $
 */

// This should be first line of the script:
$zco_notifier->notify('NOTIFY_HEADER_START_CHECKOUT_SUCCESS');

// if the customer is not logged on, redirect them to the shopping cart page
if (!zen_is_logged_in()) {
  zen_redirect(zen_href_link(FILENAME_TIME_OUT));
}

if (!isset($_GET['action']) || (isset($_GET['action']) && $_GET['action'] != 'confirm')) {

$notify_string='';
if (isset($_GET['action']) && ($_GET['action'] == 'update')) {
  $notify_string = 'action=notify&';
  $notify = isset($_POST['notify']) ? $_POST['notify'] : null;

  if (is_array($notify)) {
    for ($i=0, $n=sizeof($notify); $i<$n; $i++) {
      $notify_string .= 'notify[]=' . $notify[$i] . '&';
    }
    if (strlen($notify_string) > 0) $notify_string = substr($notify_string, 0, -1);
  }
  if ($notify_string == 'action=notify&') {
      zen_redirect(zen_href_link(FILENAME_CHECKOUT_SUCCESS, '', 'SSL'));
  } else {
    zen_redirect(zen_href_link(FILENAME_DEFAULT, $notify_string));
  }
}

require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));
$breadcrumb->add(NAVBAR_TITLE_1);
$breadcrumb->add(NAVBAR_TITLE_2);

// find out the last order number generated for this customer account
$orders_query = "SELECT * FROM " . TABLE_ORDERS . "
                 WHERE customers_id = :customersID
                 ORDER BY date_purchased DESC LIMIT 1";
$orders_query = $db->bindVars($orders_query, ':customersID', $_SESSION['customer_id'], 'integer');
$orders = $db->Execute($orders_query);
$orders_id = $orders->fields['orders_id'];

// use order-id generated by the actual order process
// this uses the SESSION orders_id, or if doesn't exist, grabs most recent order # for this cust (needed for paypal-standard and other offsite payment methods).
// Needs reworking in future checkout-rewrite
$zv_orders_id = (isset($_SESSION['order_number_created']) && $_SESSION['order_number_created'] >= 1) ? $_SESSION['order_number_created'] : $orders_id;
$_GET['order_id'] = $orders_id = $zv_orders_id;
$order_summary = !empty($_SESSION['order_summary']) ? $_SESSION['order_summary'] : array();
unset($_SESSION['order_summary'], $_SESSION['order_number_created']);

$additional_payment_messages = '';
if (isset($_SESSION['payment_method_messages']) && $_SESSION['payment_method_messages'] != '') {
  $additional_payment_messages = $_SESSION['payment_method_messages'];
  unset($_SESSION['payment_method_messages']);
}

$statusArray = array();
$statuses_query = "SELECT os.orders_status_name, osh.date_added, osh.comments
                   FROM   " . TABLE_ORDERS_STATUS . " os, " . TABLE_ORDERS_STATUS_HISTORY . " osh
                   WHERE      osh.orders_id = :ordersID
                   AND        osh.orders_status_id = os.orders_status_id
                   AND        os.language_id = :languagesID
                   AND        osh.customer_notified >= 0
                   ORDER BY   osh.date_added";
$statuses_query = $db->bindVars($statuses_query, ':ordersID', $orders_id, 'integer');
$statuses_query = $db->bindVars($statuses_query, ':languagesID', $_SESSION['languages_id'], 'integer');
$statuses = $db->Execute($statuses_query);
foreach ($statuses as $status) {
  $statusArray[] = array('date_added'=>$status['date_added'],
                         'orders_status_name'=>$status['orders_status_name'],
                         'comments'=>$status['comments']);
}
// get order details
require(DIR_WS_CLASSES . 'order.php');
$order = new order($orders_id);


// prepare list of product-notifications for this customer
$notificationsArray = array();
$global_query = "SELECT global_product_notifications
                 FROM " . TABLE_CUSTOMERS_INFO . "
                 WHERE customers_info_id = :customersID";

$global_query = $db->bindVars($global_query, ':customersID', $_SESSION['customer_id'], 'integer');
$global = $db->Execute($global_query);
$flag_global_notifications = $global->fields['global_product_notifications'];

if ($flag_global_notifications != '1') {
  $counter = 0;
  $products_query = "SELECT DISTINCT products_id, products_name
                     FROM " . TABLE_ORDERS_PRODUCTS . "
                     WHERE orders_id = :ordersID
                     ORDER BY products_name";
  $products_query = $db->bindVars($products_query, ':ordersID', $orders_id, 'integer');
  $products = $db->Execute($products_query);

  foreach ($products as $product) {
    $notificationsArray[] = array('counter'=>$counter,
                                  'products_id'=>$product['products_id'],
                                  'products_name'=>$product['products_name']);
    $counter++;
  }
}

$flag_show_products_notification = (CUSTOMERS_PRODUCTS_NOTIFICATION_STATUS == '1' and sizeof($notificationsArray)>0 and $flag_global_notifications != '1') ? true : false ;


$customer_has_gv_balance = false;
$gv_query = "SELECT amount
             FROM " . TABLE_COUPON_GV_CUSTOMER . "
             WHERE customer_id = :customersID ";
$gv_query = $db->bindVars($gv_query, ':customersID', $_SESSION['customer_id'], 'integer');
$gv_result = $db->Execute($gv_query);

if (!$gv_result->EOF && $gv_result->fields['amount'] > 0 ) {
  $customer_has_gv_balance = true;
  $customer_gv_balance = $currencies->format($gv_result->fields['amount']);
}

// include template specific file name defines
$define_page = zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', FILENAME_DEFINE_CHECKOUT_SUCCESS, 'false');

} else {
  echo '<html><head>';
  echo '<script type="text/javascript">
theTimer = 0;
timeOut = 12;

function submit_form()
{
  theTimer = setTimeout("submit_form();", 100);
  if (timeOut > 0) {
    timeOut -= 1;
  }
  else
  {
    clearTimeout(theTimer);
    document.getElementById("submitbutton").disabled = true;
    document.forms.formpost.submit();
  }
}
function continueClick()
{
  clearTimeout(theTimer);
  return true;
}

submit_form();
</script>' . "\n" . '</head>';
  echo '<body style="text-align: center; min-width: 600px;">' . "\n" . '<div style="text-align: center;  width: 600px;  margin-left: auto;  margin-right: auto; margin-top:20%;"><p>This page will automatically redirect you back to ' . STORE_NAME . ' for your order confirmation details.<br />If you are not redirected within 5 seconds, please click the button below to continue.</p>';
  echo "\n" . '<form action="' . zen_href_link(FILENAME_CHECKOUT_SUCCESS, zen_get_all_get_params(array('action')), 'SSL', false) . '" method="post" name="formpost" />' . "\n";
  foreach($_POST as $key => $value) {
    if (!is_array($_POST[$key])) {
      echo zen_draw_hidden_field($key, htmlspecialchars(stripslashes($value), ENT_COMPAT, CHARSET, TRUE)) . "\n";
    }
  }
  if (!isset($_POST['securityToken'])) zen_draw_hidden_field('securityToken', $_SESSION['securityToken']);
  echo "\n" . '<input type="submit" class="submitbutton" id="submitbutton" value=" Continue " onclick="continueClick()" />' . "\n";
  echo '</form></div></body></html>';
  exit();
}

// This should be last line of the script:
$zco_notifier->notify('NOTIFY_HEADER_END_CHECKOUT_SUCCESS');
