<?php
/**
 * File for class SpeedwareStructHentUndervisningstilbudDetalje
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentUndervisningstilbudDetalje originally named HentUndervisningstilbudDetalje
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentUndervisningstilbudDetalje extends SpeedwareWsdlClass
{
	/**
	 * The UndervisningstilbudID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $UndervisningstilbudID;
	/**
	 * The Skole
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Skole;
	/**
	 * Constructor method for HentUndervisningstilbudDetalje
	 * @see parent::__construct()
	 * @param int $_undervisningstilbudID
	 * @param string $_skole
	 * @return SpeedwareStructHentUndervisningstilbudDetalje
	 */
	public function __construct($_undervisningstilbudID,$_skole = NULL)
	{
		parent::__construct(array('UndervisningstilbudID'=>$_undervisningstilbudID,'Skole'=>$_skole));
	}
	/**
	 * Get UndervisningstilbudID value
	 * @return int
	 */
	public function getUndervisningstilbudID()
	{
		return $this->UndervisningstilbudID;
	}
	/**
	 * Set UndervisningstilbudID value
	 * @param int $_undervisningstilbudID the UndervisningstilbudID
	 * @return int
	 */
	public function setUndervisningstilbudID($_undervisningstilbudID)
	{
		return ($this->UndervisningstilbudID = $_undervisningstilbudID);
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
	 * @return SpeedwareStructHentUndervisningstilbudDetalje
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