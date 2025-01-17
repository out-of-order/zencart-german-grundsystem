<?php
/**
 * @package Image Handler
 * @copyright Copyright 2005-2006 Tim Kroeger (original author)
 * @copyright Copyright 2018 lat 9 - Vinos de Frutas Tropicales
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: config.colorbox.php 2018-06-15 16:13:51Z webchills $
 */
 
// This module (and the accompanying observer class) provide the "Fual Slimbox"
// display of products' images (both main and additional) using the Zen Cart
// notifiers added by v5.0.0 and later of the "Image Handler" plugin.
//
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

// ----
// Initialize the plugin's observer ...
// 
$autoLoadConfig[200][] = array(
    'autoType' => 'class',
    'loadFile' => 'observers/ColorBoxObserver.php'
);
$autoLoadConfig[200][] = array(
    'autoType' => 'classInstantiate',
    'className' => 'ColorBoxObserver',
    'objectName' => 'colorBoxObserver'
);
