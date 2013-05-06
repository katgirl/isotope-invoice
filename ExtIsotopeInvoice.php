<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
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
    
    if ( preg_match("/iso_invoice/", $objTemplate->getName() ) )
    {  
      $objTemplate->invoiceTitle      = $GLOBALS['TL_LANG']['isoInvoice']['iso_invoice_title']; 
      $objTemplate->orderIdLabel      = $GLOBALS['TL_LANG']['isoInvoice']['orderIdLabel'];
      $objTemplate->orderId           = $objProductCollection->order_id;
      $objTemplate->orderDateLabel    = $GLOBALS['TL_LANG']['isoInvoice']['orderDateLabel'];
      $objTemplate->orderDate         = date($GLOBALS['TL_CONFIG']['dateFormat'], $objProductCollection->date);
      $objTemplate->arrBillingAddress = $objProductCollection->billing_address;
      
      if ( !$objProductCollection->shipping_address ) 
         $objTemplate->arrShippingAddress = $objProductCollection->shipping_address;    
      else
        $objTemplate->arrShippingAddress = $objProductCollection->billing_address;
      
      // Switch Template
      $objTemplate->setName($this->Isotope->Config->invoice_template);    
    } 
  } 
}

