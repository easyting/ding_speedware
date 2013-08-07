<?php
/**
 * File for class SpeedwareStructGetImage
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetImage originally named GetImage
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetImage extends SpeedwareWsdlClass
{
	/**
	 * The Type
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var SpeedwareEnumImageType
	 */
	public $Type;
	/**
	 * The ID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $ID;
	/**
	 * The School
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $School;
	/**
	 * Constructor method for GetImage
	 * @see parent::__construct()
	 * @param SpeedwareEnumImageType $_type
	 * @param int $_iD
	 * @param string $_school
	 * @return SpeedwareStructGetImage
	 */
	public function __construct($_type,$_iD,$_school = NULL)
	{
		parent::__construct(array('Type'=>$_type,'ID'=>$_iD,'School'=>$_school));
	}
	/**
	 * Get Type value
	 * @return SpeedwareEnumImageType
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Type value
	 * @uses SpeedwareEnumImageType::valueIsValid()
	 * @param SpeedwareEnumImageType $_type the Type
	 * @return SpeedwareEnumImageType
	 */
	public function setType($_type)
	{
		if(!SpeedwareEnumImageType::valueIsValid($_type))
		{
			return false;
		}
		return ($this->Type = $_type);
	}
	/**
	 * Get ID value
	 * @return int
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set ID value
	 * @param int $_iD the ID
	 * @return int
	 */
	public function setID($_iD)
	{
		return ($this->ID = $_iD);
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
	 * @return SpeedwareStructGetImage
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