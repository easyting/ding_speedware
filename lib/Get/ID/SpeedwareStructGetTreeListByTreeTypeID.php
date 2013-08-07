<?php
/**
 * File for class SpeedwareStructGetTreeListByTreeTypeID
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetTreeListByTreeTypeID originally named GetTreeListByTreeTypeID
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetTreeListByTreeTypeID extends SpeedwareWsdlClass
{
	/**
	 * The TreeTypeID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $TreeTypeID;
	/**
	 * The School
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $School;
	/**
	 * Constructor method for GetTreeListByTreeTypeID
	 * @see parent::__construct()
	 * @param int $_treeTypeID
	 * @param string $_school
	 * @return SpeedwareStructGetTreeListByTreeTypeID
	 */
	public function __construct($_treeTypeID,$_school = NULL)
	{
		parent::__construct(array('TreeTypeID'=>$_treeTypeID,'School'=>$_school));
	}
	/**
	 * Get TreeTypeID value
	 * @return int
	 */
	public function getTreeTypeID()
	{
		return $this->TreeTypeID;
	}
	/**
	 * Set TreeTypeID value
	 * @param int $_treeTypeID the TreeTypeID
	 * @return int
	 */
	public function setTreeTypeID($_treeTypeID)
	{
		return ($this->TreeTypeID = $_treeTypeID);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetTreeListByTreeTypeID
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