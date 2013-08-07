<?php
/**
 * File for class SpeedwareStructHentAktivitetDetaljer
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentAktivitetDetaljer originally named HentAktivitetDetaljer
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentAktivitetDetaljer extends SpeedwareWsdlClass
{
	/**
	 * The AktivitetID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $AktivitetID;
	/**
	 * The Skole
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Skole;
	/**
	 * Constructor method for HentAktivitetDetaljer
	 * @see parent::__construct()
	 * @param int $_aktivitetID
	 * @param string $_skole
	 * @return SpeedwareStructHentAktivitetDetaljer
	 */
	public function __construct($_aktivitetID,$_skole = NULL)
	{
		parent::__construct(array('AktivitetID'=>$_aktivitetID,'Skole'=>$_skole));
	}
	/**
	 * Get AktivitetID value
	 * @return int
	 */
	public function getAktivitetID()
	{
		return $this->AktivitetID;
	}
	/**
	 * Set AktivitetID value
	 * @param int $_aktivitetID the AktivitetID
	 * @return int
	 */
	public function setAktivitetID($_aktivitetID)
	{
		return ($this->AktivitetID = $_aktivitetID);
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
	 * @return SpeedwareStructHentAktivitetDetaljer
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