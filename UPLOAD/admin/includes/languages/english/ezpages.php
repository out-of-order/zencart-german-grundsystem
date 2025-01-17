<?php
/** 
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: ezpages.php 2023-10-28 18:03:16Z webchills $
 */
 
define('HEADING_TITLE', 'EZ-Pages');
define('TABLE_HEADING_PAGES', 'Page Title');

define('TABLE_HEADING_VSORT_ORDER', 'Sidebox Sort Order');
define('TABLE_HEADING_HSORT_ORDER', 'Footer Sort Order');
define('TEXT_PAGES_TITLE', 'Page Title:');
define('TEXT_PAGES_HTML_TEXT', 'HTML Content:');

define('TEXT_PAGES_STATUS_CHANGE', 'Status Change: %s');
define('TEXT_INFO_DELETE_INTRO', 'Are you sure you want to delete this page?');
define('SUCCESS_PAGE_INSERTED', 'Success: The page has been inserted.');
define('SUCCESS_PAGE_UPDATED', 'Success: The page has been updated.');
define('SUCCESS_PAGE_REMOVED', 'Success: The page has been removed.');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Success: The status of the page has been updated.');
define('ERROR_PAGE_TITLE_REQUIRED', 'Error: Page title required.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Error: Unknown status flag.');
define('ERROR_MULTIPLE_HTML_URL', 'Error: you have defined multiple settings when only one may be defined per Link ...<br>Only define either: HTML Content -or- Internal Link URL -or- External Link URL');


define('TABLE_HEADING_STATUS_HEADER', 'Header:');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Sidebox:');
define('TABLE_HEADING_STATUS_FOOTER', 'Footer:');
define('TABLE_HEADING_STATUS_TOC', 'TOC:');
define('TABLE_HEADING_CHAPTER', 'Chapter:');
define('TABLE_HEADING_VISIBLE', 'Visible:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Open New Window:');
define('TABLE_HEADING_PAGE_IS_SSL', 'Page is SSL:');
define('TABLE_HEADING_PAGE_IS_VISIBLE', 'Page is Visible:');
define('TABLE_HEADING_PAGE_IS_VISIBLE_EXPLANATION', ' Page shown even if not in header, footer or sidebox<br>
(If all the settings for Visible and Header and Footer and Sidebox are all OFF then visitors attempting to see the page will get a Page-Not-Found response.)');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> pages)');
define('IMAGE_NEW_PAGE', 'New Page');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'Select a page ...');

define('TEXT_HEADER_SORT_ORDER', 'Order:');
define('TEXT_SIDEBOX_SORT_ORDER', 'Order:');
define('TEXT_FOOTER_SORT_ORDER', 'Order:');
define('TEXT_TOC_SORT_ORDER', 'Order:');
define('TEXT_CHAPTER', 'Prev/Next Chapter:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Chapter:&nbsp;<br>');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', 'Header Sort Order used while generating pages in single row for the header; Sort order should be greater than zero to enable this page in the row type listing');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', 'Sidebox Sort order is used when pages are listed in vertical links; Sort order should be greater than zero to enable it in vertical listing, else it will be considered as HTML text for special purposes');
define('TEXT_FOOTER_ORDER_EXPLAIN', 'Footer Sort Order used while generating pages in single row footer; Sort order should be greater than zero to enable this page in the row type listing');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'TOC (Table of Contents) Sort Order used while generating pages that are customized as either a single row (header/footer, etc) or vertically, based on individual needs; Sort order should be greater than zero to enable this page in the listing');
define('TEXT_CHAPTER_EXPLAIN', 'Chapters are used with TOC (Table of Contents) Sort Order for the display on Previous/Next. Links in the TOC will consist of pages matching this chapter number, and will be displayed in the TOC Sort Order');

define('TEXT_ALT_URL', 'Internal Link URL:');
define('TEXT_ALT_URL_EXPLAIN', 'If specified, the page content will be ignored and this INTERNAL alternate URL will be used to make the link<br>Example to Reviews: index.php?main_page=reviews<br>Example to My Account: index.php?main_page=account and mark as SSL');

define('TEXT_ALT_URL_EXTERNAL', 'External Link URL:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', 'If specified, the page content will be ignored and this EXTERNAL alternate URL will be used to make the link<br>Example to external link: http://www.sashbox.net');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Display Order: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Chapter/TOC');
define('TEXT_SORT_HEADER_TITLE', 'Header');
define('TEXT_SORT_SIDEBOX_TITLE', 'Sidebox');
define('TEXT_SORT_FOOTER_TITLE', 'Footer');
define('TEXT_SORT_PAGE_TITLE', 'Page Title');
define('TEXT_SORT_PAGE_ID_TITLE', 'Page ID, Title');

define('TEXT_PAGE_TITLE', 'Title:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', 'WARNING: Multiple Link Definition');