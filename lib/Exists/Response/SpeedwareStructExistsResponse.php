<?php
/**
 * File for class SpeedwareStructExistsResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructExistsResponse originally named ExistsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructExistsResponse extends SpeedwareWsdlClass
{
	/**
	 * The ExistsResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExistsResult;
	/**
	 * Constructor method for ExistsResponse
	 * @see parent::__construct()
	 * @param string $_existsResult
	 * @return SpeedwareStructExistsResponse
	 */
	public function __construct($_existsResult = NULL)
	{
		parent::__construct(array('ExistsResult'=>$_existsResult));
	}
	/**
	 * Get ExistsResult value
	 * @return string|null
	 */
	public function getExistsResult()
	{
		return $this->ExistsResult;
	}
	/**
	 * Set ExistsResult value
	 * @param string $_existsResult the ExistsResult
	 * @return string
	 */
	public function setExistsResult($_existsResult)
	{
		return ($this->ExistsResult = $_existsResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructExistsResponse
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