<?php
/**
 * ot_total order-total module
 *
 * Zen Cart Gwerman Specific (158 code in 157)
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: ot_total.php 2022-12-14 22:49:16Z webchills $
 */
  class ot_total {

    /**
     * $_check is used to check the configuration key set up
     * @var int
     */
    protected $_check;
    /**
     * $code determines the internal 'code' name used to designate "this" order total module
     * @var string
     */
    public $code;
    /**
     * $description is a soft name for this order total method
     * @var string 
     */
    public $description;
    /**
     * $sort_order is the order priority of this order total module when displayed
     * @var int
     */
    public $sort_order;
    /**
     * $title is the displayed name for this order total method
     * @var string
     */
    public $title;
    /**
     * $output is an array of the display elements used on checkout pages
     * @var array
     */
    public $output = [];

    function __construct() {
      $this->code = 'ot_total';
      $this->title = MODULE_ORDER_TOTAL_TOTAL_TITLE;
      $this->description = MODULE_ORDER_TOTAL_TOTAL_DESCRIPTION;
      $this->sort_order = defined('MODULE_ORDER_TOTAL_TOTAL_SORT_ORDER') ? MODULE_ORDER_TOTAL_TOTAL_SORT_ORDER : null;
      if (null === $this->sort_order) return false;

      $this->output = array();
    }

    function process() {
      global $order, $currencies;
      $this->output[] = array('title' => $this->title . ':',
                              'text' => $currencies->format($order->info['total'], true, $order->info['currency'], $order->info['currency_value']),
                              'value' => $order->info['total']);
    }

    function check() {
      global $db;
      if (!isset($this->_check)) {
        $check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_ORDER_TOTAL_TOTAL_STATUS'");
        $this->_check = $check_query->RecordCount();
      }

      return $this->_check;
    }

    function keys() {
      return array('MODULE_ORDER_TOTAL_TOTAL_STATUS', 'MODULE_ORDER_TOTAL_TOTAL_SORT_ORDER');
    }

    function install() {
      global $db;
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('This module is installed', 'MODULE_ORDER_TOTAL_TOTAL_STATUS', 'true', '', '6', '1','zen_cfg_select_option(array(\'true\'), ', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_ORDER_TOTAL_TOTAL_SORT_ORDER', '999', 'Sort order of display.', '6', '2', now())");
    }

    function remove() {
      global $db, $messageStack;
      if (!isset($_GET['override']) && $_GET['override'] != '1') {
        $messageStack->add('header', ERROR_MODULE_REMOVAL_PROHIBITED . $this->code);
        return false;
      }
      $db->Execute("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }
  }
