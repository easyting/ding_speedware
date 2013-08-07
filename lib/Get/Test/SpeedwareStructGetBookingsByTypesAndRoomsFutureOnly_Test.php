<?php
/**
 * File for class SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test originally named GetBookingsByTypesAndRoomsFutureOnly_Test
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test extends SpeedwareWsdlClass
{
	/**
	 * The PublishingTypeID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $PublishingTypeID;
	/**
	 * The School
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $School;
	/**
	 * The BookingTypeIDs
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfInt
	 */
	public $BookingTypeIDs;
	/**
	 * The RoomIDs
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfInt
	 */
	public $RoomIDs;
	/**
	 * Constructor method for GetBookingsByTypesAndRoomsFutureOnly_Test
	 * @see parent::__construct()
	 * @param int $_publishingTypeID
	 * @param string $_school
	 * @param SpeedwareStructArrayOfInt $_bookingTypeIDs
	 * @param SpeedwareStructArrayOfInt $_roomIDs
	 * @return SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test
	 */
	public function __construct($_publishingTypeID,$_school = NULL,$_bookingTypeIDs = NULL,$_roomIDs = NULL)
	{
		parent::__construct(array('PublishingTypeID'=>$_publishingTypeID,'School'=>$_school,'BookingTypeIDs'=>($_bookingTypeIDs instanceof SpeedwareStructArrayOfInt)?$_bookingTypeIDs:new SpeedwareStructArrayOfInt($_bookingTypeIDs),'RoomIDs'=>($_roomIDs instanceof SpeedwareStructArrayOfInt)?$_roomIDs:new SpeedwareStructArrayOfInt($_roomIDs)));
	}
	/**
	 * Get PublishingTypeID value
	 * @return int
	 */
	public function getPublishingTypeID()
	{
		return $this->PublishingTypeID;
	}
	/**
	 * Set PublishingTypeID value
	 * @param int $_publishingTypeID the PublishingTypeID
	 * @return int
	 */
	public function setPublishingTypeID($_publishingTypeID)
	{
		return ($this->PublishingTypeID = $_publishingTypeID);
	}
	/**
	 * Get School value
	 * @return string|null
	 */
	public function getSchool()
	{
		return $this->School;
	}
	/**
	 * Set School value
	 * @param string $_school the School
	 * @return string
	 */
	public function setSchool($_school)
	{
		return ($this->School = $_school);
	}
	/**
	 * Get BookingTypeIDs value
	 * @return SpeedwareStructArrayOfInt|null
	 */
	public function getBookingTypeIDs()
	{
		return $this->BookingTypeIDs;
	}
	/**
	 * Set BookingTypeIDs value
	 * @param SpeedwareStructArrayOfInt $_bookingTypeIDs the BookingTypeIDs
	 * @return SpeedwareStructArrayOfInt
	 */
	public function setBookingTypeIDs($_bookingTypeIDs)
	{
		return ($this->BookingTypeIDs = $_bookingTypeIDs);
	}
	/**
	 * Get RoomIDs value
	 * @return SpeedwareStructArrayOfInt|null
	 */
	public function getRoomIDs()
	{
		return $this->RoomIDs;
	}
	/**
	 * Set RoomIDs value
	 * @param SpeedwareStructArrayOfInt $_roomIDs the RoomIDs
	 * @return SpeedwareStructArrayOfInt
	 */
	public function setRoomIDs($_roomIDs)
	{
		return ($this->RoomIDs = $_roomIDs);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test
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