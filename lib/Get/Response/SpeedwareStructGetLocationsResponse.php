<?php
/**
 * File for class SpeedwareStructGetLocationsResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetLocationsResponse originally named GetLocationsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetLocationsResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetLocationsResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfLocation
	 */
	public $GetLocationsResult;
	/**
	 * Constructor method for GetLocationsResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfLocation $_getLocationsResult
	 * @return SpeedwareStructGetLocationsResponse
	 */
	public function __construct($_getLocationsResult = NULL)
	{
		parent::__construct(array('GetLocationsResult'=>($_getLocationsResult instanceof SpeedwareStructArrayOfLocation)?$_getLocationsResult:new SpeedwareStructArrayOfLocation($_getLocationsResult)));
	}
	/**
	 * Get GetLocationsResult value
	 * @return SpeedwareStructArrayOfLocation|null
	 */
	public function getGetLocationsResult()
	{
		return $this->GetLocationsResult;
	}
	/**
	 * Set GetLocationsResult value
	 * @param SpeedwareStructArrayOfLocation $_getLocationsResult the GetLocationsResult
	 * @return SpeedwareStructArrayOfLocation
	 */
	public function setGetLocationsResult($_getLocationsResult)
	{
		return ($this->GetLocationsResult = $_getLocationsResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetLocationsResponse
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