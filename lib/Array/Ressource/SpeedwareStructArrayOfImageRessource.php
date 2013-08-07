<?php
/**
 * File for class SpeedwareStructArrayOfImageRessource
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfImageRessource originally named ArrayOfImageRessource
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfImageRessource extends SpeedwareWsdlClass
{
	/**
	 * The ImageRessource
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructImageRessource
	 */
	public $ImageRessource;
	/**
	 * Constructor method for ArrayOfImageRessource
	 * @see parent::__construct()
	 * @param SpeedwareStructImageRessource $_imageRessource
	 * @return SpeedwareStructArrayOfImageRessource
	 */
	public function __construct($_imageRessource = NULL)
	{
		parent::__construct(array('ImageRessource'=>$_imageRessource));
	}
	/**
	 * Get ImageRessource value
	 * @return SpeedwareStructImageRessource|null
	 */
	public function getImageRessource()
	{
		return $this->ImageRessource;
	}
	/**
	 * Set ImageRessource value
	 * @param SpeedwareStructImageRessource $_imageRessource the ImageRessource
	 * @return SpeedwareStructImageRessource
	 */
	public function setImageRessource($_imageRessource)
	{
		return ($this->ImageRessource = $_imageRessource);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructImageRessource
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructImageRessource
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructImageRessource
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructImageRessource
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructImageRessource
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string ImageRessource
	 */
	public function getAttributeName()
	{
		return 'ImageRessource';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfImageRessource
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