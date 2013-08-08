<?php
/**
 * File for class SpeedwareStructGetImageResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetImageResponse originally named GetImageResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetImageResponse extends SpeedwareWsdlClass
{
	/**
	 * The GetImageResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var base64Binary
	 */
	public $GetImageResult;
	/**
	 * Constructor method for GetImageResponse
	 * @see parent::__construct()
	 * @param base64Binary $_getImageResult
	 * @return SpeedwareStructGetImageResponse
	 */
	public function __construct($_getImageResult = NULL)
	{
		parent::__construct(array('GetImageResult'=>$_getImageResult));
	}
	/**
	 * Get GetImageResult value
	 * @return base64Binary|null
	 */
	public function getGetImageResult()
	{
		return $this->GetImageResult;
	}
	/**
	 * Set GetImageResult value
	 * @param base64Binary $_getImageResult the GetImageResult
	 * @return base64Binary
	 */
	public function setGetImageResult($_getImageResult)
	{
		return ($this->GetImageResult = $_getImageResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructGetImageResponse
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