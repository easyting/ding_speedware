<?php
/**
 * File for class SpeedwareStructHentSkoleListResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentSkoleListResponse originally named HentSkoleListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentSkoleListResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentSkoleListResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfSkole
	 */
	public $HentSkoleListResult;
	/**
	 * Constructor method for HentSkoleListResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfSkole $_hentSkoleListResult
	 * @return SpeedwareStructHentSkoleListResponse
	 */
	public function __construct($_hentSkoleListResult = NULL)
	{
		parent::__construct(array('HentSkoleListResult'=>($_hentSkoleListResult instanceof SpeedwareStructArrayOfSkole)?$_hentSkoleListResult:new SpeedwareStructArrayOfSkole($_hentSkoleListResult)));
	}
	/**
	 * Get HentSkoleListResult value
	 * @return SpeedwareStructArrayOfSkole|null
	 */
	public function getHentSkoleListResult()
	{
		return $this->HentSkoleListResult;
	}
	/**
	 * Set HentSkoleListResult value
	 * @param SpeedwareStructArrayOfSkole $_hentSkoleListResult the HentSkoleListResult
	 * @return SpeedwareStructArrayOfSkole
	 */
	public function setHentSkoleListResult($_hentSkoleListResult)
	{
		return ($this->HentSkoleListResult = $_hentSkoleListResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentSkoleListResponse
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