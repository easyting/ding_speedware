<?php
/**
 * File for class SpeedwareStructArrayOfAktivitetDetaljer
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructArrayOfAktivitetDetaljer originally named ArrayOfAktivitetDetaljer
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructArrayOfAktivitetDetaljer extends SpeedwareWsdlClass
{
	/**
	 * The AktivitetDetaljer
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SpeedwareStructAktivitetDetaljer
	 */
	public $AktivitetDetaljer;
	/**
	 * Constructor method for ArrayOfAktivitetDetaljer
	 * @see parent::__construct()
	 * @param SpeedwareStructAktivitetDetaljer $_aktivitetDetaljer
	 * @return SpeedwareStructArrayOfAktivitetDetaljer
	 */
	public function __construct($_aktivitetDetaljer = NULL)
	{
		parent::__construct(array('AktivitetDetaljer'=>$_aktivitetDetaljer));
	}
	/**
	 * Get AktivitetDetaljer value
	 * @return SpeedwareStructAktivitetDetaljer|null
	 */
	public function getAktivitetDetaljer()
	{
		return $this->AktivitetDetaljer;
	}
	/**
	 * Set AktivitetDetaljer value
	 * @param SpeedwareStructAktivitetDetaljer $_aktivitetDetaljer the AktivitetDetaljer
	 * @return SpeedwareStructAktivitetDetaljer
	 */
	public function setAktivitetDetaljer($_aktivitetDetaljer)
	{
		return ($this->AktivitetDetaljer = $_aktivitetDetaljer);
	}
	/**
	 * Returns the current element
	 * @see SpeedwareWsdlClass::current()
	 * @return SpeedwareStructAktivitetDetaljer
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see SpeedwareWsdlClass::item()
	 * @param int $_index
	 * @return SpeedwareStructAktivitetDetaljer
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SpeedwareWsdlClass::first()
	 * @return SpeedwareStructAktivitetDetaljer
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see SpeedwareWsdlClass::last()
	 * @return SpeedwareStructAktivitetDetaljer
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see SpeedwareWsdlClass::last()
	 * @param int $_offset
	 * @return SpeedwareStructAktivitetDetaljer
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see SpeedwareWsdlClass::getAttributeName()
	 * @return string AktivitetDetaljer
	 */
	public function getAttributeName()
	{
		return 'AktivitetDetaljer';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructArrayOfAktivitetDetaljer
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