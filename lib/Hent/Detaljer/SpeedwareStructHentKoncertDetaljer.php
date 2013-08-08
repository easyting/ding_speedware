<?php
/**
 * File for class SpeedwareStructHentKoncertDetaljer
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentKoncertDetaljer originally named HentKoncertDetaljer
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentKoncertDetaljer extends SpeedwareWsdlClass
{
	/**
	 * The KoncertID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $KoncertID;
	/**
	 * The Skole
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Skole;
	/**
	 * Constructor method for HentKoncertDetaljer
	 * @see parent::__construct()
	 * @param int $_koncertID
	 * @param string $_skole
	 * @return SpeedwareStructHentKoncertDetaljer
	 */
	public function __construct($_koncertID,$_skole = NULL)
	{
		parent::__construct(array('KoncertID'=>$_koncertID,'Skole'=>$_skole));
	}
	/**
	 * Get KoncertID value
	 * @return int
	 */
	public function getKoncertID()
	{
		return $this->KoncertID;
	}
	/**
	 * Set KoncertID value
	 * @param int $_koncertID the KoncertID
	 * @return int
	 */
	public function setKoncertID($_koncertID)
	{
		return ($this->KoncertID = $_koncertID);
	}
	/**
	 * Get Skole value
	 * @return string|null
	 */
	public function getSkole()
	{
		return $this->Skole;
	}
	/**
	 * Set Skole value
	 * @param string $_skole the Skole
	 * @return string
	 */
	public function setSkole($_skole)
	{
		return ($this->Skole = $_skole);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentKoncertDetaljer
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>