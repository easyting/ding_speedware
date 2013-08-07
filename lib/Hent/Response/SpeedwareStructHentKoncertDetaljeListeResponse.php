<?php
/**
 * File for class SpeedwareStructHentKoncertDetaljeListeResponse
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructHentKoncertDetaljeListeResponse originally named HentKoncertDetaljeListeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructHentKoncertDetaljeListeResponse extends SpeedwareWsdlClass
{
	/**
	 * The HentKoncertDetaljeListeResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfKoncertDetaljer
	 */
	public $HentKoncertDetaljeListeResult;
	/**
	 * Constructor method for HentKoncertDetaljeListeResponse
	 * @see parent::__construct()
	 * @param SpeedwareStructArrayOfKoncertDetaljer $_hentKoncertDetaljeListeResult
	 * @return SpeedwareStructHentKoncertDetaljeListeResponse
	 */
	public function __construct($_hentKoncertDetaljeListeResult = NULL)
	{
		parent::__construct(array('HentKoncertDetaljeListeResult'=>($_hentKoncertDetaljeListeResult instanceof SpeedwareStructArrayOfKoncertDetaljer)?$_hentKoncertDetaljeListeResult:new SpeedwareStructArrayOfKoncertDetaljer($_hentKoncertDetaljeListeResult)));
	}
	/**
	 * Get HentKoncertDetaljeListeResult value
	 * @return SpeedwareStructArrayOfKoncertDetaljer|null
	 */
	public function getHentKoncertDetaljeListeResult()
	{
		return $this->HentKoncertDetaljeListeResult;
	}
	/**
	 * Set HentKoncertDetaljeListeResult value
	 * @param SpeedwareStructArrayOfKoncertDetaljer $_hentKoncertDetaljeListeResult the HentKoncertDetaljeListeResult
	 * @return SpeedwareStructArrayOfKoncertDetaljer
	 */
	public function setHentKoncertDetaljeListeResult($_hentKoncertDetaljeListeResult)
	{
		return ($this->HentKoncertDetaljeListeResult = $_hentKoncertDetaljeListeResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructHentKoncertDetaljeListeResponse
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