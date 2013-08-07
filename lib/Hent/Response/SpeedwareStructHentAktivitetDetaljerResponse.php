<?php
/**
 * File for class SpeedwareStructHentAktivitetDetaljerResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentAktivitetDetaljerResponse originally named HentAktivitetDetaljerResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentAktivitetDetaljerResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentAktivitetDetaljerResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var SpeedwareStructAktivitetDetaljer
	 */
	public $HentAktivitetDetaljerResult;
	/**
	 * Constructor method for HentAktivitetDetaljerResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructAktivitetDetaljer $_hentAktivitetDetaljerResult
	 * @return SpeedwareStructHentAktivitetDetaljerResponse
	 */
	public function __construct($_hentAktivitetDetaljerResult)
	{
		parent::__construct(array('HentAktivitetDetaljerResult'=>$_hentAktivitetDetaljerResult));
	}
	/**
	 * Get HentAktivitetDetaljerResult value
	 * @return SpeedwareStructAktivitetDetaljer
	 */
	public function getHentAktivitetDetaljerResult()
	{
		return $this->HentAktivitetDetaljerResult;
	}
	/**
	 * Set HentAktivitetDetaljerResult value
	 * @param SpeedwareStructAktivitetDetaljer $_hentAktivitetDetaljerResult the HentAktivitetDetaljerResult
	 * @return SpeedwareStructAktivitetDetaljer
	 */
	public function setHentAktivitetDetaljerResult($_hentAktivitetDetaljerResult)
	{
		return ($this->HentAktivitetDetaljerResult = $_hentAktivitetDetaljerResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentAktivitetDetaljerResponse
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