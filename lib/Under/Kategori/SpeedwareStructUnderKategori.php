<?php
/**
 * File for class SpeedwareStructUnderKategori
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructUnderKategori originally named UnderKategori
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructUnderKategori extends SpeedwareWsdlClass
{
	/**
	 * The UnderKategoriID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $UnderKategoriID;
	/**
	 * The Underkategori
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Underkategori;
	/**
	 * Constructor method for UnderKategori
	 * @see parent::__construct()
	 * @param int $_underKategoriID
	 * @param string $_underkategori
	 * @return SpeedwareStructUnderKategori
	 */
	public function __construct($_underKategoriID,$_underkategori = NULL)
	{
		parent::__construct(array('UnderKategoriID'=>$_underKategoriID,'Underkategori'=>$_underkategori));
	}
	/**
	 * Get UnderKategoriID value
	 * @return int
	 */
	public function getUnderKategoriID()
	{
		return $this->UnderKategoriID;
	}
	/**
	 * Set UnderKategoriID value
	 * @param int $_underKategoriID the UnderKategoriID
	 * @return int
	 */
	public function setUnderKategoriID($_underKategoriID)
	{
		return ($this->UnderKategoriID = $_underKategoriID);
	}
	/**
	 * Get Underkategori value
	 * @return string|null
	 */
	public function getUnderkategori()
	{
		return $this->Underkategori;
	}
	/**
	 * Set Underkategori value
	 * @param string $_underkategori the Underkategori
	 * @return string
	 */
	public function setUnderkategori($_underkategori)
	{
		return ($this->Underkategori = $_underkategori);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructUnderKategori
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