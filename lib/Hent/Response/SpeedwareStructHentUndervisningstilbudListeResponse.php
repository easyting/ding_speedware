<?php
/**
 * File for class SpeedwareStructHentUndervisningstilbudListeResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentUndervisningstilbudListeResponse originally named HentUndervisningstilbudListeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentUndervisningstilbudListeResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentUndervisningstilbudListeResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfUndervisningstilbud
	 */
	public $HentUndervisningstilbudListeResult;
	/**
	 * Constructor method for HentUndervisningstilbudListeResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfUndervisningstilbud $_hentUndervisningstilbudListeResult
	 * @return SpeedwareStructHentUndervisningstilbudListeResponse
	 */
	public function __construct($_hentUndervisningstilbudListeResult = NULL)
	{
		parent::__construct(array('HentUndervisningstilbudListeResult'=>($_hentUndervisningstilbudListeResult instanceof SpeedwareStructArrayOfUndervisningstilbud)?$_hentUndervisningstilbudListeResult:new SpeedwareStructArrayOfUndervisningstilbud($_hentUndervisningstilbudListeResult)));
	}
	/**
	 * Get HentUndervisningstilbudListeResult value
	 * @return SpeedwareStructArrayOfUndervisningstilbud|null
	 */
	public function getHentUndervisningstilbudListeResult()
	{
		return $this->HentUndervisningstilbudListeResult;
	}
	/**
	 * Set HentUndervisningstilbudListeResult value
	 * @param SpeedwareStructArrayOfUndervisningstilbud $_hentUndervisningstilbudListeResult the HentUndervisningstilbudListeResult
	 * @return SpeedwareStructArrayOfUndervisningstilbud
	 */
	public function setHentUndervisningstilbudListeResult($_hentUndervisningstilbudListeResult)
	{
		return ($this->HentUndervisningstilbudListeResult = $_hentUndervisningstilbudListeResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentUndervisningstilbudListeResponse
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