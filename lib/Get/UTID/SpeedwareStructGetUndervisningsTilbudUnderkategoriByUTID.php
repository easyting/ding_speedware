<?php
/**
 * File for class SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTID
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTID originally named GetUndervisningsTilbudUnderkategoriByUTID
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTID extends SpeedwareWsdlClass
{
	/**
	 * The UndervisningsTilbudID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $UndervisningsTilbudID;
	/**
	 * Constructor method for GetUndervisningsTilbudUnderkategoriByUTID
	 * @see parent::__construct()
	 * @param int $_undervisningsTilbudID
	 * @return SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTID
	 */
	public function __construct($_undervisningsTilbudID)
	{
		parent::__construct(array('UndervisningsTilbudID'=>$_undervisningsTilbudID));
	}
	/**
	 * Get UndervisningsTilbudID value
	 * @return int
	 */
	public function getUndervisningsTilbudID()
	{
		return $this->UndervisningsTilbudID;
	}
	/**
	 * Set UndervisningsTilbudID value
	 * @param int $_undervisningsTilbudID the UndervisningsTilbudID
	 * @return int
	 */
	public function setUndervisningsTilbudID($_undervisningsTilbudID)
	{
		return ($this->UndervisningsTilbudID = $_undervisningsTilbudID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTID
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