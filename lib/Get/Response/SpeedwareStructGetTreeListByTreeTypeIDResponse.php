<?php
/**
 * File for class SpeedwareStructGetTreeListByTreeTypeIDResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetTreeListByTreeTypeIDResponse originally named GetTreeListByTreeTypeIDResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetTreeListByTreeTypeIDResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetTreeListByTreeTypeIDResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructTreeStructure
	 */
	public $GetTreeListByTreeTypeIDResult;
	/**
	 * Constructor method for GetTreeListByTreeTypeIDResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructTreeStructure $_getTreeListByTreeTypeIDResult
	 * @return SpeedwareStructGetTreeListByTreeTypeIDResponse
	 */
	public function __construct($_getTreeListByTreeTypeIDResult = NULL)
	{
		parent::__construct(array('GetTreeListByTreeTypeIDResult'=>$_getTreeListByTreeTypeIDResult));
	}
	/**
	 * Get GetTreeListByTreeTypeIDResult value
	 * @return SpeedwareStructTreeStructure|null
	 */
	public function getGetTreeListByTreeTypeIDResult()
	{
		return $this->GetTreeListByTreeTypeIDResult;
	}
	/**
	 * Set GetTreeListByTreeTypeIDResult value
	 * @param SpeedwareStructTreeStructure $_getTreeListByTreeTypeIDResult the GetTreeListByTreeTypeIDResult
	 * @return SpeedwareStructTreeStructure
	 */
	public function setGetTreeListByTreeTypeIDResult($_getTreeListByTreeTypeIDResult)
	{
		return ($this->GetTreeListByTreeTypeIDResult = $_getTreeListByTreeTypeIDResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetTreeListByTreeTypeIDResponse
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