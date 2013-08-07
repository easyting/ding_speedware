<?php
/**
 * File for class SpeedwareStructSchool
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructSchool originally named School
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructSchool extends SpeedwareWsdlClass
{
	/**
	 * The SchoolShortName
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SchoolShortName;
	/**
	 * The SchoolName
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SchoolName;
	/**
	 * Constructor method for School
	 * @see parent::__construct()
	 * @param string $_schoolShortName
	 * @param string $_schoolName
	 * @return SpeedwareStructSchool
	 */
	public function __construct($_schoolShortName = NULL,$_schoolName = NULL)
	{
		parent::__construct(array('SchoolShortName'=>$_schoolShortName,'SchoolName'=>$_schoolName));
	}
	/**
	 * Get SchoolShortName value
	 * @return string|null
	 */
	public function getSchoolShortName()
	{
		return $this->SchoolShortName;
	}
	/**
	 * Set SchoolShortName value
	 * @param string $_schoolShortName the SchoolShortName
	 * @return string
	 */
	public function setSchoolShortName($_schoolShortName)
	{
		return ($this->SchoolShortName = $_schoolShortName);
	}
	/**
	 * Get SchoolName value
	 * @return string|null
	 */
	public function getSchoolName()
	{
		return $this->SchoolName;
	}
	/**
	 * Set SchoolName value
	 * @param string $_schoolName the SchoolName
	 * @return string
	 */
	public function setSchoolName($_schoolName)
	{
		return ($this->SchoolName = $_schoolName);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructSchool
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