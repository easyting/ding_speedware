<?php
/**
 * File for class SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTIDResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTIDResponse originally named GetUndervisningsTilbudUnderkategoriByUTIDResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTIDResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetUndervisningsTilbudUnderkategoriByUTIDResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfUndervisningsTilbudUnderkategori
	 */
	public $GetUndervisningsTilbudUnderkategoriByUTIDResult;
	/**
	 * Constructor method for GetUndervisningsTilbudUnderkategoriByUTIDResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfUndervisningsTilbudUnderkategori $_getUndervisningsTilbudUnderkategoriByUTIDResult
	 * @return SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTIDResponse
	 */
	public function __construct($_getUndervisningsTilbudUnderkategoriByUTIDResult = NULL)
	{
		parent::__construct(array('GetUndervisningsTilbudUnderkategoriByUTIDResult'=>($_getUndervisningsTilbudUnderkategoriByUTIDResult instanceof SpeedwareStructArrayOfUndervisningsTilbudUnderkategori)?$_getUndervisningsTilbudUnderkategoriByUTIDResult:new SpeedwareStructArrayOfUndervisningsTilbudUnderkategori($_getUndervisningsTilbudUnderkategoriByUTIDResult)));
	}
	/**
	 * Get GetUndervisningsTilbudUnderkategoriByUTIDResult value
	 * @return SpeedwareStructArrayOfUndervisningsTilbudUnderkategori|null
	 */
	public function getGetUndervisningsTilbudUnderkategoriByUTIDResult()
	{
		return $this->GetUndervisningsTilbudUnderkategoriByUTIDResult;
	}
	/**
	 * Set GetUndervisningsTilbudUnderkategoriByUTIDResult value
	 * @param SpeedwareStructArrayOfUndervisningsTilbudUnderkategori $_getUndervisningsTilbudUnderkategoriByUTIDResult the GetUndervisningsTilbudUnderkategoriByUTIDResult
	 * @return SpeedwareStructArrayOfUndervisningsTilbudUnderkategori
	 */
	public function setGetUndervisningsTilbudUnderkategoriByUTIDResult($_getUndervisningsTilbudUnderkategoriByUTIDResult)
	{
		return ($this->GetUndervisningsTilbudUnderkategoriByUTIDResult = $_getUndervisningsTilbudUnderkategoriByUTIDResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTIDResponse
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