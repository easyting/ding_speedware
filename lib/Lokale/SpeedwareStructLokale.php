<?php
/**
 * File for class SpeedwareStructLokale
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructLokale originally named Lokale
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructLokale extends SpeedwareWsdlClass
{
	/**
	 * The LokaleID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $LokaleID;
	/**
	 * The LokaleNavn
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $LokaleNavn;
	/**
	 * Constructor method for Lokale
	 * @see parent::__construct()
	 * @param int $_lokaleID
	 * @param string $_lokaleNavn
	 * @return SpeedwareStructLokale
	 */
	public function __construct($_lokaleID,$_lokaleNavn = NULL)
	{
		parent::__construct(array('LokaleID'=>$_lokaleID,'LokaleNavn'=>$_lokaleNavn));
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
	 * Get LokaleNavn value
	 * @return string|null
	 */
	public function getLokaleNavn()
	{
		return $this->LokaleNavn;
	}
	/**
	 * Set LokaleNavn value
	 * @param string $_lokaleNavn the LokaleNavn
	 * @return string
	 */
	public function setLokaleNavn($_lokaleNavn)
	{
		return ($this->LokaleNavn = $_lokaleNavn);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructLokale
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