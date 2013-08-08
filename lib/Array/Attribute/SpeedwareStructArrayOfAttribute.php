<?php
/**
 * File for class SpeedwareStructArrayOfAttribute
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfAttribute originally named ArrayOfAttribute
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfAttribute extends SpeedwareWsdlClass
{
	/**
	 * The Attribute
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructAttribute
	 */
	public $Attribute;
	/**
	 * Constructor method for ArrayOfAttribute
	 * @see parent::__construct()
	 * @param SpeedwareStructAttribute $_attribute
	 * @return SpeedwareStructArrayOfAttribute
	 */
	public function __construct($_attribute = NULL)
	{
		parent::__construct(array('Attribute'=>$_attribute));
	}
	/**
	 * Get Attribute value
	 * @return SpeedwareStructAttribute|null
	 */
	public function getAttribute()
	{
		return $this->Attribute;
	}
	/**
	 * Set Attribute value
	 * @param SpeedwareStructAttribute $_attribute the Attribute
	 * @return SpeedwareStructAttribute
	 */
	public function setAttribute($_attribute)
	{
		return ($this->Attribute = $_attribute);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructAttribute
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructAttribute
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructAttribute
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructAttribute
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructAttribute
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string Attribute
	 */
	public function getAttributeName()
	{
		return 'Attribute';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfAttribute
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