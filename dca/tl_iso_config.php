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
 * Table tl_iso_config
 */

// Palettes 
$GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default'] = str_replace
(
    '{config_legend}',
    '{bank_account_legend:hide},bank_name,bank_id,account_number,iban,bic;{config_legend}',
    $GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default']
);
// Palettes 
$GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default'] = str_replace
(
    'vat_no',
    'tax_number,vat_no,register,managing_directors',
    $GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default']
);

// Fields
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['bank_name'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['bank_name'],
		'exclude'                 => true,
		'inputType'               => 'text',
		'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['bank_id'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['bank_id'],
		'exclude'                 => true,
		'inputType'               => 'text',
		'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['account_number'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['account_number'],
		'exclude'                 => true,
		'inputType'               => 'text',
		'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['iban'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['iban'],
		'exclude'                 => true,
		'inputType'               => 'text',
		'eval'                    => array('maxlength'=>255, 'tl_class'=>'clr w50')
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['bic'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['bic'],
		'exclude'                 => true,
		'inputType'               => 'text',
		'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['tax_number'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['tax_number'],
		'exclude'                 => true,
		'inputType'               => 'text',
		'eval'                    => array('maxlength'=>255, 'tl_class'=>'clr w50')
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['register'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['register'],
		'exclude'                 => true,
		'inputType'               => 'text',
		'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['managing_directors'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['managing_directors'],
		'exclude'                 => true,
		'inputType'               => 'text',
		'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
);
