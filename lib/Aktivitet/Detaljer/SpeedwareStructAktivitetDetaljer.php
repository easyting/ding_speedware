<?php
/**
 * File for class SpeedwareStructAktivitetDetaljer
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructAktivitetDetaljer originally named AktivitetDetaljer
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructAktivitetDetaljer extends SpeedwareWsdlClass
{
	/**
	 * The AktivitetID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $AktivitetID;
	/**
	 * The Dato
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var dateTime
	 */
	public $Dato;
	/**
	 * The Starttid
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var dateTime
	 */
	public $Starttid;
	/**
	 * The Sluttid
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var dateTime
	 */
	public $Sluttid;
	/**
	 * The SkoleID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $SkoleID;
	/**
	 * The LokaleID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $LokaleID;
	/**
	 * The Beskrivelse
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Beskrivelse;
	/**
	 * The Lokale
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Lokale;
	/**
	 * The Skole
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Skole;
	/**
	 * The Ansvarlig
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Ansvarlig;
	/**
	 * Constructor method for AktivitetDetaljer
	 * @see parent::__construct()
	 * @param int $_aktivitetID
	 * @param dateTime $_dato
	 * @param dateTime $_starttid
	 * @param dateTime $_sluttid
	 * @param int $_skoleID
	 * @param int $_lokaleID
	 * @param string $_beskrivelse
	 * @param string $_lokale
	 * @param string $_skole
	 * @param string $_ansvarlig
	 * @return SpeedwareStructAktivitetDetaljer
	 */
	public function __construct($_aktivitetID,$_dato,$_starttid,$_sluttid,$_skoleID,$_lokaleID,$_beskrivelse = NULL,$_lokale = NULL,$_skole = NULL,$_ansvarlig = NULL)
	{
		parent::__construct(array('AktivitetID'=>$_aktivitetID,'Dato'=>$_dato,'Starttid'=>$_starttid,'Sluttid'=>$_sluttid,'SkoleID'=>$_skoleID,'LokaleID'=>$_lokaleID,'Beskrivelse'=>$_beskrivelse,'Lokale'=>$_lokale,'Skole'=>$_skole,'Ansvarlig'=>$_ansvarlig));
	}
	/**
	 * Get AktivitetID value
	 * @return int
	 */
	public function getAktivitetID()
	{
		return $this->AktivitetID;
	}
	/**
	 * Set AktivitetID value
	 * @param int $_aktivitetID the AktivitetID
	 * @return int
	 */
	public function setAktivitetID($_aktivitetID)
	{
		return ($this->AktivitetID = $_aktivitetID);
	}
	/**
	 * Get Dato value
	 * @return dateTime
	 */
	public function getDato()
	{
		return $this->Dato;
	}
	/**
	 * Set Dato value
	 * @param dateTime $_dato the Dato
	 * @return dateTime
	 */
	public function setDato($_dato)
	{
		return ($this->Dato = $_dato);
	}
	/**
	 * Get Starttid value
	 * @return dateTime
	 */
	public function getStarttid()
	{
		return $this->Starttid;
	}
	/**
	 * Set Starttid value
	 * @param dateTime $_starttid the Starttid
	 * @return dateTime
	 */
	public function setStarttid($_starttid)
	{
		return ($this->Starttid = $_starttid);
	}
	/**
	 * Get Sluttid value
	 * @return dateTime
	 */
	public function getSluttid()
	{
		return $this->Sluttid;
	}
	/**
	 * Set Sluttid value
	 * @param dateTime $_sluttid the Sluttid
	 * @return dateTime
	 */
	public function setSluttid($_sluttid)
	{
		return ($this->Sluttid = $_sluttid);
	}
	/**
	 * Get SkoleID value
	 * @return int
	 */
	public function getSkoleID()
	{
		return $this->SkoleID;
	}
	/**
	 * Set SkoleID value
	 * @param int $_skoleID the SkoleID
	 * @return int
	 */
	public function setSkoleID($_skoleID)
	{
		return ($this->SkoleID = $_skoleID);
	}
	/**
	 * Get LokaleID value
	 * @return int
	 */
	public function getLokaleID()
	{
		return $this->LokaleID;
	}
	/**
	 * Set LokaleID value
	 * @param int $_lokaleID the LokaleID
	 * @return int
	 */
	public function setLokaleID($_lokaleID)
	{
		return ($this->LokaleID = $_lokaleID);
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
	 * Get Lokale value
	 * @return string|null
	 */
	public function getLokale()
	{
		return $this->Lokale;
	}
	/**
	 * Set Lokale value
	 * @param string $_lokale the Lokale
	 * @return string
	 */
	public function setLokale($_lokale)
	{
		return ($this->Lokale = $_lokale);
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
	 * Get Ansvarlig value
	 * @return string|null
	 */
	public function getAnsvarlig()
	{
		return $this->Ansvarlig;
	}
	/**
	 * Set Ansvarlig value
	 * @param string $_ansvarlig the Ansvarlig
	 * @return string
	 */
	public function setAnsvarlig($_ansvarlig)
	{
		return ($this->Ansvarlig = $_ansvarlig);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructAktivitetDetaljer
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