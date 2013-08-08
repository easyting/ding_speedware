<?php
/**
 * File for class SpeedwareStructGetUndervisningstilbudByTreeIDResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetUndervisningstilbudByTreeIDResponse originally named GetUndervisningstilbudByTreeIDResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetUndervisningstilbudByTreeIDResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetUndervisningstilbudByTreeIDResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfUndervisningstilbud
	 */
	public $GetUndervisningstilbudByTreeIDResult;
	/**
	 * Constructor method for GetUndervisningstilbudByTreeIDResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfUndervisningstilbud $_getUndervisningstilbudByTreeIDResult
	 * @return SpeedwareStructGetUndervisningstilbudByTreeIDResponse
	 */
	public function __construct($_getUndervisningstilbudByTreeIDResult = NULL)
	{
		parent::__construct(array('GetUndervisningstilbudByTreeIDResult'=>($_getUndervisningstilbudByTreeIDResult instanceof SpeedwareStructArrayOfUndervisningstilbud)?$_getUndervisningstilbudByTreeIDResult:new SpeedwareStructArrayOfUndervisningstilbud($_getUndervisningstilbudByTreeIDResult)));
	}
	/**
	 * Get GetUndervisningstilbudByTreeIDResult value
	 * @return SpeedwareStructArrayOfUndervisningstilbud|null
	 */
	public function getGetUndervisningstilbudByTreeIDResult()
	{
		return $this->GetUndervisningstilbudByTreeIDResult;
	}
	/**
	 * Set GetUndervisningstilbudByTreeIDResult value
	 * @param SpeedwareStructArrayOfUndervisningstilbud $_getUndervisningstilbudByTreeIDResult the GetUndervisningstilbudByTreeIDResult
	 * @return SpeedwareStructArrayOfUndervisningstilbud
	 */
	public function setGetUndervisningstilbudByTreeIDResult($_getUndervisningstilbudByTreeIDResult)
	{
		return ($this->GetUndervisningstilbudByTreeIDResult = $_getUndervisningstilbudByTreeIDResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetUndervisningstilbudByTreeIDResponse
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