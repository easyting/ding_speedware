<?php
/**
 * File for class SpeedwareStructGetTreeListResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetTreeListResponse originally named GetTreeListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetTreeListResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetTreeListResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructTreeStructure
	 */
	public $GetTreeListResult;
	/**
	 * Constructor method for GetTreeListResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructTreeStructure $_getTreeListResult
	 * @return SpeedwareStructGetTreeListResponse
	 */
	public function __construct($_getTreeListResult = NULL)
	{
		parent::__construct(array('GetTreeListResult'=>$_getTreeListResult));
	}
	/**
	 * Get GetTreeListResult value
	 * @return SpeedwareStructTreeStructure|null
	 */
	public function getGetTreeListResult()
	{
		return $this->GetTreeListResult;
	}
	/**
	 * Set GetTreeListResult value
	 * @param SpeedwareStructTreeStructure $_getTreeListResult the GetTreeListResult
	 * @return SpeedwareStructTreeStructure
	 */
	public function setGetTreeListResult($_getTreeListResult)
	{
		return ($this->GetTreeListResult = $_getTreeListResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetTreeListResponse
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