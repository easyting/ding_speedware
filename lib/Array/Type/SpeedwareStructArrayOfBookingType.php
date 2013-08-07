<?php
/**
 * File for class SpeedwareStructArrayOfBookingType
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfBookingType originally named ArrayOfBookingType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfBookingType extends SpeedwareWsdlClass
{
	/**
	 * The BookingType
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructBookingType
	 */
	public $BookingType;
	/**
	 * Constructor method for ArrayOfBookingType
	 * @see parent::__construct()
	 * @param SpeedwareStructBookingType $_bookingType
	 * @return SpeedwareStructArrayOfBookingType
	 */
	public function __construct($_bookingType = NULL)
	{
		parent::__construct(array('BookingType'=>$_bookingType));
	}
	/**
	 * Get BookingType value
	 * @return SpeedwareStructBookingType|null
	 */
	public function getBookingType()
	{
		return $this->BookingType;
	}
	/**
	 * Set BookingType value
	 * @param SpeedwareStructBookingType $_bookingType the BookingType
	 * @return SpeedwareStructBookingType
	 */
	public function setBookingType($_bookingType)
	{
		return ($this->BookingType = $_bookingType);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructBookingType
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructBookingType
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructBookingType
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructBookingType
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructBookingType
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string BookingType
	 */
	public function getAttributeName()
	{
		return 'BookingType';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfBookingType
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