<?php
/**
 * File for class SpeedwareStructSammenspil
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructSammenspil originally named Sammenspil
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructSammenspil extends SpeedwareWsdlClass
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
	 * The KategoriID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $KategoriID;
	/**
	 * The SammenSpil
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SammenSpil;
	/**
	 * The Beskrivelse
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Beskrivelse;
	/**
	 * The UnderKategoriList
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfUnderKategori
	 */
	public $UnderKategoriList;
	/**
	 * Constructor method for Sammenspil
	 * @see parent::__construct()
	 * @param int $_sammenspilID
	 * @param int $_kategoriID
	 * @param string $_sammenSpil
	 * @param string $_beskrivelse
	 * @param SpeedwareStructArrayOfUnderKategori $_underKategoriList
	 * @return SpeedwareStructSammenspil
	 */
	public function __construct($_sammenspilID,$_kategoriID,$_sammenSpil = NULL,$_beskrivelse = NULL,$_underKategoriList = NULL)
	{
		parent::__construct(array('SammenspilID'=>$_sammenspilID,'KategoriID'=>$_kategoriID,'SammenSpil'=>$_sammenSpil,'Beskrivelse'=>$_beskrivelse,'UnderKategoriList'=>($_underKategoriList instanceof SpeedwareStructArrayOfUnderKategori)?$_underKategoriList:new SpeedwareStructArrayOfUnderKategori($_underKategoriList)));
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
	 * Get SammenSpil value
	 * @return string|null
	 */
	public function getSammenSpil()
	{
		return $this->SammenSpil;
	}
	/**
	 * Set SammenSpil value
	 * @param string $_sammenSpil the SammenSpil
	 * @return string
	 */
	public function setSammenSpil($_sammenSpil)
	{
		return ($this->SammenSpil = $_sammenSpil);
	}
	/**
	 * Get Beskrivelse value
	 * @return string|null
	 */
	public function getBeskrivelse()
	{
		return $this->Beskrivelse;
	}
	/**
	 * Set Beskrivelse value
	 * @param string $_beskrivelse the Beskrivelse
	 * @return string
	 */
	public function setBeskrivelse($_beskrivelse)
	{
		return ($this->Beskrivelse = $_beskrivelse);
	}
	/**
	 * Get UnderKategoriList value
	 * @return SpeedwareStructArrayOfUnderKategori|null
	 */
	public function getUnderKategoriList()
	{
		return $this->UnderKategoriList;
	}
	/**
	 * Set UnderKategoriList value
	 * @param SpeedwareStructArrayOfUnderKategori $_underKategoriList the UnderKategoriList
	 * @return SpeedwareStructArrayOfUnderKategori
	 */
	public function setUnderKategoriList($_underKategoriList)
	{
		return ($this->UnderKategoriList = $_underKategoriList);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructSammenspil
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