<?php
/**
 * File for class SpeedwareStructSelectSubCat
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructSelectSubCat originally named SelectSubCat
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructSelectSubCat extends SpeedwareWsdlClass
{
	/**
	 * The UVTID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $UVTID;
	/**
	 * The SubCatID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $SubCatID;
	/**
	 * The School
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $School;
	/**
	 * Constructor method for SelectSubCat
	 * @see parent::__construct()
	 * @param int $_uVTID
	 * @param int $_subCatID
	 * @param string $_school
	 * @return SpeedwareStructSelectSubCat
	 */
	public function __construct($_uVTID,$_subCatID,$_school = NULL)
	{
		parent::__construct(array('UVTID'=>$_uVTID,'SubCatID'=>$_subCatID,'School'=>$_school));
	}
	/**
	 * Get UVTID value
	 * @return int
	 */
	public function getUVTID()
	{
		return $this->UVTID;
	}
	/**
	 * Set UVTID value
	 * @param int $_uVTID the UVTID
	 * @return int
	 */
	public function setUVTID($_uVTID)
	{
		return ($this->UVTID = $_uVTID);
	}
	/**
	 * Get SubCatID value
	 * @return int
	 */
	public function getSubCatID()
	{
		return $this->SubCatID;
	}
	/**
	 * Set SubCatID value
	 * @param int $_subCatID the SubCatID
	 * @return int
	 */
	public function setSubCatID($_subCatID)
	{
		return ($this->SubCatID = $_subCatID);
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
	 * @return SpeedwareStructSelectSubCat
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