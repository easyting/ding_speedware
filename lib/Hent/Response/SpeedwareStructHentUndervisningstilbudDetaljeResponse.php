<?php
/**
 * File for class SpeedwareStructHentUndervisningstilbudDetaljeResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentUndervisningstilbudDetaljeResponse originally named HentUndervisningstilbudDetaljeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentUndervisningstilbudDetaljeResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentUndervisningstilbudDetaljeResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var SpeedwareStructUndervisningstilbud
	 */
	public $HentUndervisningstilbudDetaljeResult;
	/**
	 * Constructor method for HentUndervisningstilbudDetaljeResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructUndervisningstilbud $_hentUndervisningstilbudDetaljeResult
	 * @return SpeedwareStructHentUndervisningstilbudDetaljeResponse
	 */
	public function __construct($_hentUndervisningstilbudDetaljeResult)
	{
		parent::__construct(array('HentUndervisningstilbudDetaljeResult'=>$_hentUndervisningstilbudDetaljeResult));
	}
	/**
	 * Get HentUndervisningstilbudDetaljeResult value
	 * @return SpeedwareStructUndervisningstilbud
	 */
	public function getHentUndervisningstilbudDetaljeResult()
	{
		return $this->HentUndervisningstilbudDetaljeResult;
	}
	/**
	 * Set HentUndervisningstilbudDetaljeResult value
	 * @param SpeedwareStructUndervisningstilbud $_hentUndervisningstilbudDetaljeResult the HentUndervisningstilbudDetaljeResult
	 * @return SpeedwareStructUndervisningstilbud
	 */
	public function setHentUndervisningstilbudDetaljeResult($_hentUndervisningstilbudDetaljeResult)
	{
		return ($this->HentUndervisningstilbudDetaljeResult = $_hentUndervisningstilbudDetaljeResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentUndervisningstilbudDetaljeResponse
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