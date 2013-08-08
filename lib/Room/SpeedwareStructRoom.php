<?php
/**
 * File for class SpeedwareStructRoom
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructRoom originally named Room
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructRoom extends SpeedwareWsdlClass
{
	/**
	 * The RoomID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $RoomID;
	/**
	 * The LocationID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $LocationID;
	/**
	 * The RoomName
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $RoomName;
	/**
	 * Constructor method for Room
	 * @see parent::__construct()
	 * @param int $_roomID
	 * @param int $_locationID
	 * @param string $_roomName
	 * @return SpeedwareStructRoom
	 */
	public function __construct($_roomID,$_locationID,$_roomName = NULL)
	{
		parent::__construct(array('RoomID'=>$_roomID,'LocationID'=>$_locationID,'RoomName'=>$_roomName));
	}
	/**
	 * Get RoomID value
	 * @return int
	 */
	public function getRoomID()
	{
		return $this->RoomID;
	}
	/**
	 * Set RoomID value
	 * @param int $_roomID the RoomID
	 * @return int
	 */
	public function setRoomID($_roomID)
	{
		return ($this->RoomID = $_roomID);
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
	 * Get RoomName value
	 * @return string|null
	 */
	public function getRoomName()
	{
		return $this->RoomName;
	}
	/**
	 * Set RoomName value
	 * @param string $_roomName the RoomName
	 * @return string
	 */
	public function setRoomName($_roomName)
	{
		return ($this->RoomName = $_roomName);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructRoom
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