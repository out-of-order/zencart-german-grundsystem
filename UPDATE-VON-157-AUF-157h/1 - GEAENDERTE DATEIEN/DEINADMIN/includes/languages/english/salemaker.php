<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: salemaker.php 2023-10-28 15:49:16Z webchills $
 */

define('HEADING_TITLE', 'SaleMaker');

define('TEXT_SALEMAKER_NAME', 'SaleName:');
define('TEXT_SALEMAKER_DEDUCTION', 'Deduction:');
define('TEXT_SALEMAKER_DEDUCTION_TYPE', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type:&nbsp;&nbsp;');
define('TEXT_SALEMAKER_PRICERANGE_FROM', 'Products Pricerange:');
define('TEXT_SALEMAKER_PRICERANGE_TO', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_SALEMAKER_SPECIALS_CONDITION', 'If a product is a Special:');
define('TEXT_SALEMAKER_DATE_START', 'Start Date:');
define('TEXT_SALEMAKER_DATE_END', 'End Date:');
define('TEXT_SALEMAKER_CATEGORIES', '<b>Or</b> check the categories to which this sale applies:');
define('TEXT_SALEMAKER_POPUP', '<a href="javascript:session_win();"><span class="errorText"><b>Click here for help with Salemaker.</b></span></a>');

define('TEXT_SALEMAKER_ENTIRE_CATALOG', 'Check this box if you want the sale to be applied to <b>all products</b>:');
define('TEXT_SALEMAKER_TOP', 'Entire catalog');

define('TEXT_INFO_DATE_STATUS_CHANGE', 'Last Status Change:');
define('TEXT_INFO_SPECIALS_CONDITION', 'Specials Criteria:');
define('TEXT_INFO_DEDUCTION', 'Deduction:');
define('TEXT_INFO_PRICERANGE_FROM', 'Pricerange:');
define('TEXT_INFO_PRICERANGE_TO', ' to ');
define('TEXT_INFO_DATE_START', 'Starts:');
define('TEXT_INFO_DATE_END', 'Expires:');
define('SPECIALS_CONDITION_DROPDOWN_0', 'Ignore Specials Price - Apply to Product Price and Replace Special');
define('SPECIALS_CONDITION_DROPDOWN_1', 'Ignore SaleCondition - No Sale Applied When Special Exists');
define('SPECIALS_CONDITION_DROPDOWN_2', 'Apply SaleDeduction to Specials Price - Otherwise Apply to Price');

define('TEXT_INFO_HEADING_COPY_SALE', 'Copy Sale');
define('TEXT_INFO_COPY_INTRO', 'Enter a name for the copy of<br>&nbsp;&nbsp;"%s"');
define('TEXT_INFO_HEADING_DELETE_SALE', 'Delete Sale');
define('TEXT_INFO_DELETE_INTRO', 'Are you sure you want to delete this sale?');
define('TEXT_MORE_INFO', '(More Info)');

define('TEXT_WARNING_SALEMAKER_PREVIOUS_CATEGORIES','&nbsp;Warning : %s sale(s) already include this category');