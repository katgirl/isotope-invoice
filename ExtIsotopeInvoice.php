<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * PHP version 5
 * @copyright  Copyright (C) 2013 Kirsten Roschanski
 * @author     Kirsten Roschanski <kat@kirsten-roschanski.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */
 
/**
 * Class ExtIsotopeInvoice
 *
 * @copyright  Copyright (C) 2013 Kirsten Roschanski
 * @author     Kirsten Roschanski <kat@kirsten-roschanski.de>
 * @package    IsotopeInvoice 
 * @filesource https://github.com/katgirl/isotope_invoice
 */ 

class ExtIsotopeInvoice extends Model 
{
  /**
   * Initialize the object
   */
  public function __construct()
  {
    parent::__construct();
    $this->import('Isotope');
  }
  
  
  /**
   * New parameter for TemplateObject
   */
  public function getGenerateCollection(&$objTemplate, $arrItems, IsotopeProductCollection $objProductCollection) 
  { 
    
    if ( ! preg_match("/iso_invoice/", $objTemplate->getName() ) )
    { 
      return;
    }  
    
    $objTemplate->invoiceTitle       = $GLOBALS['TL_LANG']['isoInvoice']['iso_invoice_title']; 
    $objTemplate->orderIdLabel       = $GLOBALS['TL_LANG']['isoInvoice']['orderIdLabel'];
    $objTemplate->orderId            = $objProductCollection->order_id;
    $objTemplate->orderDateLabel     = $GLOBALS['TL_LANG']['isoInvoice']['orderDateLabel'];
    $objTemplate->orderDate          = date($GLOBALS['TL_CONFIG']['dateFormat'], $objProductCollection->date);
    $objTemplate->arrBillingAddress  = $objProductCollection->billing_address;
    $objTemplate->arrShippingAddress = $objProductCollection->shipping_address ? $objProductCollection->shipping_address : $objProductCollection->billing_address;
    
    // Switch Template
    $objTemplate->setName($this->Isotope->Config->invoice_template);    
  } 
}

