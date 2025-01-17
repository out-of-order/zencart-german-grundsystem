<?php
/**
 * autoloader array for paypal
 *
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: paypal_ipn.core.php 2023-12-30 17:53:16Z webchills $
 */
if (!defined('IS_ADMIN_FLAG')) {
 die('Illegal Access');
}

$autoLoadConfig[0][] = [
    'autoType' => 'include',
    'loadFile' => DIR_WS_INCLUDES . 'version.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'class.notifier.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'classInstantiate',
    'className' => 'notifier',
    'objectName' => 'zco_notifier',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'class.phpmailer.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'template_func.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'language.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'sniffer.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'shopping_cart.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'navigation_history.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'currencies.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'message_stack.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'breadcrumb.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'Customer.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'zcDate.php',
];
/**
 * Breakpoint 5.
 *
 * $zcDate = new zcDate(); ... will be re-initialized when/if the require_languages.php module is run.
 *
 */
$autoLoadConfig[5][] = [
    'autoType' => 'classInstantiate',
    'className' => 'zcDate',
    'objectName' => 'zcDate',
];
/**
 * Breakpoint 30.
 *
 * $zc_cache = new cache();
 *
 */
$autoLoadConfig[30][] = [
    'autoType' => 'classInstantiate',
    'className' => 'cache',
    'objectName' => 'zc_cache',
];
/**
 * Breakpoint 40.
 *
 * require('includes/init_includes/init_db_config_read.php');
 *
 */
$autoLoadConfig[40][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_db_config_read.php',
];
/**
 * Breakpoint 50.
 *
 * $sniffer = new sniffer();
 * require('includes/init_includes/init_sefu.php');
 */
$autoLoadConfig[50][] = [
    'autoType' => 'classInstantiate',
    'className' => 'sniffer',
    'objectName' => 'sniffer',
];
$autoLoadConfig[50][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_sefu.php',
];
/**
 * Breakpoint 60.
 *
 * require('includes/init_includes/init_general_funcs.php');
 * require('includes/init_includes/init_tlds.php');
 *
 */
$autoLoadConfig[60][] = [
    'autoType' => 'require',
    'loadFile' => DIR_WS_FUNCTIONS . 'functions_osh_update.php',
];
$autoLoadConfig[60][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_general_funcs.php',
];
$autoLoadConfig[60][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_tlds.php',
];
/**
 * Include PayPal-specific functions
 * require('includes/modules/payment/paypal/paypal_functions.php');
 */
$autoLoadConfig[60][] = [
    'autoType' => 'include',
    'loadFile' => DIR_WS_MODULES . 'payment/paypal/paypal_functions.php',
];
/**
 * Breakpoint 70.
 *
 * require('includes/init_includes/init_sessions.php');
 *
 */
$autoLoadConfig[70][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_sessions.php',
];
$autoLoadConfig[71][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_paypal_ipn_sessions.php',
];
/**
 * Breakpoint 80.
 *
 * if(!$_SESSION['cart']) $_SESSION['cart'] = new shoppingCart();
 *
 */
$autoLoadConfig[80][] = [
    'autoType' => 'classInstantiate',
    'className' => 'shoppingCart',
    'objectName' => 'cart',
    'checkInstantiated' => true,
    'classSession' => true,
];
/**
 * Breakpoint 90.
 *
 * currencies = new currencies();
 *
 */
$autoLoadConfig[90][] = [
    'autoType' => 'classInstantiate',
    'className' => 'currencies',
    'objectName' => 'currencies',
];
/**
 * Breakpoint 100.
 *
 * require('includes/init_includes/init_sanitize.php');
 * $template = new template_func();
 *
 */
$autoLoadConfig[100][] = [
    'autoType' => 'classInstantiate',
    'className' => 'template_func',
    'objectName' => 'template',
];
$autoLoadConfig[100][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_sanitize.php',
];
/**
 * Breakpoint 110.
 *
 * require('includes/init_includes/init_languages.php');
 * require('includes/init_includes/init_templates.php');
 *
 */
$autoLoadConfig[110][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_languages.php',
];
$autoLoadConfig[110][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_templates.php',
];
/**
 * Breakpoint 120.
 *
 * require('includes/init_includes/init_currencies.php');
 *
 */
$autoLoadConfig[120][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_currencies.php',
];
/**
 * Breakpoint 130.
 *
 * messageStack = new messageStack();
 *
 */
$autoLoadConfig[130][] = [
    'autoType' => 'classInstantiate',
    'className' => 'messageStack',
    'objectName' => 'messageStack',
];
/**
 * Breakpoint 170.
 *
 * require('includes/languages/english/checkout_process.php');
 *
 */
$autoLoadConfig[170][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_ipn_postcfg.php',
];
