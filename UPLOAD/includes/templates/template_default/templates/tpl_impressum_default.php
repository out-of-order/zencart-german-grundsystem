<?php
/**
 * Page Template
 *
 * Loaded automatically by index.php?main_page=impressum
 * Displays impressum page.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_impressum_default.php 747 2016-06-03 19:58:36Z webchills $
 */

?>

<div class="centerColumn" id="impressum">
<?php if (IT_RECHT_KANZLEI_STATUS == 'ja') { ?>
<h1 id="impressumHeading"><?php echo $var_pageDetails->fields['pages_title']; ?></h1>
<?php } else { ?>
<h1 id="impressumHeading"><?php echo HEADING_TITLE; ?></h1>
<?php } ?>

<?php if (DEFINE_IMPRESSUM_STATUS >= 1 and DEFINE_IMPRESSUM_STATUS <= 2) { ?>
<div id="impressumMainContent" class="content">
<?php if (IT_RECHT_KANZLEI_STATUS == 'ja') { ?>
<?php echo $var_pageDetails->fields['pages_html_text']; ?>
<?php } else { ?>
<?php
/**
 * require the html_define for the impressum page
 */
  require($define_page);
?>
<?php } ?>
</div>
<?php } ?>
<div class="buttonRow back"><?php echo zen_back_link() . zen_image_button(BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) . '</a>'; ?></div>
</div>

