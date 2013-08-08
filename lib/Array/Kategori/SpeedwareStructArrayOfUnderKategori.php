<?php
/**
 * File for class SpeedwareStructArrayOfUnderKategori
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfUnderKategori originally named ArrayOfUnderKategori
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfUnderKategori extends SpeedwareWsdlClass
{
	/**
	 * The UnderKategori
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructUnderKategori
	 */
	public $UnderKategori;
	/**
	 * Constructor method for ArrayOfUnderKategori
	 * @see parent::__construct()
	 * @param SpeedwareStructUnderKategori $_underKategori
	 * @return SpeedwareStructArrayOfUnderKategori
	 */
	public function __construct($_underKategori = NULL)
	{
		parent::__construct(array('UnderKategori'=>$_underKategori));
	}
	/**
	 * Get UnderKategori value
	 * @return SpeedwareStructUnderKategori|null
	 */
	public function getUnderKategori()
	{
		return $this->UnderKategori;
	}
	/**
	 * Set UnderKategori value
	 * @param SpeedwareStructUnderKategori $_underKategori the UnderKategori
	 * @return SpeedwareStructUnderKategori
	 */
	public function setUnderKategori($_underKategori)
	{
		return ($this->UnderKategori = $_underKategori);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructUnderKategori
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructUnderKategori
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructUnderKategori
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructUnderKategori
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructUnderKategori
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string UnderKategori
	 */
	public function getAttributeName()
	{
		return 'UnderKategori';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfUnderKategori
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