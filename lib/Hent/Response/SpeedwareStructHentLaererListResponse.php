<?php
/**
 * File for class SpeedwareStructHentLaererListResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentLaererListResponse originally named HentLaererListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentLaererListResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentLaererListResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfLaerer
	 */
	public $HentLaererListResult;
	/**
	 * Constructor method for HentLaererListResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfLaerer $_hentLaererListResult
	 * @return SpeedwareStructHentLaererListResponse
	 */
	public function __construct($_hentLaererListResult = NULL)
	{
		parent::__construct(array('HentLaererListResult'=>($_hentLaererListResult instanceof SpeedwareStructArrayOfLaerer)?$_hentLaererListResult:new SpeedwareStructArrayOfLaerer($_hentLaererListResult)));
	}
	/**
	 * Get HentLaererListResult value
	 * @return SpeedwareStructArrayOfLaerer|null
	 */
	public function getHentLaererListResult()
	{
		return $this->HentLaererListResult;
	}
	/**
	 * Set HentLaererListResult value
	 * @param SpeedwareStructArrayOfLaerer $_hentLaererListResult the HentLaererListResult
	 * @return SpeedwareStructArrayOfLaerer
	 */
	public function setHentLaererListResult($_hentLaererListResult)
	{
		return ($this->HentLaererListResult = $_hentLaererListResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentLaererListResponse
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