<?php
/**
 * File for class SpeedwareStructGetBookingTypesResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetBookingTypesResponse originally named GetBookingTypesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetBookingTypesResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetBookingTypesResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfBookingType
	 */
	public $GetBookingTypesResult;
	/**
	 * Constructor method for GetBookingTypesResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfBookingType $_getBookingTypesResult
	 * @return SpeedwareStructGetBookingTypesResponse
	 */
	public function __construct($_getBookingTypesResult = NULL)
	{
		parent::__construct(array('GetBookingTypesResult'=>($_getBookingTypesResult instanceof SpeedwareStructArrayOfBookingType)?$_getBookingTypesResult:new SpeedwareStructArrayOfBookingType($_getBookingTypesResult)));
	}
	/**
	 * Get GetBookingTypesResult value
	 * @return SpeedwareStructArrayOfBookingType|null
	 */
	public function getGetBookingTypesResult()
	{
		return $this->GetBookingTypesResult;
	}
	/**
	 * Set GetBookingTypesResult value
	 * @param SpeedwareStructArrayOfBookingType $_getBookingTypesResult the GetBookingTypesResult
	 * @return SpeedwareStructArrayOfBookingType
	 */
	public function setGetBookingTypesResult($_getBookingTypesResult)
	{
		return ($this->GetBookingTypesResult = $_getBookingTypesResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetBookingTypesResponse
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