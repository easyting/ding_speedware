<?php
/**
 * File for class SpeedwareStructKoncert
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructKoncert originally named Koncert
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructKoncert extends SpeedwareWsdlClass
{
	/**
	 * The KoncertID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $KoncertID;
	/**
	 * The Dato
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var dateTime
	 */
	public $Dato;
	/**
	 * The Beskrivelse
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Beskrivelse;
	/**
	 * Constructor method for Koncert
	 * @see parent::__construct()
	 * @param int $_koncertID
	 * @param dateTime $_dato
	 * @param string $_beskrivelse
	 * @return SpeedwareStructKoncert
	 */
	public function __construct($_koncertID,$_dato,$_beskrivelse = NULL)
	{
		parent::__construct(array('KoncertID'=>$_koncertID,'Dato'=>$_dato,'Beskrivelse'=>$_beskrivelse));
	}
	/**
	 * Get KoncertID value
	 * @return int
	 */
	public function getKoncertID()
	{
		return $this->KoncertID;
	}
	/**
	 * Set KoncertID value
	 * @param int $_koncertID the KoncertID
	 * @return int
	 */
	public function setKoncertID($_koncertID)
	{
		return ($this->KoncertID = $_koncertID);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructKoncert
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