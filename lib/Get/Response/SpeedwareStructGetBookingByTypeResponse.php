<?php
/**
 * File for class SpeedwareStructGetBookingByTypeResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetBookingByTypeResponse originally named GetBookingByTypeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetBookingByTypeResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetBookingByTypeResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfBooking
	 */
	public $GetBookingByTypeResult;
	/**
	 * Constructor method for GetBookingByTypeResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfBooking $_getBookingByTypeResult
	 * @return SpeedwareStructGetBookingByTypeResponse
	 */
	public function __construct($_getBookingByTypeResult = NULL)
	{
		parent::__construct(array('GetBookingByTypeResult'=>($_getBookingByTypeResult instanceof SpeedwareStructArrayOfBooking)?$_getBookingByTypeResult:new SpeedwareStructArrayOfBooking($_getBookingByTypeResult)));
	}
	/**
	 * Get GetBookingByTypeResult value
	 * @return SpeedwareStructArrayOfBooking|null
	 */
	public function getGetBookingByTypeResult()
	{
		return $this->GetBookingByTypeResult;
	}
	/**
	 * Set GetBookingByTypeResult value
	 * @param SpeedwareStructArrayOfBooking $_getBookingByTypeResult the GetBookingByTypeResult
	 * @return SpeedwareStructArrayOfBooking
	 */
	public function setGetBookingByTypeResult($_getBookingByTypeResult)
	{
		return ($this->GetBookingByTypeResult = $_getBookingByTypeResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetBookingByTypeResponse
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