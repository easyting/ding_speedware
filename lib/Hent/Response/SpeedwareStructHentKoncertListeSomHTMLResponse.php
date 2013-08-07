<?php
/**
 * File for class SpeedwareStructHentKoncertListeSomHTMLResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentKoncertListeSomHTMLResponse originally named HentKoncertListeSomHTMLResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentKoncertListeSomHTMLResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentKoncertListeSomHTMLResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $HentKoncertListeSomHTMLResult;
	/**
	 * Constructor method for HentKoncertListeSomHTMLResponse
	 * @see parent::__construct()
	 * @param string $_hentKoncertListeSomHTMLResult
	 * @return SpeedwareStructHentKoncertListeSomHTMLResponse
	 */
	public function __construct($_hentKoncertListeSomHTMLResult = NULL)
	{
		parent::__construct(array('HentKoncertListeSomHTMLResult'=>$_hentKoncertListeSomHTMLResult));
	}
	/**
	 * Get HentKoncertListeSomHTMLResult value
	 * @return string|null
	 */
	public function getHentKoncertListeSomHTMLResult()
	{
		return $this->HentKoncertListeSomHTMLResult;
	}
	/**
	 * Set HentKoncertListeSomHTMLResult value
	 * @param string $_hentKoncertListeSomHTMLResult the HentKoncertListeSomHTMLResult
	 * @return string
	 */
	public function setHentKoncertListeSomHTMLResult($_hentKoncertListeSomHTMLResult)
	{
		return ($this->HentKoncertListeSomHTMLResult = $_hentKoncertListeSomHTMLResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentKoncertListeSomHTMLResponse
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