<?php
/**
 * File for class SpeedwareStructHentSammenspilListeResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentSammenspilListeResponse originally named HentSammenspilListeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentSammenspilListeResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentSammenspilListeResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfSammenspil
	 */
	public $HentSammenspilListeResult;
	/**
	 * Constructor method for HentSammenspilListeResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfSammenspil $_hentSammenspilListeResult
	 * @return SpeedwareStructHentSammenspilListeResponse
	 */
	public function __construct($_hentSammenspilListeResult = NULL)
	{
		parent::__construct(array('HentSammenspilListeResult'=>($_hentSammenspilListeResult instanceof SpeedwareStructArrayOfSammenspil)?$_hentSammenspilListeResult:new SpeedwareStructArrayOfSammenspil($_hentSammenspilListeResult)));
	}
	/**
	 * Get HentSammenspilListeResult value
	 * @return SpeedwareStructArrayOfSammenspil|null
	 */
	public function getHentSammenspilListeResult()
	{
		return $this->HentSammenspilListeResult;
	}
	/**
	 * Set HentSammenspilListeResult value
	 * @param SpeedwareStructArrayOfSammenspil $_hentSammenspilListeResult the HentSammenspilListeResult
	 * @return SpeedwareStructArrayOfSammenspil
	 */
	public function setHentSammenspilListeResult($_hentSammenspilListeResult)
	{
		return ($this->HentSammenspilListeResult = $_hentSammenspilListeResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentSammenspilListeResponse
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