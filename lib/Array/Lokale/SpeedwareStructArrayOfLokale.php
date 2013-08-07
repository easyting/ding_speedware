<?php
/**
 * File for class SpeedwareStructArrayOfLokale
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfLokale originally named ArrayOfLokale
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfLokale extends SpeedwareWsdlClass
{
	/**
	 * The Lokale
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructLokale
	 */
	public $Lokale;
	/**
	 * Constructor method for ArrayOfLokale
	 * @see parent::__construct()
	 * @param SpeedwareStructLokale $_lokale
	 * @return SpeedwareStructArrayOfLokale
	 */
	public function __construct($_lokale = NULL)
	{
		parent::__construct(array('Lokale'=>$_lokale));
	}
	/**
	 * Get Lokale value
	 * @return SpeedwareStructLokale|null
	 */
	public function getLokale()
	{
		return $this->Lokale;
	}
	/**
	 * Set Lokale value
	 * @param SpeedwareStructLokale $_lokale the Lokale
	 * @return SpeedwareStructLokale
	 */
	public function setLokale($_lokale)
	{
		return ($this->Lokale = $_lokale);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructLokale
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructLokale
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructLokale
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructLokale
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructLokale
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string Lokale
	 */
	public function getAttributeName()
	{
		return 'Lokale';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfLokale
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