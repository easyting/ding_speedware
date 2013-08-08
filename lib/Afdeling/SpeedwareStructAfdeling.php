<?php
/**
 * File for class SpeedwareStructAfdeling
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructAfdeling originally named Afdeling
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructAfdeling extends SpeedwareWsdlClass
{
	/**
	 * The AfdelingID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $AfdelingID;
	/**
	 * The Navn
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Navn;
	/**
	 * The Kategorier
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfKategori
	 */
	public $Kategorier;
	/**
	 * Constructor method for Afdeling
	 * @see parent::__construct()
	 * @param int $_afdelingID
	 * @param string $_navn
	 * @param SpeedwareStructArrayOfKategori $_kategorier
	 * @return SpeedwareStructAfdeling
	 */
	public function __construct($_afdelingID,$_navn = NULL,$_kategorier = NULL)
	{
		parent::__construct(array('AfdelingID'=>$_afdelingID,'Navn'=>$_navn,'Kategorier'=>($_kategorier instanceof SpeedwareStructArrayOfKategori)?$_kategorier:new SpeedwareStructArrayOfKategori($_kategorier)));
	}
	/**
	 * Get AfdelingID value
	 * @return int
	 */
	public function getAfdelingID()
	{
		return $this->AfdelingID;
	}
	/**
	 * Set AfdelingID value
	 * @param int $_afdelingID the AfdelingID
	 * @return int
	 */
	public function setAfdelingID($_afdelingID)
	{
		return ($this->AfdelingID = $_afdelingID);
	}
	/**
	 * Get Navn value
	 * @return string|null
	 */
	public function getNavn()
	{
		return $this->Navn;
	}
	/**
	 * Set Navn value
	 * @param string $_navn the Navn
	 * @return string
	 */
	public function setNavn($_navn)
	{
		return ($this->Navn = $_navn);
	}
	/**
	 * Get Kategorier value
	 * @return SpeedwareStructArrayOfKategori|null
	 */
	public function getKategorier()
	{
		return $this->Kategorier;
	}
	/**
	 * Set Kategorier value
	 * @param SpeedwareStructArrayOfKategori $_kategorier the Kategorier
	 * @return SpeedwareStructArrayOfKategori
	 */
	public function setKategorier($_kategorier)
	{
		return ($this->Kategorier = $_kategorier);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructAfdeling
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