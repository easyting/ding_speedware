<?php
/**
 * File for class SpeedwareStructHentLokaleListeResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentLokaleListeResponse originally named HentLokaleListeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentLokaleListeResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentLokaleListeResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfLokale
	 */
	public $HentLokaleListeResult;
	/**
	 * Constructor method for HentLokaleListeResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfLokale $_hentLokaleListeResult
	 * @return SpeedwareStructHentLokaleListeResponse
	 */
	public function __construct($_hentLokaleListeResult = NULL)
	{
		parent::__construct(array('HentLokaleListeResult'=>($_hentLokaleListeResult instanceof SpeedwareStructArrayOfLokale)?$_hentLokaleListeResult:new SpeedwareStructArrayOfLokale($_hentLokaleListeResult)));
	}
	/**
	 * Get HentLokaleListeResult value
	 * @return SpeedwareStructArrayOfLokale|null
	 */
	public function getHentLokaleListeResult()
	{
		return $this->HentLokaleListeResult;
	}
	/**
	 * Set HentLokaleListeResult value
	 * @param SpeedwareStructArrayOfLokale $_hentLokaleListeResult the HentLokaleListeResult
	 * @return SpeedwareStructArrayOfLokale
	 */
	public function setHentLokaleListeResult($_hentLokaleListeResult)
	{
		return ($this->HentLokaleListeResult = $_hentLokaleListeResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentLokaleListeResponse
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