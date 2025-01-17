<?php
/**
 * ajaxTestDBConnection.php
 
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: ajaxTestDBConnection.php 2024-02-02 13:59:53Z webchills $
 */
define('IS_ADMIN_FLAG', false);
define('DIR_FS_INSTALL', __DIR__ . '/');
define('DIR_FS_ROOT', realpath(__DIR__ . '/../') . '/');

require(DIR_FS_INSTALL . 'includes/application_top.php');

$systemChecker = new systemChecker();

$error = true;
$errorList = [];
if (isset($_POST['db_name'])) {
    zcRegistry::setValue('db_host', $_POST['db_host']);
    zcRegistry::setValue('db_user', $_POST['db_user']);
    zcRegistry::setValue('db_password', $_POST['db_password']);
    zcRegistry::setValue('db_name', $_POST['db_name']);
    zcRegistry::setValue('db_charset', $_POST['db_charset']);
    $results = $systemChecker->runTests('database');
    if (count($results) !== 0) {
        $keys = array_keys($results);
        $errorList = $results[$keys[0]];
        $error = true;
    } else {
        $error = false;
    }
}
echo json_encode(['error' => $error, 'errorList' => $errorList]);
