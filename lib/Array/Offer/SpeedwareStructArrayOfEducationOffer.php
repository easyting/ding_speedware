<?php
/**
 * File for class SpeedwareStructArrayOfEducationOffer
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfEducationOffer originally named ArrayOfEducationOffer
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfEducationOffer extends SpeedwareWsdlClass
{
	/**
	 * The EducationOffer
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * - nillable : true
	 * @var SpeedwareStructEducationOffer
	 */
	public $EducationOffer;
	/**
	 * Constructor method for ArrayOfEducationOffer
	 * @see parent::__construct()
	 * @param SpeedwareStructEducationOffer $_educationOffer
	 * @return SpeedwareStructArrayOfEducationOffer
	 */
	public function __construct($_educationOffer = NULL)
	{
		parent::__construct(array('EducationOffer'=>$_educationOffer));
	}
	/**
	 * Get EducationOffer value
	 * @return SpeedwareStructEducationOffer|null
	 */
	public function getEducationOffer()
	{
		return $this->EducationOffer;
	}
	/**
	 * Set EducationOffer value
	 * @param SpeedwareStructEducationOffer $_educationOffer the EducationOffer
	 * @return SpeedwareStructEducationOffer
	 */
	public function setEducationOffer($_educationOffer)
	{
		return ($this->EducationOffer = $_educationOffer);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructEducationOffer
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructEducationOffer
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructEducationOffer
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructEducationOffer
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructEducationOffer
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string EducationOffer
	 */
	public function getAttributeName()
	{
		return 'EducationOffer';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfEducationOffer
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