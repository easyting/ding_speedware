<?php
/**
 * File for class SpeedwareStructGetUndervisningstilbudListByKategoriIDResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetUndervisningstilbudListByKategoriIDResponse originally named GetUndervisningstilbudListByKategoriIDResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetUndervisningstilbudListByKategoriIDResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetUndervisningstilbudListByKategoriIDResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfUndervisningstilbud
	 */
	public $GetUndervisningstilbudListByKategoriIDResult;
	/**
	 * Constructor method for GetUndervisningstilbudListByKategoriIDResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfUndervisningstilbud $_getUndervisningstilbudListByKategoriIDResult
	 * @return SpeedwareStructGetUndervisningstilbudListByKategoriIDResponse
	 */
	public function __construct($_getUndervisningstilbudListByKategoriIDResult = NULL)
	{
		parent::__construct(array('GetUndervisningstilbudListByKategoriIDResult'=>($_getUndervisningstilbudListByKategoriIDResult instanceof SpeedwareStructArrayOfUndervisningstilbud)?$_getUndervisningstilbudListByKategoriIDResult:new SpeedwareStructArrayOfUndervisningstilbud($_getUndervisningstilbudListByKategoriIDResult)));
	}
	/**
	 * Get GetUndervisningstilbudListByKategoriIDResult value
	 * @return SpeedwareStructArrayOfUndervisningstilbud|null
	 */
	public function getGetUndervisningstilbudListByKategoriIDResult()
	{
		return $this->GetUndervisningstilbudListByKategoriIDResult;
	}
	/**
	 * Set GetUndervisningstilbudListByKategoriIDResult value
	 * @param SpeedwareStructArrayOfUndervisningstilbud $_getUndervisningstilbudListByKategoriIDResult the GetUndervisningstilbudListByKategoriIDResult
	 * @return SpeedwareStructArrayOfUndervisningstilbud
	 */
	public function setGetUndervisningstilbudListByKategoriIDResult($_getUndervisningstilbudListByKategoriIDResult)
	{
		return ($this->GetUndervisningstilbudListByKategoriIDResult = $_getUndervisningstilbudListByKategoriIDResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetUndervisningstilbudListByKategoriIDResponse
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