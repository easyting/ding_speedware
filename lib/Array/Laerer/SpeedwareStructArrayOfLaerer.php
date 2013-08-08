<?php
/**
 * File for class SpeedwareStructArrayOfLaerer
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfLaerer originally named ArrayOfLaerer
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfLaerer extends SpeedwareWsdlClass
{
	/**
	 * The Laerer
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructLaerer
	 */
	public $Laerer;
	/**
	 * Constructor method for ArrayOfLaerer
	 * @see parent::__construct()
	 * @param SpeedwareStructLaerer $_laerer
	 * @return SpeedwareStructArrayOfLaerer
	 */
	public function __construct($_laerer = NULL)
	{
		parent::__construct(array('Laerer'=>$_laerer));
	}
	/**
	 * Get Laerer value
	 * @return SpeedwareStructLaerer|null
	 */
	public function getLaerer()
	{
		return $this->Laerer;
	}
	/**
	 * Set Laerer value
	 * @param SpeedwareStructLaerer $_laerer the Laerer
	 * @return SpeedwareStructLaerer
	 */
	public function setLaerer($_laerer)
	{
		return ($this->Laerer = $_laerer);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructLaerer
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructLaerer
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructLaerer
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructLaerer
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructLaerer
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string Laerer
	 */
	public function getAttributeName()
	{
		return 'Laerer';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfLaerer
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