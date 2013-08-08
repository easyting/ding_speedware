<?php
/**
 * File for class SpeedwareStructGetBookingsByTypesAndRoomsFutureOnlyResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetBookingsByTypesAndRoomsFutureOnlyResponse originally named GetBookingsByTypesAndRoomsFutureOnlyResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetBookingsByTypesAndRoomsFutureOnlyResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetBookingsByTypesAndRoomsFutureOnlyResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfBooking
	 */
	public $GetBookingsByTypesAndRoomsFutureOnlyResult;
	/**
	 * Constructor method for GetBookingsByTypesAndRoomsFutureOnlyResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfBooking $_getBookingsByTypesAndRoomsFutureOnlyResult
	 * @return SpeedwareStructGetBookingsByTypesAndRoomsFutureOnlyResponse
	 */
	public function __construct($_getBookingsByTypesAndRoomsFutureOnlyResult = NULL)
	{
		parent::__construct(array('GetBookingsByTypesAndRoomsFutureOnlyResult'=>($_getBookingsByTypesAndRoomsFutureOnlyResult instanceof SpeedwareStructArrayOfBooking)?$_getBookingsByTypesAndRoomsFutureOnlyResult:new SpeedwareStructArrayOfBooking($_getBookingsByTypesAndRoomsFutureOnlyResult)));
	}
	/**
	 * Get GetBookingsByTypesAndRoomsFutureOnlyResult value
	 * @return SpeedwareStructArrayOfBooking|null
	 */
	public function getGetBookingsByTypesAndRoomsFutureOnlyResult()
	{
		return $this->GetBookingsByTypesAndRoomsFutureOnlyResult;
	}
	/**
	 * Set GetBookingsByTypesAndRoomsFutureOnlyResult value
	 * @param SpeedwareStructArrayOfBooking $_getBookingsByTypesAndRoomsFutureOnlyResult the GetBookingsByTypesAndRoomsFutureOnlyResult
	 * @return SpeedwareStructArrayOfBooking
	 */
	public function setGetBookingsByTypesAndRoomsFutureOnlyResult($_getBookingsByTypesAndRoomsFutureOnlyResult)
	{
		return ($this->GetBookingsByTypesAndRoomsFutureOnlyResult = $_getBookingsByTypesAndRoomsFutureOnlyResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetBookingsByTypesAndRoomsFutureOnlyResponse
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