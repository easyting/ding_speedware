<?php
/**
 * File for class SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_TestResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_TestResponse originally named GetBookingsByTypesAndRoomsFutureOnly_TestResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_TestResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetBookingsByTypesAndRoomsFutureOnly_TestResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfBooking
	 */
	public $GetBookingsByTypesAndRoomsFutureOnly_TestResult;
	/**
	 * Constructor method for GetBookingsByTypesAndRoomsFutureOnly_TestResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfBooking $_getBookingsByTypesAndRoomsFutureOnly_TestResult
	 * @return SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_TestResponse
	 */
	public function __construct($_getBookingsByTypesAndRoomsFutureOnly_TestResult = NULL)
	{
		parent::__construct(array('GetBookingsByTypesAndRoomsFutureOnly_TestResult'=>($_getBookingsByTypesAndRoomsFutureOnly_TestResult instanceof SpeedwareStructArrayOfBooking)?$_getBookingsByTypesAndRoomsFutureOnly_TestResult:new SpeedwareStructArrayOfBooking($_getBookingsByTypesAndRoomsFutureOnly_TestResult)));
	}
	/**
	 * Get GetBookingsByTypesAndRoomsFutureOnly_TestResult value
	 * @return SpeedwareStructArrayOfBooking|null
	 */
	public function getGetBookingsByTypesAndRoomsFutureOnly_TestResult()
	{
		return $this->GetBookingsByTypesAndRoomsFutureOnly_TestResult;
	}
	/**
	 * Set GetBookingsByTypesAndRoomsFutureOnly_TestResult value
	 * @param SpeedwareStructArrayOfBooking $_getBookingsByTypesAndRoomsFutureOnly_TestResult the GetBookingsByTypesAndRoomsFutureOnly_TestResult
	 * @return SpeedwareStructArrayOfBooking
	 */
	public function setGetBookingsByTypesAndRoomsFutureOnly_TestResult($_getBookingsByTypesAndRoomsFutureOnly_TestResult)
	{
		return ($this->GetBookingsByTypesAndRoomsFutureOnly_TestResult = $_getBookingsByTypesAndRoomsFutureOnly_TestResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_TestResponse
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