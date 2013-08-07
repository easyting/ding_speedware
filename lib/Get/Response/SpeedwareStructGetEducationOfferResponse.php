<?php
/**
 * File for class SpeedwareStructGetEducationOfferResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetEducationOfferResponse originally named GetEducationOfferResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetEducationOfferResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetEducationOfferResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfEducationOffer
	 */
	public $GetEducationOfferResult;
	/**
	 * Constructor method for GetEducationOfferResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfEducationOffer $_getEducationOfferResult
	 * @return SpeedwareStructGetEducationOfferResponse
	 */
	public function __construct($_getEducationOfferResult = NULL)
	{
		parent::__construct(array('GetEducationOfferResult'=>($_getEducationOfferResult instanceof SpeedwareStructArrayOfEducationOffer)?$_getEducationOfferResult:new SpeedwareStructArrayOfEducationOffer($_getEducationOfferResult)));
	}
	/**
	 * Get GetEducationOfferResult value
	 * @return SpeedwareStructArrayOfEducationOffer|null
	 */
	public function getGetEducationOfferResult()
	{
		return $this->GetEducationOfferResult;
	}
	/**
	 * Set GetEducationOfferResult value
	 * @param SpeedwareStructArrayOfEducationOffer $_getEducationOfferResult the GetEducationOfferResult
	 * @return SpeedwareStructArrayOfEducationOffer
	 */
	public function setGetEducationOfferResult($_getEducationOfferResult)
	{
		return ($this->GetEducationOfferResult = $_getEducationOfferResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetEducationOfferResponse
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