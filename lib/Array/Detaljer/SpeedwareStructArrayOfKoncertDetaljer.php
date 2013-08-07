<?php
/**
 * File for class SpeedwareStructArrayOfKoncertDetaljer
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfKoncertDetaljer originally named ArrayOfKoncertDetaljer
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfKoncertDetaljer extends SpeedwareWsdlClass
{
	/**
	 * The KoncertDetaljer
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructKoncertDetaljer
	 */
	public $KoncertDetaljer;
	/**
	 * Constructor method for ArrayOfKoncertDetaljer
	 * @see parent::__construct()
	 * @param SpeedwareStructKoncertDetaljer $_koncertDetaljer
	 * @return SpeedwareStructArrayOfKoncertDetaljer
	 */
	public function __construct($_koncertDetaljer = NULL)
	{
		parent::__construct(array('KoncertDetaljer'=>$_koncertDetaljer));
	}
	/**
	 * Get KoncertDetaljer value
	 * @return SpeedwareStructKoncertDetaljer|null
	 */
	public function getKoncertDetaljer()
	{
		return $this->KoncertDetaljer;
	}
	/**
	 * Set KoncertDetaljer value
	 * @param SpeedwareStructKoncertDetaljer $_koncertDetaljer the KoncertDetaljer
	 * @return SpeedwareStructKoncertDetaljer
	 */
	public function setKoncertDetaljer($_koncertDetaljer)
	{
		return ($this->KoncertDetaljer = $_koncertDetaljer);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructKoncertDetaljer
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructKoncertDetaljer
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructKoncertDetaljer
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructKoncertDetaljer
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructKoncertDetaljer
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string KoncertDetaljer
	 */
	public function getAttributeName()
	{
		return 'KoncertDetaljer';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfKoncertDetaljer
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