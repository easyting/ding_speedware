<?php
/**
 * File for class SpeedwareStructGetStudentListByTeacher
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetStudentListByTeacher originally named GetStudentListByTeacher
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetStudentListByTeacher extends SpeedwareWsdlClass
{
	/**
	 * The School
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $School;
	/**
	 * The Username
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Username;
	/**
	 * The Password
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Password;
	/**
	 * Constructor method for GetStudentListByTeacher
	 * @see parent::__construct()
	 * @param string $_school
	 * @param string $_username
	 * @param string $_password
	 * @return SpeedwareStructGetStudentListByTeacher
	 */
	public function __construct($_school = NULL,$_username = NULL,$_password = NULL)
	{
		parent::__construct(array('School'=>$_school,'Username'=>$_username,'Password'=>$_password));
	}
	/**
	 * Get School value
	 * @return string|null
	 */
	public function getSchool()
	{
		return $this->School;
	}
	/**
	 * Set School value
	 * @param string $_school the School
	 * @return string
	 */
	public function setSchool($_school)
	{
		return ($this->School = $_school);
	}
	/**
	 * Get Username value
	 * @return string|null
	 */
	public function getUsername()
	{
		return $this->Username;
	}
	/**
	 * Set Username value
	 * @param string $_username the Username
	 * @return string
	 */
	public function setUsername($_username)
	{
		return ($this->Username = $_username);
	}
	/**
	 * Get Password value
	 * @return string|null
	 */
	public function getPassword()
	{
		return $this->Password;
	}
	/**
	 * Set Password value
	 * @param string $_password the Password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->Password = $_password);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetStudentListByTeacher
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