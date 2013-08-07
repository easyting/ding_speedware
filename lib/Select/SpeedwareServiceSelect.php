<?php
/**
 * File for class SpeedwareServiceSelect
 * @package Speedware
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareServiceSelect originally named Select
 * @package Speedware
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareServiceSelect extends SpeedwareWsdlClass
{
	/**
	 * Method to call the operation originally named SelectSubCat
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructSelectSubCat::getUVTID()
	 * @uses SpeedwareStructSelectSubCat::getSubCatID()
	 * @uses SpeedwareStructSelectSubCat::getSchool()
	 * @param SpeedwareStructSelectSubCat $_speedwareStructSelectSubCat
	 * @return SpeedwareStructSelectSubCatResponse
	 */
	public function SelectSubCat(SpeedwareStructSelectSubCat $_speedwareStructSelectSubCat)
	{
		try
		{
			$this->setResult(new SpeedwareStructSelectSubCatResponse(self::getSoapClient()->SelectSubCat(array('UVTID'=>$_speedwareStructSelectSubCat->getUVTID(),'SubCatID'=>$_speedwareStructSelectSubCat->getSubCatID(),'School'=>$_speedwareStructSelectSubCat->getSchool()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see SpeedwareWsdlClass::getResult()
	 * @return SpeedwareStructSelectSubCatResponse
	 */
	public function getResult()
	{
		return parent::getResult();
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