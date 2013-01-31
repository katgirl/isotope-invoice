<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
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
 * @copyright  KAT-Webdesign (2013)
 * @author     Kirsten Roschanski
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */
 
/**
 * Class ExtIsotopeInvoice
 *
 * Provide methods to handle Isotope product collections.
 * @copyright  KAT-Webdesign (2013)
 * @author     Kirsten Roschanski <k.roschanski@kat-webdesign.de>
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
		$this->loadLanguageFile('countries');
	}
	
	
	/**
	 * New parameter for TemplateObject
	 */
	public function getGenerateCollection(&$objTemplate, $arrItems, IsotopeProductCollection $objProductCollection) 
	{ 	
		$objTemplate->invoiceTitle = $GLOBALS['TL_LANG']['MSC']['iso_invoice_title']; 
		$objTemplate->orderIdLabel = $GLOBALS['TL_LANG']['MSC']['orderIdLabel'];
		$objTemplate->orderId = $this->order_id;
		$objTemplate->orderDateLabel = $GLOBALS['TL_LANG']['MSC']['orderDateLabel'];
		$objTemplate->orderDate = date($GLOBALS['TL_CONFIG']['dateFormat'], $objProductCollection->date);

		
		$objTemplate->bankNameLabel = $GLOBALS['TL_LANG']['MSC']['bankNameLabel'];
		$objTemplate->bankName = $this->Isotope->Config->bank_name;
		$objTemplate->bankIdLabel = $GLOBALS['TL_LANG']['MSC']['bankIdLabel'];
		$objTemplate->bankId = $this->Isotope->Config->bank_id;
		$objTemplate->accountNumberLabel = $GLOBALS['TL_LANG']['MSC']['accountNumberLabel'];
		$objTemplate->accountNumber = $this->Isotope->Config->account_number;
		$objTemplate->ibanLabel = $GLOBALS['TL_LANG']['MSC']['ibanLabel'];
		$objTemplate->iban = $this->Isotope->Config->iban;
		$objTemplate->bicLabel = $GLOBALS['TL_LANG']['MSC']['bicLabel'];
		$objTemplate->bic = $this->Isotope->Config->bic;
		$objTemplate->taxNumberLabel = $GLOBALS['TL_LANG']['MSC']['taxNumberLabel'];
		$objTemplate->taxNumber = $this->Isotope->Config->tax_number;
		$objTemplate->vatNoLabel = $GLOBALS['TL_LANG']['MSC']['vatNoLabel'];
		$objTemplate->vatNo = $this->Isotope->Config->vat_no;
		$objTemplate->registerLabel = $GLOBALS['TL_LANG']['MSC']['registerLabel'];
		$objTemplate->register = $this->Isotope->Config->register;
		$objTemplate->managingDirectorsLabel = $GLOBALS['TL_LANG']['MSC']['managingDirectorsLabel'];
		$objTemplate->managing_directors = $this->Isotope->Config->managing_directors;
	} 
}

