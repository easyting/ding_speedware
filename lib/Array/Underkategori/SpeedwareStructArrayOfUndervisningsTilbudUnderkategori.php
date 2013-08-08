<?php
/**
 * File for class SpeedwareStructArrayOfUndervisningsTilbudUnderkategori
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfUndervisningsTilbudUnderkategori originally named ArrayOfUndervisningsTilbudUnderkategori
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfUndervisningsTilbudUnderkategori extends SpeedwareWsdlClass
{
	/**
	 * The UndervisningsTilbudUnderkategori
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * - nillable : true
	 * @var SpeedwareStructUndervisningsTilbudUnderkategori
	 */
	public $UndervisningsTilbudUnderkategori;
	/**
	 * Constructor method for ArrayOfUndervisningsTilbudUnderkategori
	 * @see parent::__construct()
	 * @param SpeedwareStructUndervisningsTilbudUnderkategori $_undervisningsTilbudUnderkategori
	 * @return SpeedwareStructArrayOfUndervisningsTilbudUnderkategori
	 */
	public function __construct($_undervisningsTilbudUnderkategori = NULL)
	{
		parent::__construct(array('UndervisningsTilbudUnderkategori'=>$_undervisningsTilbudUnderkategori));
	}
	/**
	 * Get UndervisningsTilbudUnderkategori value
	 * @return SpeedwareStructUndervisningsTilbudUnderkategori|null
	 */
	public function getUndervisningsTilbudUnderkategori()
	{
		return $this->UndervisningsTilbudUnderkategori;
	}
	/**
	 * Set UndervisningsTilbudUnderkategori value
	 * @param SpeedwareStructUndervisningsTilbudUnderkategori $_undervisningsTilbudUnderkategori the UndervisningsTilbudUnderkategori
	 * @return SpeedwareStructUndervisningsTilbudUnderkategori
	 */
	public function setUndervisningsTilbudUnderkategori($_undervisningsTilbudUnderkategori)
	{
		return ($this->UndervisningsTilbudUnderkategori = $_undervisningsTilbudUnderkategori);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructUndervisningsTilbudUnderkategori
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructUndervisningsTilbudUnderkategori
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructUndervisningsTilbudUnderkategori
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructUndervisningsTilbudUnderkategori
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructUndervisningsTilbudUnderkategori
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string UndervisningsTilbudUnderkategori
	 */
	public function getAttributeName()
	{
		return 'UndervisningsTilbudUnderkategori';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfUndervisningsTilbudUnderkategori
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