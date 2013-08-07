<?php
/**
 * File for class SpeedwareStructGetUndervisningstilbudListByKategoriID
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructGetUndervisningstilbudListByKategoriID originally named GetUndervisningstilbudListByKategoriID
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructGetUndervisningstilbudListByKategoriID extends SpeedwareWsdlClass
{
	/**
	 * The KategoriID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $KategoriID;
	/**
	 * The Skole
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Skole;
	/**
	 * Constructor method for GetUndervisningstilbudListByKategoriID
	 * @see parent::__construct()
	 * @param int $_kategoriID
	 * @param string $_skole
	 * @return SpeedwareStructGetUndervisningstilbudListByKategoriID
	 */
	public function __construct($_kategoriID,$_skole = NULL)
	{
		parent::__construct(array('KategoriID'=>$_kategoriID,'Skole'=>$_skole));
	}
	/**
	 * Get KategoriID value
	 * @return int
	 */
	public function getKategoriID()
	{
		return $this->KategoriID;
	}
	/**
	 * Set KategoriID value
	 * @param int $_kategoriID the KategoriID
	 * @return int
	 */
	public function setKategoriID($_kategoriID)
	{
		return ($this->KategoriID = $_kategoriID);
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
	 * @return SpeedwareStructGetUndervisningstilbudListByKategoriID
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