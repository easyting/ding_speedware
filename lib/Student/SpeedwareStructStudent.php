<?php
/**
 * File for class SpeedwareStructStudent
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructStudent originally named Student
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructStudent extends SpeedwareWsdlClass
{
	/**
	 * The Navn
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Navn;
	/**
	 * The Adresse
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Adresse;
	/**
	 * The Tlf
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Tlf;
	/**
	 * The Mobil
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Mobil;
	/**
	 * The Email
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Email;
	/**
	 * The Skole
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Skole;
	/**
	 * The Fag
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Fag;
	/**
	 * Constructor method for Student
	 * @see parent::__construct()
	 * @param string $_navn
	 * @param string $_adresse
	 * @param string $_tlf
	 * @param string $_mobil
	 * @param string $_email
	 * @param string $_skole
	 * @param string $_fag
	 * @return SpeedwareStructStudent
	 */
	public function __construct($_navn = NULL,$_adresse = NULL,$_tlf = NULL,$_mobil = NULL,$_email = NULL,$_skole = NULL,$_fag = NULL)
	{
		parent::__construct(array('Navn'=>$_navn,'Adresse'=>$_adresse,'Tlf'=>$_tlf,'Mobil'=>$_mobil,'Email'=>$_email,'Skole'=>$_skole,'Fag'=>$_fag));
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
	 * Get Adresse value
	 * @return string|null
	 */
	public function getAdresse()
	{
		return $this->Adresse;
	}
	/**
	 * Set Adresse value
	 * @param string $_adresse the Adresse
	 * @return string
	 */
	public function setAdresse($_adresse)
	{
		return ($this->Adresse = $_adresse);
	}
	/**
	 * Get Tlf value
	 * @return string|null
	 */
	public function getTlf()
	{
		return $this->Tlf;
	}
	/**
	 * Set Tlf value
	 * @param string $_tlf the Tlf
	 * @return string
	 */
	public function setTlf($_tlf)
	{
		return ($this->Tlf = $_tlf);
	}
	/**
	 * Get Mobil value
	 * @return string|null
	 */
	public function getMobil()
	{
		return $this->Mobil;
	}
	/**
	 * Set Mobil value
	 * @param string $_mobil the Mobil
	 * @return string
	 */
	public function setMobil($_mobil)
	{
		return ($this->Mobil = $_mobil);
	}
	/**
	 * Get Email value
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set Email value
	 * @param string $_email the Email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->Email = $_email);
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
	 * Get Fag value
	 * @return string|null
	 */
	public function getFag()
	{
		return $this->Fag;
	}
	/**
	 * Set Fag value
	 * @param string $_fag the Fag
	 * @return string
	 */
	public function setFag($_fag)
	{
		return ($this->Fag = $_fag);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructStudent
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