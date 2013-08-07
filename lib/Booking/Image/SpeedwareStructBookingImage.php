<?php
/**
 * File for class SpeedwareStructBookingImage
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructBookingImage originally named BookingImage
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructBookingImage extends SpeedwareWsdlClass
{
	/**
	 * The BookingImageID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $BookingImageID;
	/**
	 * The Image
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var base64Binary
	 */
	public $Image;
	/**
	 * The FileName
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $FileName;
	/**
	 * Constructor method for BookingImage
	 * @see parent::__construct()
	 * @param int $_bookingImageID
	 * @param base64Binary $_image
	 * @param string $_fileName
	 * @return SpeedwareStructBookingImage
	 */
	public function __construct($_bookingImageID,$_image = NULL,$_fileName = NULL)
	{
		parent::__construct(array('BookingImageID'=>$_bookingImageID,'Image'=>$_image,'FileName'=>$_fileName));
	}
	/**
	 * Get BookingImageID value
	 * @return int
	 */
	public function getBookingImageID()
	{
		return $this->BookingImageID;
	}
	/**
	 * Set BookingImageID value
	 * @param int $_bookingImageID the BookingImageID
	 * @return int
	 */
	public function setBookingImageID($_bookingImageID)
	{
		return ($this->BookingImageID = $_bookingImageID);
	}
	/**
	 * Get Image value
	 * @return base64Binary|null
	 */
	public function getImage()
	{
		return $this->Image;
	}
	/**
	 * Set Image value
	 * @param base64Binary $_image the Image
	 * @return base64Binary
	 */
	public function setImage($_image)
	{
		return ($this->Image = $_image);
	}
	/**
	 * Get FileName value
	 * @return string|null
	 */
	public function getFileName()
	{
		return $this->FileName;
	}
	/**
	 * Set FileName value
	 * @param string $_fileName the FileName
	 * @return string
	 */
	public function setFileName($_fileName)
	{
		return ($this->FileName = $_fileName);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructBookingImage
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