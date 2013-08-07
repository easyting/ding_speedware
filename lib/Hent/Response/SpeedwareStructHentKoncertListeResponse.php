<?php
/**
 * File for class SpeedwareStructHentKoncertListeResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentKoncertListeResponse originally named HentKoncertListeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentKoncertListeResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentKoncertListeResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfKoncert
	 */
	public $HentKoncertListeResult;
	/**
	 * Constructor method for HentKoncertListeResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfKoncert $_hentKoncertListeResult
	 * @return SpeedwareStructHentKoncertListeResponse
	 */
	public function __construct($_hentKoncertListeResult = NULL)
	{
		parent::__construct(array('HentKoncertListeResult'=>($_hentKoncertListeResult instanceof SpeedwareStructArrayOfKoncert)?$_hentKoncertListeResult:new SpeedwareStructArrayOfKoncert($_hentKoncertListeResult)));
	}
	/**
	 * Get HentKoncertListeResult value
	 * @return SpeedwareStructArrayOfKoncert|null
	 */
	public function getHentKoncertListeResult()
	{
		return $this->HentKoncertListeResult;
	}
	/**
	 * Set HentKoncertListeResult value
	 * @param SpeedwareStructArrayOfKoncert $_hentKoncertListeResult the HentKoncertListeResult
	 * @return SpeedwareStructArrayOfKoncert
	 */
	public function setHentKoncertListeResult($_hentKoncertListeResult)
	{
		return ($this->HentKoncertListeResult = $_hentKoncertListeResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentKoncertListeResponse
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