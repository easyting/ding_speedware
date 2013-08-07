<?php
/**
 * File for class SpeedwareStructArrayOfUndervisningstilbud
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfUndervisningstilbud originally named ArrayOfUndervisningstilbud
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfUndervisningstilbud extends SpeedwareWsdlClass
{
	/**
	 * The Undervisningstilbud
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructUndervisningstilbud
	 */
	public $Undervisningstilbud;
	/**
	 * Constructor method for ArrayOfUndervisningstilbud
	 * @see parent::__construct()
	 * @param SpeedwareStructUndervisningstilbud $_undervisningstilbud
	 * @return SpeedwareStructArrayOfUndervisningstilbud
	 */
	public function __construct($_undervisningstilbud = NULL)
	{
		parent::__construct(array('Undervisningstilbud'=>$_undervisningstilbud));
	}
	/**
	 * Get Undervisningstilbud value
	 * @return SpeedwareStructUndervisningstilbud|null
	 */
	public function getUndervisningstilbud()
	{
		return $this->Undervisningstilbud;
	}
	/**
	 * Set Undervisningstilbud value
	 * @param SpeedwareStructUndervisningstilbud $_undervisningstilbud the Undervisningstilbud
	 * @return SpeedwareStructUndervisningstilbud
	 */
	public function setUndervisningstilbud($_undervisningstilbud)
	{
		return ($this->Undervisningstilbud = $_undervisningstilbud);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructUndervisningstilbud
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructUndervisningstilbud
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructUndervisningstilbud
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructUndervisningstilbud
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructUndervisningstilbud
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string Undervisningstilbud
	 */
	public function getAttributeName()
	{
		return 'Undervisningstilbud';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfUndervisningstilbud
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