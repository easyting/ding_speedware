<?php
/**
 * File for class SpeedwareStructUndervisningsTilbudUnderkategori
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructUndervisningsTilbudUnderkategori originally named UndervisningsTilbudUnderkategori
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructUndervisningsTilbudUnderkategori extends SpeedwareWsdlClass
{
	/**
	 * The RowError
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var boolean
	 */
	public $RowError;
	/**
	 * The RID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $RID;
	/**
	 * The UndervisningsTypeID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $UndervisningsTypeID;
	/**
	 * The Prioritet
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $Prioritet;
	/**
	 * The UndervisningsTilbudUnderkategoriID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $UndervisningsTilbudUnderkategoriID;
	/**
	 * The UndervisningsTilbudID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $UndervisningsTilbudID;
	/**
	 * The Rækkefølge
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $R__kkef__lge;
	/**
	 * The UndervisningsType
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $UndervisningsType;
	/**
	 * The Underkategori
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Underkategori;
	/**
	 * The Kommentar
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Kommentar;
	/**
	 * The UndervisningsTilbud
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $UndervisningsTilbud;
	/**
	 * Constructor method for UndervisningsTilbudUnderkategori
	 * @see parent::__construct()
	 * @param boolean $_rowError
	 * @param int $_rID
	 * @param int $_undervisningsTypeID
	 * @param int $_prioritet
	 * @param int $_undervisningsTilbudUnderkategoriID
	 * @param int $_undervisningsTilbudID
	 * @param int $_r__kkef__lge
	 * @param string $_undervisningsType
	 * @param string $_underkategori
	 * @param string $_kommentar
	 * @param string $_undervisningsTilbud
	 * @return SpeedwareStructUndervisningsTilbudUnderkategori
	 */
	public function __construct($_rowError,$_rID,$_undervisningsTypeID,$_prioritet,$_undervisningsTilbudUnderkategoriID,$_undervisningsTilbudID,$_r__kkef__lge,$_undervisningsType = NULL,$_underkategori = NULL,$_kommentar = NULL,$_undervisningsTilbud = NULL)
	{
		parent::__construct(array('RowError'=>$_rowError,'RID'=>$_rID,'UndervisningsTypeID'=>$_undervisningsTypeID,'Prioritet'=>$_prioritet,'UndervisningsTilbudUnderkategoriID'=>$_undervisningsTilbudUnderkategoriID,'UndervisningsTilbudID'=>$_undervisningsTilbudID,'R__kkef__lge'=>$_r__kkef__lge,'UndervisningsType'=>$_undervisningsType,'Underkategori'=>$_underkategori,'Kommentar'=>$_kommentar,'UndervisningsTilbud'=>$_undervisningsTilbud));
	}
	/**
	 * Get RowError value
	 * @return boolean
	 */
	public function getRowError()
	{
		return $this->RowError;
	}
	/**
	 * Set RowError value
	 * @param boolean $_rowError the RowError
	 * @return boolean
	 */
	public function setRowError($_rowError)
	{
		return ($this->RowError = $_rowError);
	}
	/**
	 * Get RID value
	 * @return int
	 */
	public function getRID()
	{
		return $this->RID;
	}
	/**
	 * Set RID value
	 * @param int $_rID the RID
	 * @return int
	 */
	public function setRID($_rID)
	{
		return ($this->RID = $_rID);
	}
	/**
	 * Get UndervisningsTypeID value
	 * @return int
	 */
	public function getUndervisningsTypeID()
	{
		return $this->UndervisningsTypeID;
	}
	/**
	 * Set UndervisningsTypeID value
	 * @param int $_undervisningsTypeID the UndervisningsTypeID
	 * @return int
	 */
	public function setUndervisningsTypeID($_undervisningsTypeID)
	{
		return ($this->UndervisningsTypeID = $_undervisningsTypeID);
	}
	/**
	 * Get Prioritet value
	 * @return int
	 */
	public function getPrioritet()
	{
		return $this->Prioritet;
	}
	/**
	 * Set Prioritet value
	 * @param int $_prioritet the Prioritet
	 * @return int
	 */
	public function setPrioritet($_prioritet)
	{
		return ($this->Prioritet = $_prioritet);
	}
	/**
	 * Get UndervisningsTilbudUnderkategoriID value
	 * @return int
	 */
	public function getUndervisningsTilbudUnderkategoriID()
	{
		return $this->UndervisningsTilbudUnderkategoriID;
	}
	/**
	 * Set UndervisningsTilbudUnderkategoriID value
	 * @param int $_undervisningsTilbudUnderkategoriID the UndervisningsTilbudUnderkategoriID
	 * @return int
	 */
	public function setUndervisningsTilbudUnderkategoriID($_undervisningsTilbudUnderkategoriID)
	{
		return ($this->UndervisningsTilbudUnderkategoriID = $_undervisningsTilbudUnderkategoriID);
	}
	/**
	 * Get UndervisningsTilbudID value
	 * @return int
	 */
	public function getUndervisningsTilbudID()
	{
		return $this->UndervisningsTilbudID;
	}
	/**
	 * Set UndervisningsTilbudID value
	 * @param int $_undervisningsTilbudID the UndervisningsTilbudID
	 * @return int
	 */
	public function setUndervisningsTilbudID($_undervisningsTilbudID)
	{
		return ($this->UndervisningsTilbudID = $_undervisningsTilbudID);
	}
	/**
	 * Get Rækkefølge value
	 * @return int
	 */
	public function getR__kkef__lge()
	{
		return $this->{'Rækkefølge'};
	}
	/**
	 * Set Rækkefølge value
	 * @param int $_r__kkef__lge the Rækkefølge
	 * @return int
	 */
	public function setR__kkef__lge($_r__kkef__lge)
	{
		return ($this->R__kkef__lge = $this->{'Rækkefølge'} = $_r__kkef__lge);
	}
	/**
	 * Get UndervisningsType value
	 * @return string|null
	 */
	public function getUndervisningsType()
	{
		return $this->UndervisningsType;
	}
	/**
	 * Set UndervisningsType value
	 * @param string $_undervisningsType the UndervisningsType
	 * @return string
	 */
	public function setUndervisningsType($_undervisningsType)
	{
		return ($this->UndervisningsType = $_undervisningsType);
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
	 * Get Kommentar value
	 * @return string|null
	 */
	public function getKommentar()
	{
		return $this->Kommentar;
	}
	/**
	 * Set Kommentar value
	 * @param string $_kommentar the Kommentar
	 * @return string
	 */
	public function setKommentar($_kommentar)
	{
		return ($this->Kommentar = $_kommentar);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructUndervisningsTilbudUnderkategori
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