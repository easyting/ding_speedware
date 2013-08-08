<?php
/**
 * File for class SpeedwareStructLocation
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructLocation originally named Location
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructLocation extends SpeedwareWsdlClass
{
	/**
	 * The LocationID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $LocationID;
	/**
	 * The LocationName
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $LocationName;
	/**
	 * Constructor method for Location
	 * @see parent::__construct()
	 * @param int $_locationID
	 * @param string $_locationName
	 * @return SpeedwareStructLocation
	 */
	public function __construct($_locationID,$_locationName = NULL)
	{
		parent::__construct(array('LocationID'=>$_locationID,'LocationName'=>$_locationName));
	}
	/**
	 * Get LocationID value
	 * @return int
	 */
	public function getLocationID()
	{
		return $this->LocationID;
	}
	/**
	 * Set LocationID value
	 * @param int $_locationID the LocationID
	 * @return int
	 */
	public function setLocationID($_locationID)
	{
		return ($this->LocationID = $_locationID);
	}
	/**
	 * Get LocationName value
	 * @return string|null
	 */
	public function getLocationName()
	{
		return $this->LocationName;
	}
	/**
	 * Set LocationName value
	 * @param string $_locationName the LocationName
	 * @return string
	 */
	public function setLocationName($_locationName)
	{
		return ($this->LocationName = $_locationName);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructLocation
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