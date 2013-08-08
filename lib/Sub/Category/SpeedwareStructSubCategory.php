<?php
/**
 * File for class SpeedwareStructSubCategory
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructSubCategory originally named SubCategory
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructSubCategory extends SpeedwareWsdlClass
{
	/**
	 * The SubCategoryID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $SubCategoryID;
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * Constructor method for SubCategory
	 * @see parent::__construct()
	 * @param int $_subCategoryID
	 * @param string $_name
	 * @return SpeedwareStructSubCategory
	 */
	public function __construct($_subCategoryID,$_name = NULL)
	{
		parent::__construct(array('SubCategoryID'=>$_subCategoryID,'Name'=>$_name));
	}
	/**
	 * Get SubCategoryID value
	 * @return int
	 */
	public function getSubCategoryID()
	{
		return $this->SubCategoryID;
	}
	/**
	 * Set SubCategoryID value
	 * @param int $_subCategoryID the SubCategoryID
	 * @return int
	 */
	public function setSubCategoryID($_subCategoryID)
	{
		return ($this->SubCategoryID = $_subCategoryID);
	}
	/**
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructSubCategory
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