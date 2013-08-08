<?php
/**
 * File for class SpeedwareStructHentAktivitetListeResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentAktivitetListeResponse originally named HentAktivitetListeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentAktivitetListeResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentAktivitetListeResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfAktivitet
	 */
	public $HentAktivitetListeResult;
	/**
	 * Constructor method for HentAktivitetListeResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfAktivitet $_hentAktivitetListeResult
	 * @return SpeedwareStructHentAktivitetListeResponse
	 */
	public function __construct($_hentAktivitetListeResult = NULL)
	{
		parent::__construct(array('HentAktivitetListeResult'=>($_hentAktivitetListeResult instanceof SpeedwareStructArrayOfAktivitet)?$_hentAktivitetListeResult:new SpeedwareStructArrayOfAktivitet($_hentAktivitetListeResult)));
	}
	/**
	 * Get HentAktivitetListeResult value
	 * @return SpeedwareStructArrayOfAktivitet|null
	 */
	public function getHentAktivitetListeResult()
	{
		return $this->HentAktivitetListeResult;
	}
	/**
	 * Set HentAktivitetListeResult value
	 * @param SpeedwareStructArrayOfAktivitet $_hentAktivitetListeResult the HentAktivitetListeResult
	 * @return SpeedwareStructArrayOfAktivitet
	 */
	public function setHentAktivitetListeResult($_hentAktivitetListeResult)
	{
		return ($this->HentAktivitetListeResult = $_hentAktivitetListeResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentAktivitetListeResponse
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