<?php
/**
 * File for class SpeedwareStructArrayOfBookingAttribute
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfBookingAttribute originally named ArrayOfBookingAttribute
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfBookingAttribute extends SpeedwareWsdlClass
{
	/**
	 * The BookingAttribute
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructBookingAttribute
	 */
	public $BookingAttribute;
	/**
	 * Constructor method for ArrayOfBookingAttribute
	 * @see parent::__construct()
	 * @param SpeedwareStructBookingAttribute $_bookingAttribute
	 * @return SpeedwareStructArrayOfBookingAttribute
	 */
	public function __construct($_bookingAttribute = NULL)
	{
		parent::__construct(array('BookingAttribute'=>$_bookingAttribute));
	}
	/**
	 * Get BookingAttribute value
	 * @return SpeedwareStructBookingAttribute|null
	 */
	public function getBookingAttribute()
	{
		return $this->BookingAttribute;
	}
	/**
	 * Set BookingAttribute value
	 * @param SpeedwareStructBookingAttribute $_bookingAttribute the BookingAttribute
	 * @return SpeedwareStructBookingAttribute
	 */
	public function setBookingAttribute($_bookingAttribute)
	{
		return ($this->BookingAttribute = $_bookingAttribute);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructBookingAttribute
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructBookingAttribute
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructBookingAttribute
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructBookingAttribute
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructBookingAttribute
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string BookingAttribute
	 */
	public function getAttributeName()
	{
		return 'BookingAttribute';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfBookingAttribute
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