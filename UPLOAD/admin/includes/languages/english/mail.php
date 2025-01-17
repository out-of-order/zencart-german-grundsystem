<?php
/** 
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: mail.php 2023-10-28 19:49:16Z webchills $
 */

define('HEADING_TITLE', 'Send Email To Customers');
define('TEXT_CUSTOMER' , 'Customer:');
define('TEXT_SUBJECT', 'Subject:');
define('TEXT_FROM', 'From:');
define('TEXT_MESSAGE', 'Text-Only <br>Message:');
define('TEXT_MESSAGE_HTML','Rich Text <br>Message:');
define('TEXT_ATTACHMENTS_LIST','Selected Attachment: ');
define('TEXT_SELECT_ATTACHMENT','Attachment<br>on server: ');
define('TEXT_SELECT_ATTACHMENT_TO_UPLOAD','Attachment<br>to upload<br>&amp; attach: ');
define('TEXT_ATTACHMENTS_DIR','Folder for upload: ');

define('NOTICE_EMAIL_SENT_TO', 'Notice: Email sent to: %s');
define('NOTICE_EMAIL_FAILED_SEND', 'Notice: FAILED to send Email to all recipients: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No customer has been selected.');
define('ERROR_NO_SUBJECT', 'Error: No subject has been entered.');
define('ERROR_ATTACHMENTS', 'Error: You cannot select to both UPLOAD and ADD separate attachments. Please choose one only.');