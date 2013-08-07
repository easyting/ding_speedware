<?php
/**
 * File for class SpeedwareStructHentSammenspilDetalje
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentSammenspilDetalje originally named HentSammenspilDetalje
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentSammenspilDetalje extends SpeedwareWsdlClass
{
	/**
	 * The SammenspilID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $SammenspilID;
	/**
	 * The Skole
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Skole;
	/**
	 * Constructor method for HentSammenspilDetalje
	 * @see parent::__construct()
	 * @param int $_sammenspilID
	 * @param string $_skole
	 * @return SpeedwareStructHentSammenspilDetalje
	 */
	public function __construct($_sammenspilID,$_skole = NULL)
	{
		parent::__construct(array('SammenspilID'=>$_sammenspilID,'Skole'=>$_skole));
	}
	/**
	 * Get SammenspilID value
	 * @return int
	 */
	public function getSammenspilID()
	{
		return $this->SammenspilID;
	}
	/**
	 * Set SammenspilID value
	 * @param int $_sammenspilID the SammenspilID
	 * @return int
	 */
	public function setSammenspilID($_sammenspilID)
	{
		return ($this->SammenspilID = $_sammenspilID);
	}
	/**
	 * Get Skole value
	 * @return string|null
	 */
	public function getSkole()
	{
		return $this->Skole;
	}
	/**
	 * Set Skole value
	 * @param string $_skole the Skole
	 * @return string
	 */
	public function setSkole($_skole)
	{
		return ($this->Skole = $_skole);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentSammenspilDetalje
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