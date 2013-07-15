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
 * Class IsotopeMailInsertTags
 *
 * @author     Kirsten Roschanski <kat@kirsten-roschanski.de>
 * @package    IsotopeInvoice 
 * @filesource https://github.com/katgirl/isotope_invoice
 */
class IsotopeMailInsertTags extends IsotopeOrder
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
   * Push new Insert Tags into Maildataarray
   */
  public function getOrderEmailData(IsotopeOrder $objOrder, $arrData)
  {
    $arrData['note']                      = $objOrder->notes;
    $arrData['note_text']                 = strip_tags($objOrder->notes);
    $arrData['config_bank_name']          = strip_tags($this->Isotope->Config->bank_name);
    $arrData['config_bank_id']            = strip_tags($this->Isotope->Config->bank_id);
    $arrData['config_account_number']     = strip_tags($this->Isotope->Config->account_number);
    $arrData['config_iban']               = strip_tags($this->Isotope->Config->iban);
    $arrData['config_bic']                = strip_tags($this->Isotope->Config->bic);
    $arrData['config_tax_number']         = strip_tags($this->Isotope->Config->tax_number);
    $arrData['config_register']           = strip_tags($this->Isotope->Config->register);
    $arrData['config_managing_directors'] = strip_tags($this->Isotope->Config->managing_directors);
    $arrData['date_paid']                 = $this->parseDate($GLOBALS['TL_CONFIG']['dateFormat'], $objOrder->date_paid);
    $arrData['date_shipped']              = $this->parseDate($GLOBALS['TL_CONFIG']['dateFormat'], $objOrder->date_shipped);
    
    return $arrData;
  }
}  
