<?php
/**
 * File for class SpeedwareStructGetBookingsByTypesAndRoomsResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetBookingsByTypesAndRoomsResponse originally named GetBookingsByTypesAndRoomsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetBookingsByTypesAndRoomsResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetBookingsByTypesAndRoomsResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfBooking
	 */
	public $GetBookingsByTypesAndRoomsResult;
	/**
	 * Constructor method for GetBookingsByTypesAndRoomsResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfBooking $_getBookingsByTypesAndRoomsResult
	 * @return SpeedwareStructGetBookingsByTypesAndRoomsResponse
	 */
	public function __construct($_getBookingsByTypesAndRoomsResult = NULL)
	{
		parent::__construct(array('GetBookingsByTypesAndRoomsResult'=>($_getBookingsByTypesAndRoomsResult instanceof SpeedwareStructArrayOfBooking)?$_getBookingsByTypesAndRoomsResult:new SpeedwareStructArrayOfBooking($_getBookingsByTypesAndRoomsResult)));
	}
	/**
	 * Get GetBookingsByTypesAndRoomsResult value
	 * @return SpeedwareStructArrayOfBooking|null
	 */
	public function getGetBookingsByTypesAndRoomsResult()
	{
		return $this->GetBookingsByTypesAndRoomsResult;
	}
	/**
	 * Set GetBookingsByTypesAndRoomsResult value
	 * @param SpeedwareStructArrayOfBooking $_getBookingsByTypesAndRoomsResult the GetBookingsByTypesAndRoomsResult
	 * @return SpeedwareStructArrayOfBooking
	 */
	public function setGetBookingsByTypesAndRoomsResult($_getBookingsByTypesAndRoomsResult)
	{
		return ($this->GetBookingsByTypesAndRoomsResult = $_getBookingsByTypesAndRoomsResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetBookingsByTypesAndRoomsResponse
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