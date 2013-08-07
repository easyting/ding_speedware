<?php
/**
 * File for class SpeedwareStructArrayOfBookingImage
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfBookingImage originally named ArrayOfBookingImage
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfBookingImage extends SpeedwareWsdlClass
{
	/**
	 * The BookingImage
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructBookingImage
	 */
	public $BookingImage;
	/**
	 * Constructor method for ArrayOfBookingImage
	 * @see parent::__construct()
	 * @param SpeedwareStructBookingImage $_bookingImage
	 * @return SpeedwareStructArrayOfBookingImage
	 */
	public function __construct($_bookingImage = NULL)
	{
		parent::__construct(array('BookingImage'=>$_bookingImage));
	}
	/**
	 * Get BookingImage value
	 * @return SpeedwareStructBookingImage|null
	 */
	public function getBookingImage()
	{
		return $this->BookingImage;
	}
	/**
	 * Set BookingImage value
	 * @param SpeedwareStructBookingImage $_bookingImage the BookingImage
	 * @return SpeedwareStructBookingImage
	 */
	public function setBookingImage($_bookingImage)
	{
		return ($this->BookingImage = $_bookingImage);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructBookingImage
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructBookingImage
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructBookingImage
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructBookingImage
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructBookingImage
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string BookingImage
	 */
	public function getAttributeName()
	{
		return 'BookingImage';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfBookingImage
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