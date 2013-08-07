<?php
/**
 * File for class SpeedwareStructSkole
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructSkole originally named Skole
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructSkole extends SpeedwareWsdlClass
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
	 * The SkoleNavn
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SkoleNavn;
	/**
	 * Constructor method for Skole
	 * @see parent::__construct()
	 * @param int $_skoleID
	 * @param string $_skoleNavn
	 * @return SpeedwareStructSkole
	 */
	public function __construct($_skoleID,$_skoleNavn = NULL)
	{
		parent::__construct(array('SkoleID'=>$_skoleID,'SkoleNavn'=>$_skoleNavn));
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
	 * Get SkoleNavn value
	 * @return string|null
	 */
	public function getSkoleNavn()
	{
		return $this->SkoleNavn;
	}
	/**
	 * Set SkoleNavn value
	 * @param string $_skoleNavn the SkoleNavn
	 * @return string
	 */
	public function setSkoleNavn($_skoleNavn)
	{
		return ($this->SkoleNavn = $_skoleNavn);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructSkole
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