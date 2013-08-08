<?php
/**
 * File for class SpeedwareStructBookingType
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructBookingType originally named BookingType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructBookingType extends SpeedwareWsdlClass
{
	/**
	 * The BookingTypeID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $BookingTypeID;
	/**
	 * The Bookingtype
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Bookingtype;
	/**
	 * Constructor method for BookingType
	 * @see parent::__construct()
	 * @param int $_bookingTypeID
	 * @param string $_bookingtype
	 * @return SpeedwareStructBookingType
	 */
	public function __construct($_bookingTypeID,$_bookingtype = NULL)
	{
		parent::__construct(array('BookingTypeID'=>$_bookingTypeID,'Bookingtype'=>$_bookingtype));
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
	 * Get Bookingtype value
	 * @return string|null
	 */
	public function getBookingtype()
	{
		return $this->Bookingtype;
	}
	/**
	 * Set Bookingtype value
	 * @param string $_bookingtype the Bookingtype
	 * @return string
	 */
	public function setBookingtype($_bookingtype)
	{
		return ($this->Bookingtype = $_bookingtype);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructBookingType
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