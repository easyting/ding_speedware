<?php
/**
 * File for class SpeedwareStructHentSammenspilDetaljeResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentSammenspilDetaljeResponse originally named HentSammenspilDetaljeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentSammenspilDetaljeResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentSammenspilDetaljeResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var SpeedwareStructSammenspil
	 */
	public $HentSammenspilDetaljeResult;
	/**
	 * Constructor method for HentSammenspilDetaljeResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructSammenspil $_hentSammenspilDetaljeResult
	 * @return SpeedwareStructHentSammenspilDetaljeResponse
	 */
	public function __construct($_hentSammenspilDetaljeResult)
	{
		parent::__construct(array('HentSammenspilDetaljeResult'=>$_hentSammenspilDetaljeResult));
	}
	/**
	 * Get HentSammenspilDetaljeResult value
	 * @return SpeedwareStructSammenspil
	 */
	public function getHentSammenspilDetaljeResult()
	{
		return $this->HentSammenspilDetaljeResult;
	}
	/**
	 * Set HentSammenspilDetaljeResult value
	 * @param SpeedwareStructSammenspil $_hentSammenspilDetaljeResult the HentSammenspilDetaljeResult
	 * @return SpeedwareStructSammenspil
	 */
	public function setHentSammenspilDetaljeResult($_hentSammenspilDetaljeResult)
	{
		return ($this->HentSammenspilDetaljeResult = $_hentSammenspilDetaljeResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentSammenspilDetaljeResponse
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