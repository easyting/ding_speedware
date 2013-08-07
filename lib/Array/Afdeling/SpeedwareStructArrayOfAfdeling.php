<?php
/**
 * File for class SpeedwareStructArrayOfAfdeling
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfAfdeling originally named ArrayOfAfdeling
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfAfdeling extends SpeedwareWsdlClass
{
	/**
	 * The Afdeling
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructAfdeling
	 */
	public $Afdeling;
	/**
	 * Constructor method for ArrayOfAfdeling
	 * @see parent::__construct()
	 * @param SpeedwareStructAfdeling $_afdeling
	 * @return SpeedwareStructArrayOfAfdeling
	 */
	public function __construct($_afdeling = NULL)
	{
		parent::__construct(array('Afdeling'=>$_afdeling));
	}
	/**
	 * Get Afdeling value
	 * @return SpeedwareStructAfdeling|null
	 */
	public function getAfdeling()
	{
		return $this->Afdeling;
	}
	/**
	 * Set Afdeling value
	 * @param SpeedwareStructAfdeling $_afdeling the Afdeling
	 * @return SpeedwareStructAfdeling
	 */
	public function setAfdeling($_afdeling)
	{
		return ($this->Afdeling = $_afdeling);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructAfdeling
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructAfdeling
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructAfdeling
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructAfdeling
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructAfdeling
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string Afdeling
	 */
	public function getAttributeName()
	{
		return 'Afdeling';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfAfdeling
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