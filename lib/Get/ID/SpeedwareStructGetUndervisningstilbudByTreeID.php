<?php
/**
 * File for class SpeedwareStructGetUndervisningstilbudByTreeID
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetUndervisningstilbudByTreeID originally named GetUndervisningstilbudByTreeID
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetUndervisningstilbudByTreeID extends SpeedwareWsdlClass
{
	/**
	 * The TreeID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $TreeID;
	/**
	 * The School
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $School;
	/**
	 * Constructor method for GetUndervisningstilbudByTreeID
	 * @see parent::__construct()
	 * @param int $_treeID
	 * @param string $_school
	 * @return SpeedwareStructGetUndervisningstilbudByTreeID
	 */
	public function __construct($_treeID,$_school = NULL)
	{
		parent::__construct(array('TreeID'=>$_treeID,'School'=>$_school));
	}
	/**
	 * Get TreeID value
	 * @return int
	 */
	public function getTreeID()
	{
		return $this->TreeID;
	}
	/**
	 * Set TreeID value
	 * @param int $_treeID the TreeID
	 * @return int
	 */
	public function setTreeID($_treeID)
	{
		return ($this->TreeID = $_treeID);
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
	 * @return SpeedwareStructGetUndervisningstilbudByTreeID
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