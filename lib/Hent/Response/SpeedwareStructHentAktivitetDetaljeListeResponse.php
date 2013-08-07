<?php
/**
 * File for class SpeedwareStructHentAktivitetDetaljeListeResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentAktivitetDetaljeListeResponse originally named HentAktivitetDetaljeListeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentAktivitetDetaljeListeResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentAktivitetDetaljeListeResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfAktivitetDetaljer
	 */
	public $HentAktivitetDetaljeListeResult;
	/**
	 * Constructor method for HentAktivitetDetaljeListeResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfAktivitetDetaljer $_hentAktivitetDetaljeListeResult
	 * @return SpeedwareStructHentAktivitetDetaljeListeResponse
	 */
	public function __construct($_hentAktivitetDetaljeListeResult = NULL)
	{
		parent::__construct(array('HentAktivitetDetaljeListeResult'=>($_hentAktivitetDetaljeListeResult instanceof SpeedwareStructArrayOfAktivitetDetaljer)?$_hentAktivitetDetaljeListeResult:new SpeedwareStructArrayOfAktivitetDetaljer($_hentAktivitetDetaljeListeResult)));
	}
	/**
	 * Get HentAktivitetDetaljeListeResult value
	 * @return SpeedwareStructArrayOfAktivitetDetaljer|null
	 */
	public function getHentAktivitetDetaljeListeResult()
	{
		return $this->HentAktivitetDetaljeListeResult;
	}
	/**
	 * Set HentAktivitetDetaljeListeResult value
	 * @param SpeedwareStructArrayOfAktivitetDetaljer $_hentAktivitetDetaljeListeResult the HentAktivitetDetaljeListeResult
	 * @return SpeedwareStructArrayOfAktivitetDetaljer
	 */
	public function setHentAktivitetDetaljeListeResult($_hentAktivitetDetaljeListeResult)
	{
		return ($this->HentAktivitetDetaljeListeResult = $_hentAktivitetDetaljeListeResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentAktivitetDetaljeListeResponse
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