<?php
/**
 * File for class SpeedwareStructArrayOfAktivitet
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfAktivitet originally named ArrayOfAktivitet
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfAktivitet extends SpeedwareWsdlClass
{
	/**
	 * The Aktivitet
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructAktivitet
	 */
	public $Aktivitet;
	/**
	 * Constructor method for ArrayOfAktivitet
	 * @see parent::__construct()
	 * @param SpeedwareStructAktivitet $_aktivitet
	 * @return SpeedwareStructArrayOfAktivitet
	 */
	public function __construct($_aktivitet = NULL)
	{
		parent::__construct(array('Aktivitet'=>$_aktivitet));
	}
	/**
	 * Get Aktivitet value
	 * @return SpeedwareStructAktivitet|null
	 */
	public function getAktivitet()
	{
		return $this->Aktivitet;
	}
	/**
	 * Set Aktivitet value
	 * @param SpeedwareStructAktivitet $_aktivitet the Aktivitet
	 * @return SpeedwareStructAktivitet
	 */
	public function setAktivitet($_aktivitet)
	{
		return ($this->Aktivitet = $_aktivitet);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructAktivitet
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructAktivitet
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructAktivitet
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructAktivitet
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructAktivitet
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string Aktivitet
	 */
	public function getAttributeName()
	{
		return 'Aktivitet';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfAktivitet
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