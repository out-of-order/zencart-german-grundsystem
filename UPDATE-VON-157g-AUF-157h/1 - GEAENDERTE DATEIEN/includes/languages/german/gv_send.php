<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: gv_send.php 2024-04-12 18:52:16Z webchills $
 */

define('HEADING_TITLE', 'Geschenkgutschein versenden');
define('HEADING_TITLE_CONFIRM_SEND', 'Sende Geschenkgutschein Bestätigung');
define('HEADING_TITLE_COMPLETED', 'Geschenkgutschein versendet');
define('NAVBAR_TITLE', 'Geschenkgutschein versenden');
define('EMAIL_SUBJECT', 'Nachricht von ' . STORE_NAME);
define('HEADING_TEXT','<br>Bitte tragen Sie unten die Daten für den Geschenkgutschein ein, den Sie versenden möchten. Für weitere Informationen zum Thema Geschenkgutscheine, lesen Sie bitte die <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '</a>.<br>');
define('ENTRY_MESSAGE', 'Ihre Nachricht:'); 

define('ENTRY_AMOUNT','Betrag des Geschenkgutscheins:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Empfängername wurde nicht ausgefüllt.  Füllen Sie ihn bitte unten aus. ');
define('ERROR_ENTRY_AMOUNT_CHECK','<span class="errorText">Ungültiger oder zu hoher Betrag</span>');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK','<span class="errorText">Ungültige E-Mail Adresse</span>');
define('MAIN_MESSAGE','<br>Sie haben sich entschieden, einen Geschenkgutschein im Wert von <strong>%s</strong><br>an <strong>%s</strong>, mit der E-Mail Adresse <strong>%s</strong>, zu versenden.<br><br><br>Der Inhalt Ihrer Nachricht lautet:<br>');
define('SECONDARY_MESSAGE', 'Guten Tag %s,<br><br>' . 'Du hast einen Geschenkgutschein im Wert von %s von %s erhalten');
define('PERSONAL_MESSAGE','%s schreibt:');
define('TEXT_SUCCESS','Herzlichen Glückwunsch, der Geschenkgutschein wurde erfolgreich versendet.');
define('TEXT_SEND_ANOTHER', 'Wollen Sie einen weiteren Geschenkgutschein versenden?');

define('EMAIL_GV_TEXT_SUBJECT', 'Ein Geschenk von %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER','Herzlichen Glückwunsch, Sie haben einen Geschenkgutschein im Wert von <strong>%s</strong> erhalten.');
define('EMAIL_GV_FROM','Dieser Geschenkgutschein wurde Ihnen von <strong>%s</strong> geschenkt.' . "\n\n");



define('EMAIL_GV_MESSAGE','<br>Mit folgender Nachricht:<br>');
define('EMAIL_GV_SEND_TO','Hallo %s,');
define('EMAIL_GV_REDEEM','Sie können Ihren Geschenkgutschein ab sofort einlösen. Notieren Sie sich bitte hierfür diese Gutscheinnummer: <strong>%s</strong> ' . "\n");

define('EMAIL_GV_LINK','Um den Gutschein einzulösen, klicken Sie bitte auf diesen Link. ');


define('EMAIL_GV_FIXED_FOOTER','Sollten Sie Probleme mit dem Einlösen des Geschenkgutscheins über diesen Link haben, können Sie die Gutscheinnummer Ihres Geschenkgutscheins während des Bestellvorgangs eingeben.<br><br>');
define('EMAIL_GV_SHOP_FOOTER', '');
