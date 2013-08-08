<?php
/**
 * File for class SpeedwareStructGetStudentListByTeacherResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetStudentListByTeacherResponse originally named GetStudentListByTeacherResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetStudentListByTeacherResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetStudentListByTeacherResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfStudent
	 */
	public $GetStudentListByTeacherResult;
	/**
	 * Constructor method for GetStudentListByTeacherResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfStudent $_getStudentListByTeacherResult
	 * @return SpeedwareStructGetStudentListByTeacherResponse
	 */
	public function __construct($_getStudentListByTeacherResult = NULL)
	{
		parent::__construct(array('GetStudentListByTeacherResult'=>($_getStudentListByTeacherResult instanceof SpeedwareStructArrayOfStudent)?$_getStudentListByTeacherResult:new SpeedwareStructArrayOfStudent($_getStudentListByTeacherResult)));
	}
	/**
	 * Get GetStudentListByTeacherResult value
	 * @return SpeedwareStructArrayOfStudent|null
	 */
	public function getGetStudentListByTeacherResult()
	{
		return $this->GetStudentListByTeacherResult;
	}
	/**
	 * Set GetStudentListByTeacherResult value
	 * @param SpeedwareStructArrayOfStudent $_getStudentListByTeacherResult the GetStudentListByTeacherResult
	 * @return SpeedwareStructArrayOfStudent
	 */
	public function setGetStudentListByTeacherResult($_getStudentListByTeacherResult)
	{
		return ($this->GetStudentListByTeacherResult = $_getStudentListByTeacherResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetStudentListByTeacherResponse
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