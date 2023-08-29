<?php
/**
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: ScriptedInstaller.php 2023-05-20 08:54:16Z webchills $
 */

namespace Zencart\PluginSupport;

class ScriptedInstaller
{
    public function __construct($dbConn, $errorContainer)
    {
        $this->dbConn = $dbConn;
        $this->errorContainer = $errorContainer;
    }

    public function doInstall()
    {
        $installed = $this->executeInstall();
        return $installed;
    }

    public function doUninstall()
    {
        $uninstalled = $this->executeUninstall();
        return $uninstalled;
    }

    protected function executeInstall()
    {
        return true;
    }

    protected function executeUninstall()
    {
        return true;
    }

    protected function executeInstallerSql($sql)
    {
        $this->dbConn->dieOnErrors = false;
        $this->dbConn->Execute($sql);
        if ($this->dbConn->error_number !== 0) {
            $this->errorContainer->addError(0, $this->dbConn->error_text, true, PLUGIN_INSTALL_SQL_FAILURE);
            return false;
        }
        $this->dbConn->dieOnErrors = true;
        return true;
    }
}