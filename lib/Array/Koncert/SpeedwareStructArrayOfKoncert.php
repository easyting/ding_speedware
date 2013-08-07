<?php
/**
 * File for class SpeedwareStructArrayOfKoncert
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfKoncert originally named ArrayOfKoncert
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfKoncert extends SpeedwareWsdlClass
{
	/**
	 * The Koncert
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructKoncert
	 */
	public $Koncert;
	/**
	 * Constructor method for ArrayOfKoncert
	 * @see parent::__construct()
	 * @param SpeedwareStructKoncert $_koncert
	 * @return SpeedwareStructArrayOfKoncert
	 */
	public function __construct($_koncert = NULL)
	{
		parent::__construct(array('Koncert'=>$_koncert));
	}
	/**
	 * Get Koncert value
	 * @return SpeedwareStructKoncert|null
	 */
	public function getKoncert()
	{
		return $this->Koncert;
	}
	/**
	 * Set Koncert value
	 * @param SpeedwareStructKoncert $_koncert the Koncert
	 * @return SpeedwareStructKoncert
	 */
	public function setKoncert($_koncert)
	{
		return ($this->Koncert = $_koncert);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructKoncert
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructKoncert
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructKoncert
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructKoncert
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructKoncert
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string Koncert
	 */
	public function getAttributeName()
	{
		return 'Koncert';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfKoncert
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