<?php
/**
 * File for class SpeedwareStructUndervisningstilbud
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructUndervisningstilbud originally named Undervisningstilbud
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructUndervisningstilbud extends SpeedwareWsdlClass
{
	/**
	 * The UndervisningstilbudID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $UndervisningstilbudID;
	/**
	 * The KategoriID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $KategoriID;
	/**
	 * The UndervisningsTilbud
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $UndervisningsTilbud;
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
	 * Constructor method for Undervisningstilbud
	 * @see parent::__construct()
	 * @param int $_undervisningstilbudID
	 * @param int $_kategoriID
	 * @param string $_undervisningsTilbud
	 * @param string $_beskrivelse
	 * @param SpeedwareStructArrayOfUnderKategori $_underKategoriList
	 * @return SpeedwareStructUndervisningstilbud
	 */
	public function __construct($_undervisningstilbudID,$_kategoriID,$_undervisningsTilbud = NULL,$_beskrivelse = NULL,$_underKategoriList = NULL)
	{
		parent::__construct(array('UndervisningstilbudID'=>$_undervisningstilbudID,'KategoriID'=>$_kategoriID,'UndervisningsTilbud'=>$_undervisningsTilbud,'Beskrivelse'=>$_beskrivelse,'UnderKategoriList'=>($_underKategoriList instanceof SpeedwareStructArrayOfUnderKategori)?$_underKategoriList:new SpeedwareStructArrayOfUnderKategori($_underKategoriList)));
	}
	/**
	 * Get UndervisningstilbudID value
	 * @return int
	 */
	public function getUndervisningstilbudID()
	{
		return $this->UndervisningstilbudID;
	}
	/**
	 * Set UndervisningstilbudID value
	 * @param int $_undervisningstilbudID the UndervisningstilbudID
	 * @return int
	 */
	public function setUndervisningstilbudID($_undervisningstilbudID)
	{
		return ($this->UndervisningstilbudID = $_undervisningstilbudID);
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
	 * Get UndervisningsTilbud value
	 * @return string|null
	 */
	public function getUndervisningsTilbud()
	{
		return $this->UndervisningsTilbud;
	}
	/**
	 * Set UndervisningsTilbud value
	 * @param string $_undervisningsTilbud the UndervisningsTilbud
	 * @return string
	 */
	public function setUndervisningsTilbud($_undervisningsTilbud)
	{
		return ($this->UndervisningsTilbud = $_undervisningsTilbud);
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
	 * @return SpeedwareStructUndervisningstilbud
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