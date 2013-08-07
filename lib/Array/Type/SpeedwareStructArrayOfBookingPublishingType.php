<?php
/**
 * File for class SpeedwareStructArrayOfBookingPublishingType
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfBookingPublishingType originally named ArrayOfBookingPublishingType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfBookingPublishingType extends SpeedwareWsdlClass
{
	/**
	 * The BookingPublishingType
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructBookingPublishingType
	 */
	public $BookingPublishingType;
	/**
	 * Constructor method for ArrayOfBookingPublishingType
	 * @see parent::__construct()
	 * @param SpeedwareStructBookingPublishingType $_bookingPublishingType
	 * @return SpeedwareStructArrayOfBookingPublishingType
	 */
	public function __construct($_bookingPublishingType = NULL)
	{
		parent::__construct(array('BookingPublishingType'=>$_bookingPublishingType));
	}
	/**
	 * Get BookingPublishingType value
	 * @return SpeedwareStructBookingPublishingType|null
	 */
	public function getBookingPublishingType()
	{
		return $this->BookingPublishingType;
	}
	/**
	 * Set BookingPublishingType value
	 * @param SpeedwareStructBookingPublishingType $_bookingPublishingType the BookingPublishingType
	 * @return SpeedwareStructBookingPublishingType
	 */
	public function setBookingPublishingType($_bookingPublishingType)
	{
		return ($this->BookingPublishingType = $_bookingPublishingType);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructBookingPublishingType
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructBookingPublishingType
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructBookingPublishingType
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructBookingPublishingType
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructBookingPublishingType
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string BookingPublishingType
	 */
	public function getAttributeName()
	{
		return 'BookingPublishingType';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfBookingPublishingType
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