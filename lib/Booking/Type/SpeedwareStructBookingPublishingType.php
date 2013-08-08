<?php
/**
 * File for class SpeedwareStructBookingPublishingType
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructBookingPublishingType originally named BookingPublishingType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructBookingPublishingType extends SpeedwareWsdlClass
{
	/**
	 * The PublishingTypeID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $PublishingTypeID;
	/**
	 * The Publishingtype
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Publishingtype;
	/**
	 * Constructor method for BookingPublishingType
	 * @see parent::__construct()
	 * @param int $_publishingTypeID
	 * @param string $_publishingtype
	 * @return SpeedwareStructBookingPublishingType
	 */
	public function __construct($_publishingTypeID,$_publishingtype = NULL)
	{
		parent::__construct(array('PublishingTypeID'=>$_publishingTypeID,'Publishingtype'=>$_publishingtype));
	}
	/**
	 * Get PublishingTypeID value
	 * @return int
	 */
	public function getPublishingTypeID()
	{
		return $this->PublishingTypeID;
	}
	/**
	 * Set PublishingTypeID value
	 * @param int $_publishingTypeID the PublishingTypeID
	 * @return int
	 */
	public function setPublishingTypeID($_publishingTypeID)
	{
		return ($this->PublishingTypeID = $_publishingTypeID);
	}
	/**
	 * Get Publishingtype value
	 * @return string|null
	 */
	public function getPublishingtype()
	{
		return $this->Publishingtype;
	}
	/**
	 * Set Publishingtype value
	 * @param string $_publishingtype the Publishingtype
	 * @return string
	 */
	public function setPublishingtype($_publishingtype)
	{
		return ($this->Publishingtype = $_publishingtype);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructBookingPublishingType
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