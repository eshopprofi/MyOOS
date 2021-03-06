<?php
/* ----------------------------------------------------------------------
   $Id: dp.php,v 1.3 2007/06/13 16:42:27 r23 Exp $

   MyOOS [Shopsystem]
   http://www.oos-shop.de/
   
   
   Copyright (c) 2003 - 2016 by the MyOOS Development Team.
   ----------------------------------------------------------------------
   Based on:

   File: dp.php,v 1.4 2003/02/18 03:33:00 harley_vb 
   ----------------------------------------------------------------------
   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2002 - 2003 osCommerce
   ----------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------- */

define('MODULE_SHIPPING_DP_STATUS_TITLE', 'Deutsche Post WorldNet');
define('MODULE_SHIPPING_DP_STATUS_DESC', 'Wollen Sie den Versand ber die deutsche Post anbieten?');

define('MODULE_SHIPPING_DP_HANDLING_TITLE', 'Handling Fee');
define('MODULE_SHIPPING_DP_HANDLING_DESC', 'Bearbeitungsgebhr fr diese Versandart in Euro');

define('MODULE_SHIPPING_DP_TAX_CLASS_TITLE', 'Steuersatz');
define('MODULE_SHIPPING_DP_TAX_CLASS_DESC', 'W�len Sie den MwSt.-Satz fr diese Versandart aus.');

define('MODULE_SHIPPING_DP_ZONE_TITLE', 'Versand Zone');
define('MODULE_SHIPPING_DP_ZONE_DESC', 'Wenn Sie eine Zone ausw�len, wird diese Versandart nur in dieser Zone angeboten.');

define('MODULE_SHIPPING_DP_SORT_ORDER_TITLE', 'Reihenfolge der Anzeige');
define('MODULE_SHIPPING_DP_SORT_ORDER_DESC', 'Niedrigste wird zuerst angezeigt.');

define('MODULE_SHIPPING_DP_COUNTRIES_1_TITLE', 'DP Zone 1 Countries');
define('MODULE_SHIPPING_DP_COUNTRIES_1_DESC', 'Comma separated list of two character ISO country codes that are part of Zone 1');

define('MODULE_SHIPPING_DP_COST_1_TITLE', 'DP Zone 1 Shipping Table');
define('MODULE_SHIPPING_DP_COST_1_DESC', 'Shipping rates to Zone 1 destinations based on a range of order weights. Example: 0-3:8.50,3-7:10.50,... Weights greater than 0 and less than or equal to 3 would cost 14.57 for Zone 1 destinations.');

define('MODULE_SHIPPING_DP_COUNTRIES_2_TITLE', 'DP Zone 2 Countries');
define('MODULE_SHIPPING_DP_COUNTRIES_2_DESC', 'Comma separated list of two character ISO country codes that are part of Zone 2');

define('MODULE_SHIPPING_DP_COST_2_TITLE', 'DP Zone 2 Shipping Table');
define('MODULE_SHIPPING_DP_COST_2_DESC', 'Shipping rates to Zone 2 destinations based on a range of order weights. Example: 0-3:8.50,3-7:10.50,... Weights greater than 0 and less than or equal to 3 would cost 23.78 for Zone 2 destinations.');

define('MODULE_SHIPPING_DP_COUNTRIES_3_TITLE', 'DP Zone 3 Countries');
define('MODULE_SHIPPING_DP_COUNTRIES_3_DESC', 'Comma separated list of two character ISO country codes that are part of Zone 3');

define('MODULE_SHIPPING_DP_COUNTRIES_3_TITLE', 'DP Zone 3 Countries');
define('MODULE_SHIPPING_DP_COUNTRIES_3_DESC', 'Comma separated list of two character ISO country codes that are part of Zone 3');

define('MODULE_SHIPPING_DP_COST_3_TITLE', 'DP Zone 3 Countries');
define('MODULE_SHIPPING_DP_COST_3_DESC', 'Shipping rates to Zone 3 destinations based on a range of order weights. Example: 0-3:8.50,3-7:10.50,... Weights greater than 0 and less than or equal to 3 would cost 26.84 for Zone 3 destinations.');

define('MODULE_SHIPPING_DP_COUNTRIES_4_TITLE', 'DP Zone 4 Countries');
define('MODULE_SHIPPING_DP_COUNTRIES_4_DESC', 'Comma separated list of two character ISO country codes that are part of Zone 4');

define('MODULE_SHIPPING_DP_COST_4_TITLE', 'DP Zone 4 Shipping Table');
define('MODULE_SHIPPING_DP_COST_4_DESC', 'Shipping rates to Zone 4 destinations based on a range of order weights. Example: 0-3:8.50,3-7:10.50,... Weights greater than 0 and less than or equal to 3 would cost 32.98 for Zone 4 destinations.');

define('MODULE_SHIPPING_DP_COUNTRIES_5_TITLE', 'DP Zone 5 Countries');
define('MODULE_SHIPPING_DP_COUNTRIES_5_DESC', 'Comma separated list of two character ISO country codes that are part of Zone 5');

define('MODULE_SHIPPING_DP_COST_5_TITLE', 'DP Zone 5 Shipping Table');
define('MODULE_SHIPPING_DP_COST_5_DESC', 'Shipping rates to Zone 5 destinations based on a range of order weights. Example: 0-3:8.50,3-7:10.50,... Weights greater than 0 and less than or equal to 3 would cost 32.98 for Zone 5 destinations.');

define('MODULE_SHIPPING_DP_COUNTRIES_6_TITLE', 'DP Zone 6 Countries');
define('MODULE_SHIPPING_DP_COUNTRIES_6_DESC', 'Comma separated list of two character ISO country codes that are part of Zone 6');

define('MODULE_SHIPPING_DP_COST_6_TITLE', 'DP Zone 6 Shipping Table');
define('MODULE_SHIPPING_DP_COST_6_DESC', 'Shipping rates to Zone 6 destinations based on a range of order weights. Example: 0-3:8.50,3-7:10.50,... Weights greater than 0 and less than or equal to 3 would cost 5.62 for Zone 6 destinations.');


$aLang['module_shipping_dp_text_title'] = 'DHL';
$aLang['module_shipping_dp_text_description'] = 'DHL World Net';
$aLang['module_shipping_dp_text_way'] = 'Dispatch to';
$aLang['module_shipping_dp_text_units'] = 'kg';
$aLang['module_shipping_dp_invalid_zone'] = 'Unfortunately it is not possible to dispatch into this country';
$aLang['module_shipping_dp_undefined_rate'] = 'Forwarding expenses cannot be calculated for the moment';

