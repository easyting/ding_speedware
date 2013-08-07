<?php
/**
 * File for class SpeedwareStructGetBookingByTypeAndRoom
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetBookingByTypeAndRoom originally named GetBookingByTypeAndRoom
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetBookingByTypeAndRoom extends SpeedwareWsdlClass
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
	 * The BookingTypeID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $BookingTypeID;
	/**
	 * The School
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $School;
	/**
	 * The RoomIDs
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfInt
	 */
	public $RoomIDs;
	/**
	 * Constructor method for GetBookingByTypeAndRoom
	 * @see parent::__construct()
	 * @param int $_publishingTypeID
	 * @param int $_bookingTypeID
	 * @param string $_school
	 * @param SpeedwareStructArrayOfInt $_roomIDs
	 * @return SpeedwareStructGetBookingByTypeAndRoom
	 */
	public function __construct($_publishingTypeID,$_bookingTypeID,$_school = NULL,$_roomIDs = NULL)
	{
		parent::__construct(array('PublishingTypeID'=>$_publishingTypeID,'BookingTypeID'=>$_bookingTypeID,'School'=>$_school,'RoomIDs'=>($_roomIDs instanceof SpeedwareStructArrayOfInt)?$_roomIDs:new SpeedwareStructArrayOfInt($_roomIDs)));
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
	 * Get BookingTypeID value
	 * @return int
	 */
	public function getBookingTypeID()
	{
		return $this->BookingTypeID;
	}
	/**
	 * Set BookingTypeID value
	 * @param int $_bookingTypeID the BookingTypeID
	 * @return int
	 */
	public function setBookingTypeID($_bookingTypeID)
	{
		return ($this->BookingTypeID = $_bookingTypeID);
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
	 * @return SpeedwareStructGetBookingByTypeAndRoom
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