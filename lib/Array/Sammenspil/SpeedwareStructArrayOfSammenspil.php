<?php
/**
 * File for class SpeedwareStructArrayOfSammenspil
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfSammenspil originally named ArrayOfSammenspil
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfSammenspil extends SpeedwareWsdlClass
{
	/**
	 * The Sammenspil
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructSammenspil
	 */
	public $Sammenspil;
	/**
	 * Constructor method for ArrayOfSammenspil
	 * @see parent::__construct()
	 * @param SpeedwareStructSammenspil $_sammenspil
	 * @return SpeedwareStructArrayOfSammenspil
	 */
	public function __construct($_sammenspil = NULL)
	{
		parent::__construct(array('Sammenspil'=>$_sammenspil));
	}
	/**
	 * Get Sammenspil value
	 * @return SpeedwareStructSammenspil|null
	 */
	public function getSammenspil()
	{
		return $this->Sammenspil;
	}
	/**
	 * Set Sammenspil value
	 * @param SpeedwareStructSammenspil $_sammenspil the Sammenspil
	 * @return SpeedwareStructSammenspil
	 */
	public function setSammenspil($_sammenspil)
	{
		return ($this->Sammenspil = $_sammenspil);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructSammenspil
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructSammenspil
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructSammenspil
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructSammenspil
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructSammenspil
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string Sammenspil
	 */
	public function getAttributeName()
	{
		return 'Sammenspil';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfSammenspil
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