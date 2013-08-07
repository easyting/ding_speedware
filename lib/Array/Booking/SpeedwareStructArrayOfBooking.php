<?php
/**
 * File for class SpeedwareStructArrayOfBooking
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfBooking originally named ArrayOfBooking
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfBooking extends SpeedwareWsdlClass
{
	/**
	 * The Booking
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructBooking
	 */
	public $Booking;
	/**
	 * Constructor method for ArrayOfBooking
	 * @see parent::__construct()
	 * @param SpeedwareStructBooking $_booking
	 * @return SpeedwareStructArrayOfBooking
	 */
	public function __construct($_booking = NULL)
	{
		parent::__construct(array('Booking'=>$_booking));
	}
	/**
	 * Get Booking value
	 * @return SpeedwareStructBooking|null
	 */
	public function getBooking()
	{
		return $this->Booking;
	}
	/**
	 * Set Booking value
	 * @param SpeedwareStructBooking $_booking the Booking
	 * @return SpeedwareStructBooking
	 */
	public function setBooking($_booking)
	{
		return ($this->Booking = $_booking);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructBooking
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructBooking
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructBooking
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructBooking
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructBooking
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string Booking
	 */
	public function getAttributeName()
	{
		return 'Booking';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfBooking
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