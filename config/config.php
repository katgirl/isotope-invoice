<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * PHP version 5
 * @copyright  Copyright (C) 2013 Kirsten Roschanski
 * @author     Kirsten Roschanski <kat@kirsten-roschanski.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @package    IsotopeInvoice 
 * @filesource https://github.com/katgirl/isotope_invoice
 */

/**
 * Hooks
 */
$GLOBALS['ISO_HOOKS']['generateCollection'][] = array('ExtIsotopeInvoice', 'getGenerateCollection');
$GLOBALS['ISO_HOOKS']['getOrderEmailData'][] = array('IsotopeMailInsertTags', 'getOrderEmailData'); 
