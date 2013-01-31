-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the Contao    *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

--
-- Table `tl_iso_config`
--

CREATE TABLE `tl_iso_config` (
  `bank_name` varchar(255) NOT NULL default '',
  `bank_id` varchar(255) NOT NULL default '',
  `account_number` varchar(255) NOT NULL default '',
  `iban` varchar(255) NOT NULL default '',
  `bic` varchar(255) NOT NULL default '',
  `tax_number` varchar(255) NOT NULL default '',
  `register` varchar(255) NOT NULL default '',
  `managing_directors` varchar(255) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

