<?php
/**
 * File for class SpeedwareStructGetSchoolListResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetSchoolListResponse originally named GetSchoolListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetSchoolListResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetSchoolListResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfSchool
	 */
	public $GetSchoolListResult;
	/**
	 * Constructor method for GetSchoolListResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfSchool $_getSchoolListResult
	 * @return SpeedwareStructGetSchoolListResponse
	 */
	public function __construct($_getSchoolListResult = NULL)
	{
		parent::__construct(array('GetSchoolListResult'=>($_getSchoolListResult instanceof SpeedwareStructArrayOfSchool)?$_getSchoolListResult:new SpeedwareStructArrayOfSchool($_getSchoolListResult)));
	}
	/**
	 * Get GetSchoolListResult value
	 * @return SpeedwareStructArrayOfSchool|null
	 */
	public function getGetSchoolListResult()
	{
		return $this->GetSchoolListResult;
	}
	/**
	 * Set GetSchoolListResult value
	 * @param SpeedwareStructArrayOfSchool $_getSchoolListResult the GetSchoolListResult
	 * @return SpeedwareStructArrayOfSchool
	 */
	public function setGetSchoolListResult($_getSchoolListResult)
	{
		return ($this->GetSchoolListResult = $_getSchoolListResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetSchoolListResponse
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