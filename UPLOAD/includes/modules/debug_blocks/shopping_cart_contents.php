<?php
/**
 * shopping_cart_contents.php
 *
 * @package debugTools
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: shopping_cart_contents.php 729 2011-08-09 15:49:16Z hugo13 $
 */


if ($debug_on == '1') {
//      echo 'I SHOW IN CART MIXED Product ID 168 on ' . $_SESSION['cart']->in_cart_mixed_discount_quantity('168:d89443fdf309475ce09268e1c1db12dc') . '<br>';
//      echo 'I SHOW IN CART MIXED Product ID 169 off ' . $_SESSION['cart']->in_cart_mixed_discount_quantity('169:d370574074572c79a9d0c96b069f6e32') . '<br>';

      echo 'I AM GV ONLY ' . $_SESSION['cart']->gv_only() . ' - ' . $_SESSION['cart']->get_content_type() . '<br />';
      echo 'Free Products: ' .  $_SESSION['cart']->in_cart_check('product_is_free','1') . '<br />';
      echo 'Virtual Products: ' .  $_SESSION['cart']->in_cart_check('products_virtual','1') . '<br />';
      echo 'Free Shipping Products: ' .  $_SESSION['cart']->in_cart_check('product_is_always_free_shipping','1') . '<br />';
    }
?>