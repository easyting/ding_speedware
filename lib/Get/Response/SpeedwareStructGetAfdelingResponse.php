<?php
/**
 * File for class SpeedwareStructGetAfdelingResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetAfdelingResponse originally named GetAfdelingResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetAfdelingResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetAfdelingResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfAfdeling
	 */
	public $GetAfdelingResult;
	/**
	 * Constructor method for GetAfdelingResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfAfdeling $_getAfdelingResult
	 * @return SpeedwareStructGetAfdelingResponse
	 */
	public function __construct($_getAfdelingResult = NULL)
	{
		parent::__construct(array('GetAfdelingResult'=>($_getAfdelingResult instanceof SpeedwareStructArrayOfAfdeling)?$_getAfdelingResult:new SpeedwareStructArrayOfAfdeling($_getAfdelingResult)));
	}
	/**
	 * Get GetAfdelingResult value
	 * @return SpeedwareStructArrayOfAfdeling|null
	 */
	public function getGetAfdelingResult()
	{
		return $this->GetAfdelingResult;
	}
	/**
	 * Set GetAfdelingResult value
	 * @param SpeedwareStructArrayOfAfdeling $_getAfdelingResult the GetAfdelingResult
	 * @return SpeedwareStructArrayOfAfdeling
	 */
	public function setGetAfdelingResult($_getAfdelingResult)
	{
		return ($this->GetAfdelingResult = $_getAfdelingResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetAfdelingResponse
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