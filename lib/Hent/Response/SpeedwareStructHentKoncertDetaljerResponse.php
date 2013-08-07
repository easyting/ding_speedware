<?php
/**
 * File for class SpeedwareStructHentKoncertDetaljerResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentKoncertDetaljerResponse originally named HentKoncertDetaljerResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentKoncertDetaljerResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentKoncertDetaljerResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var SpeedwareStructKoncertDetaljer
	 */
	public $HentKoncertDetaljerResult;
	/**
	 * Constructor method for HentKoncertDetaljerResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructKoncertDetaljer $_hentKoncertDetaljerResult
	 * @return SpeedwareStructHentKoncertDetaljerResponse
	 */
	public function __construct($_hentKoncertDetaljerResult)
	{
		parent::__construct(array('HentKoncertDetaljerResult'=>$_hentKoncertDetaljerResult));
	}
	/**
	 * Get HentKoncertDetaljerResult value
	 * @return SpeedwareStructKoncertDetaljer
	 */
	public function getHentKoncertDetaljerResult()
	{
		return $this->HentKoncertDetaljerResult;
	}
	/**
	 * Set HentKoncertDetaljerResult value
	 * @param SpeedwareStructKoncertDetaljer $_hentKoncertDetaljerResult the HentKoncertDetaljerResult
	 * @return SpeedwareStructKoncertDetaljer
	 */
	public function setHentKoncertDetaljerResult($_hentKoncertDetaljerResult)
	{
		return ($this->HentKoncertDetaljerResult = $_hentKoncertDetaljerResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentKoncertDetaljerResponse
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