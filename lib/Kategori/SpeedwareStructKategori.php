<?php
/**
 * File for class SpeedwareStructKategori
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructKategori originally named Kategori
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructKategori extends SpeedwareWsdlClass
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
	 * The Navn
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Navn;
	/**
	 * Constructor method for Kategori
	 * @see parent::__construct()
	 * @param int $_kategoriID
	 * @param string $_navn
	 * @return SpeedwareStructKategori
	 */
	public function __construct($_kategoriID,$_navn = NULL)
	{
		parent::__construct(array('KategoriID'=>$_kategoriID,'Navn'=>$_navn));
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructKategori
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