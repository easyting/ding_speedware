<?php
/**
 * File for class SpeedwareStructGetBookingByTypeAndRoomResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetBookingByTypeAndRoomResponse originally named GetBookingByTypeAndRoomResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetBookingByTypeAndRoomResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetBookingByTypeAndRoomResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfBooking
	 */
	public $GetBookingByTypeAndRoomResult;
	/**
	 * Constructor method for GetBookingByTypeAndRoomResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfBooking $_getBookingByTypeAndRoomResult
	 * @return SpeedwareStructGetBookingByTypeAndRoomResponse
	 */
	public function __construct($_getBookingByTypeAndRoomResult = NULL)
	{
		parent::__construct(array('GetBookingByTypeAndRoomResult'=>($_getBookingByTypeAndRoomResult instanceof SpeedwareStructArrayOfBooking)?$_getBookingByTypeAndRoomResult:new SpeedwareStructArrayOfBooking($_getBookingByTypeAndRoomResult)));
	}
	/**
	 * Get GetBookingByTypeAndRoomResult value
	 * @return SpeedwareStructArrayOfBooking|null
	 */
	public function getGetBookingByTypeAndRoomResult()
	{
		return $this->GetBookingByTypeAndRoomResult;
	}
	/**
	 * Set GetBookingByTypeAndRoomResult value
	 * @param SpeedwareStructArrayOfBooking $_getBookingByTypeAndRoomResult the GetBookingByTypeAndRoomResult
	 * @return SpeedwareStructArrayOfBooking
	 */
	public function setGetBookingByTypeAndRoomResult($_getBookingByTypeAndRoomResult)
	{
		return ($this->GetBookingByTypeAndRoomResult = $_getBookingByTypeAndRoomResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetBookingByTypeAndRoomResponse
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