<?php
/**
 * File for class SpeedwareStructTreeStructure
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructTreeStructure originally named TreeStructure
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructTreeStructure extends SpeedwareWsdlClass
{
	/**
	 * The TreeList
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfTree
	 */
	public $TreeList;
	/**
	 * Constructor method for TreeStructure
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfTree $_treeList
	 * @return SpeedwareStructTreeStructure
	 */
	public function __construct($_treeList = NULL)
	{
		parent::__construct(array('TreeList'=>($_treeList instanceof SpeedwareStructArrayOfTree)?$_treeList:new SpeedwareStructArrayOfTree($_treeList)));
	}
	/**
	 * Get TreeList value
	 * @return SpeedwareStructArrayOfTree|null
	 */
	public function getTreeList()
	{
		return $this->TreeList;
	}
	/**
	 * Set TreeList value
	 * @param SpeedwareStructArrayOfTree $_treeList the TreeList
	 * @return SpeedwareStructArrayOfTree
	 */
	public function setTreeList($_treeList)
	{
		return ($this->TreeList = $_treeList);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructTreeStructure
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