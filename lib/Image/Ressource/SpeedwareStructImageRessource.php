<?php
/**
 * File for class SpeedwareStructImageRessource
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructImageRessource originally named ImageRessource
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructImageRessource extends SpeedwareWsdlClass
{
	/**
	 * The ImageID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $ImageID;
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
	 * Constructor method for ImageRessource
	 * @see parent::__construct()
	 * @param int $_imageID
	 * @param base64Binary $_image
	 * @param string $_fileName
	 * @return SpeedwareStructImageRessource
	 */
	public function __construct($_imageID,$_image = NULL,$_fileName = NULL)
	{
		parent::__construct(array('ImageID'=>$_imageID,'Image'=>$_image,'FileName'=>$_fileName));
	}
	/**
	 * Get ImageID value
	 * @return int
	 */
	public function getImageID()
	{
		return $this->ImageID;
	}
	/**
	 * Set ImageID value
	 * @param int $_imageID the ImageID
	 * @return int
	 */
	public function setImageID($_imageID)
	{
		return ($this->ImageID = $_imageID);
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
	 * @return SpeedwareStructImageRessource
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