<?php
/**
 * File for class SpeedwareStructGetRoomsResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetRoomsResponse originally named GetRoomsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetRoomsResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetRoomsResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfRoom
	 */
	public $GetRoomsResult;
	/**
	 * Constructor method for GetRoomsResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfRoom $_getRoomsResult
	 * @return SpeedwareStructGetRoomsResponse
	 */
	public function __construct($_getRoomsResult = NULL)
	{
		parent::__construct(array('GetRoomsResult'=>($_getRoomsResult instanceof SpeedwareStructArrayOfRoom)?$_getRoomsResult:new SpeedwareStructArrayOfRoom($_getRoomsResult)));
	}
	/**
	 * Get GetRoomsResult value
	 * @return SpeedwareStructArrayOfRoom|null
	 */
	public function getGetRoomsResult()
	{
		return $this->GetRoomsResult;
	}
	/**
	 * Set GetRoomsResult value
	 * @param SpeedwareStructArrayOfRoom $_getRoomsResult the GetRoomsResult
	 * @return SpeedwareStructArrayOfRoom
	 */
	public function setGetRoomsResult($_getRoomsResult)
	{
		return ($this->GetRoomsResult = $_getRoomsResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetRoomsResponse
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