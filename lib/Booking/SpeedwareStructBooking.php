<?php
/**
 * File for class SpeedwareStructBooking
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructBooking originally named Booking
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructBooking extends SpeedwareWsdlClass
{
	/**
	 * The BookingID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $BookingID;
	/**
	 * The BookingTypeID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $BookingTypeID;
	/**
	 * The PublishingTypeID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $PublishingTypeID;
	/**
	 * The Date
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var dateTime
	 */
	public $Date;
	/**
	 * The StartTime
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The Canceled
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var boolean
	 */
	public $Canceled;
	/**
	 * The Responsible
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Responsible;
	/**
	 * The Title
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Title;
	/**
	 * The Location
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Location;
	/**
	 * The Room
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Room;
	/**
	 * The CanceledText
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $CanceledText;
	/**
	 * The Images
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfBookingImage
	 */
	public $Images;
	/**
	 * The Attributes
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfBookingAttribute
	 */
	public $Attributes;
	/**
	 * Constructor method for Booking
	 * @see parent::__construct()
	 * @param int $_bookingID
	 * @param int $_bookingTypeID
	 * @param int $_publishingTypeID
	 * @param dateTime $_date
	 * @param dateTime $_startTime
	 * @param dateTime $_endTime
	 * @param boolean $_canceled
	 * @param string $_responsible
	 * @param string $_title
	 * @param string $_location
	 * @param string $_room
	 * @param string $_canceledText
	 * @param SpeedwareStructArrayOfBookingImage $_images
	 * @param SpeedwareStructArrayOfBookingAttribute $_attributes
	 * @return SpeedwareStructBooking
	 */
	public function __construct($_bookingID,$_bookingTypeID,$_publishingTypeID,$_date,$_startTime,$_endTime,$_canceled,$_responsible = NULL,$_title = NULL,$_location = NULL,$_room = NULL,$_canceledText = NULL,$_images = NULL,$_attributes = NULL)
	{
		parent::__construct(array('BookingID'=>$_bookingID,'BookingTypeID'=>$_bookingTypeID,'PublishingTypeID'=>$_publishingTypeID,'Date'=>$_date,'StartTime'=>$_startTime,'EndTime'=>$_endTime,'Canceled'=>$_canceled,'Responsible'=>$_responsible,'Title'=>$_title,'Location'=>$_location,'Room'=>$_room,'CanceledText'=>$_canceledText,'Images'=>($_images instanceof SpeedwareStructArrayOfBookingImage)?$_images:new SpeedwareStructArrayOfBookingImage($_images),'Attributes'=>($_attributes instanceof SpeedwareStructArrayOfBookingAttribute)?$_attributes:new SpeedwareStructArrayOfBookingAttribute($_attributes)));
	}
	/**
	 * Get BookingID value
	 * @return int
	 */
	public function getBookingID()
	{
		return $this->BookingID;
	}
	/**
	 * Set BookingID value
	 * @param int $_bookingID the BookingID
	 * @return int
	 */
	public function setBookingID($_bookingID)
	{
		return ($this->BookingID = $_bookingID);
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
	 * Get Date value
	 * @return dateTime
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set Date value
	 * @param dateTime $_date the Date
	 * @return dateTime
	 */
	public function setDate($_date)
	{
		return ($this->Date = $_date);
	}
	/**
	 * Get StartTime value
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set StartTime value
	 * @param dateTime $_startTime the StartTime
	 * @return dateTime
	 */
	public function setStartTime($_startTime)
	{
		return ($this->StartTime = $_startTime);
	}
	/**
	 * Get EndTime value
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set EndTime value
	 * @param dateTime $_endTime the EndTime
	 * @return dateTime
	 */
	public function setEndTime($_endTime)
	{
		return ($this->EndTime = $_endTime);
	}
	/**
	 * Get Canceled value
	 * @return boolean
	 */
	public function getCanceled()
	{
		return $this->Canceled;
	}
	/**
	 * Set Canceled value
	 * @param boolean $_canceled the Canceled
	 * @return boolean
	 */
	public function setCanceled($_canceled)
	{
		return ($this->Canceled = $_canceled);
	}
	/**
	 * Get Responsible value
	 * @return string|null
	 */
	public function getResponsible()
	{
		return $this->Responsible;
	}
	/**
	 * Set Responsible value
	 * @param string $_responsible the Responsible
	 * @return string
	 */
	public function setResponsible($_responsible)
	{
		return ($this->Responsible = $_responsible);
	}
	/**
	 * Get Title value
	 * @return string|null
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Title value
	 * @param string $_title the Title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->Title = $_title);
	}
	/**
	 * Get Location value
	 * @return string|null
	 */
	public function getLocation()
	{
		return $this->Location;
	}
	/**
	 * Set Location value
	 * @param string $_location the Location
	 * @return string
	 */
	public function setLocation($_location)
	{
		return ($this->Location = $_location);
	}
	/**
	 * Get Room value
	 * @return string|null
	 */
	public function getRoom()
	{
		return $this->Room;
	}
	/**
	 * Set Room value
	 * @param string $_room the Room
	 * @return string
	 */
	public function setRoom($_room)
	{
		return ($this->Room = $_room);
	}
	/**
	 * Get CanceledText value
	 * @return string|null
	 */
	public function getCanceledText()
	{
		return $this->CanceledText;
	}
	/**
	 * Set CanceledText value
	 * @param string $_canceledText the CanceledText
	 * @return string
	 */
	public function setCanceledText($_canceledText)
	{
		return ($this->CanceledText = $_canceledText);
	}
	/**
	 * Get Images value
	 * @return SpeedwareStructArrayOfBookingImage|null
	 */
	public function getImages()
	{
		return $this->Images;
	}
	/**
	 * Set Images value
	 * @param SpeedwareStructArrayOfBookingImage $_images the Images
	 * @return SpeedwareStructArrayOfBookingImage
	 */
	public function setImages($_images)
	{
		return ($this->Images = $_images);
	}
	/**
	 * Get Attributes value
	 * @return SpeedwareStructArrayOfBookingAttribute|null
	 */
	public function getAttributes()
	{
		return $this->Attributes;
	}
	/**
	 * Set Attributes value
	 * @param SpeedwareStructArrayOfBookingAttribute $_attributes the Attributes
	 * @return SpeedwareStructArrayOfBookingAttribute
	 */
	public function setAttributes($_attributes)
	{
		return ($this->Attributes = $_attributes);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructBooking
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