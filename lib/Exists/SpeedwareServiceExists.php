<?php
/**
 * File for class SpeedwareServiceExists
 * @package Speedware
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareServiceExists originally named Exists
 * @package Speedware
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareServiceExists extends SpeedwareWsdlClass
{
	/**
	 * Method to call the operation originally named Exists
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructExists::getDay()
	 * @uses SpeedwareStructExists::getMonth()
	 * @uses SpeedwareStructExists::getYear()
	 * @uses SpeedwareStructExists::getGenre()
	 * @uses SpeedwareStructExists::getFirstName()
	 * @uses SpeedwareStructExists::getLastname()
	 * @uses SpeedwareStructExists::getAddress()
	 * @param SpeedwareStructExists $_speedwareStructExists
	 * @return SpeedwareStructExistsResponse
	 */
	public function Exists(SpeedwareStructExists $_speedwareStructExists)
	{
		try
		{
			$this->setResult(new SpeedwareStructExistsResponse(self::getSoapClient()->Exists(array('Day'=>$_speedwareStructExists->getDay(),'Month'=>$_speedwareStructExists->getMonth(),'Year'=>$_speedwareStructExists->getYear(),'Genre'=>$_speedwareStructExists->getGenre(),'FirstName'=>$_speedwareStructExists->getFirstName(),'Lastname'=>$_speedwareStructExists->getLastname(),'Address'=>$_speedwareStructExists->getAddress()))));
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
	 * @return SpeedwareStructExistsResponse
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