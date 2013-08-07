<?php
/**
 * File for class SpeedwareStructHentLokaleListe
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentLokaleListe originally named HentLokaleListe
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentLokaleListe extends SpeedwareWsdlClass
{
	/**
	 * The SkoleID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $SkoleID;
	/**
	 * The Skole
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Skole;
	/**
	 * Constructor method for HentLokaleListe
	 * @see parent::__construct()
	 * @param int $_skoleID
	 * @param string $_skole
	 * @return SpeedwareStructHentLokaleListe
	 */
	public function __construct($_skoleID,$_skole = NULL)
	{
		parent::__construct(array('SkoleID'=>$_skoleID,'Skole'=>$_skole));
	}
	/**
	 * Get SkoleID value
	 * @return int
	 */
	public function getSkoleID()
	{
		return $this->SkoleID;
	}
	/**
	 * Set SkoleID value
	 * @param int $_skoleID the SkoleID
	 * @return int
	 */
	public function setSkoleID($_skoleID)
	{
		return ($this->SkoleID = $_skoleID);
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
	 * @return SpeedwareStructHentLokaleListe
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