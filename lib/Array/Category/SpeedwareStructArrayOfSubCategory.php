<?php
/**
 * File for class SpeedwareStructArrayOfSubCategory
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfSubCategory originally named ArrayOfSubCategory
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfSubCategory extends SpeedwareWsdlClass
{
	/**
	 * The SubCategory
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructSubCategory
	 */
	public $SubCategory;
	/**
	 * Constructor method for ArrayOfSubCategory
	 * @see parent::__construct()
	 * @param SpeedwareStructSubCategory $_subCategory
	 * @return SpeedwareStructArrayOfSubCategory
	 */
	public function __construct($_subCategory = NULL)
	{
		parent::__construct(array('SubCategory'=>$_subCategory));
	}
	/**
	 * Get SubCategory value
	 * @return SpeedwareStructSubCategory|null
	 */
	public function getSubCategory()
	{
		return $this->SubCategory;
	}
	/**
	 * Set SubCategory value
	 * @param SpeedwareStructSubCategory $_subCategory the SubCategory
	 * @return SpeedwareStructSubCategory
	 */
	public function setSubCategory($_subCategory)
	{
		return ($this->SubCategory = $_subCategory);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructSubCategory
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructSubCategory
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructSubCategory
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructSubCategory
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructSubCategory
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string SubCategory
	 */
	public function getAttributeName()
	{
		return 'SubCategory';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfSubCategory
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