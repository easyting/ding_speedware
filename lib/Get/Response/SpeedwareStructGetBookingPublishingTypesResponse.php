<?php
/**
 * File for class SpeedwareStructGetBookingPublishingTypesResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetBookingPublishingTypesResponse originally named GetBookingPublishingTypesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetBookingPublishingTypesResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetBookingPublishingTypesResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfBookingPublishingType
	 */
	public $GetBookingPublishingTypesResult;
	/**
	 * Constructor method for GetBookingPublishingTypesResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfBookingPublishingType $_getBookingPublishingTypesResult
	 * @return SpeedwareStructGetBookingPublishingTypesResponse
	 */
	public function __construct($_getBookingPublishingTypesResult = NULL)
	{
		parent::__construct(array('GetBookingPublishingTypesResult'=>($_getBookingPublishingTypesResult instanceof SpeedwareStructArrayOfBookingPublishingType)?$_getBookingPublishingTypesResult:new SpeedwareStructArrayOfBookingPublishingType($_getBookingPublishingTypesResult)));
	}
	/**
	 * Get GetBookingPublishingTypesResult value
	 * @return SpeedwareStructArrayOfBookingPublishingType|null
	 */
	public function getGetBookingPublishingTypesResult()
	{
		return $this->GetBookingPublishingTypesResult;
	}
	/**
	 * Set GetBookingPublishingTypesResult value
	 * @param SpeedwareStructArrayOfBookingPublishingType $_getBookingPublishingTypesResult the GetBookingPublishingTypesResult
	 * @return SpeedwareStructArrayOfBookingPublishingType
	 */
	public function setGetBookingPublishingTypesResult($_getBookingPublishingTypesResult)
	{
		return ($this->GetBookingPublishingTypesResult = $_getBookingPublishingTypesResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetBookingPublishingTypesResponse
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