<?php
/**
 * zcAjaxAdminNotifications
 *
 * @package templateSystem
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: zcAjaxAdminNotifications.php 2022-02-12 17:13:51Z webchills $
 */
class zcAjaxAdminNotifications extends base
{

    public function forget()
    {
        global $db;

        if (!isset($_POST['key'])) {
            return (array(
                'data' => false
            ));
        }

        $sql = "INSERT INTO " . TABLE_ADMIN_NOTIFICATIONS . "(notification_key, admin_id, dismissed) VALUE (:nKey:,:adminId:, 1) 
               ON DUPLICATE KEY UPDATE notification_key = :nKey:, admin_id = :adminId:, dismissed = 1";

        $sql = $db->bindVars($sql, ':adminId:', $_POST['admin_id'], 'integer');
        $sql = $db->bindVars($sql, ':nKey:', $_POST['key'], 'string');
        $result = $db->execute($sql);

        return (array(
            'data' => $result
        ));
    }

}
