<?php
/**
 * File for class SpeedwareServiceHent
 * @package Speedware
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareServiceHent originally named Hent
 * @package Speedware
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareServiceHent extends SpeedwareWsdlClass
{
	/**
	 * Method to call the operation originally named HentLaererList
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentLaererList::getSkole()
	 * @param SpeedwareStructHentLaererList $_speedwareStructHentLaererList
	 * @return SpeedwareStructHentLaererListResponse
	 */
	public function HentLaererList(SpeedwareStructHentLaererList $_speedwareStructHentLaererList)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentLaererListResponse(self::getSoapClient()->HentLaererList(array('Skole'=>$_speedwareStructHentLaererList->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentSkoleList
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentSkoleList::getSkole()
	 * @param SpeedwareStructHentSkoleList $_speedwareStructHentSkoleList
	 * @return SpeedwareStructHentSkoleListResponse
	 */
	public function HentSkoleList(SpeedwareStructHentSkoleList $_speedwareStructHentSkoleList)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentSkoleListResponse(self::getSoapClient()->HentSkoleList(array('Skole'=>$_speedwareStructHentSkoleList->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentLokaleListe
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentLokaleListe::getSkoleID()
	 * @uses SpeedwareStructHentLokaleListe::getSkole()
	 * @param SpeedwareStructHentLokaleListe $_speedwareStructHentLokaleListe
	 * @return SpeedwareStructHentLokaleListeResponse
	 */
	public function HentLokaleListe(SpeedwareStructHentLokaleListe $_speedwareStructHentLokaleListe)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentLokaleListeResponse(self::getSoapClient()->HentLokaleListe(array('SkoleID'=>$_speedwareStructHentLokaleListe->getSkoleID(),'Skole'=>$_speedwareStructHentLokaleListe->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentKoncertListe
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentKoncertListe::getSkole()
	 * @param SpeedwareStructHentKoncertListe $_speedwareStructHentKoncertListe
	 * @return SpeedwareStructHentKoncertListeResponse
	 */
	public function HentKoncertListe(SpeedwareStructHentKoncertListe $_speedwareStructHentKoncertListe)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentKoncertListeResponse(self::getSoapClient()->HentKoncertListe(array('Skole'=>$_speedwareStructHentKoncertListe->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentKoncertDetaljeListe
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentKoncertDetaljeListe::getSkole()
	 * @param SpeedwareStructHentKoncertDetaljeListe $_speedwareStructHentKoncertDetaljeListe
	 * @return SpeedwareStructHentKoncertDetaljeListeResponse
	 */
	public function HentKoncertDetaljeListe(SpeedwareStructHentKoncertDetaljeListe $_speedwareStructHentKoncertDetaljeListe)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentKoncertDetaljeListeResponse(self::getSoapClient()->HentKoncertDetaljeListe(array('Skole'=>$_speedwareStructHentKoncertDetaljeListe->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentAktivitetListe
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentAktivitetListe::getSkole()
	 * @param SpeedwareStructHentAktivitetListe $_speedwareStructHentAktivitetListe
	 * @return SpeedwareStructHentAktivitetListeResponse
	 */
	public function HentAktivitetListe(SpeedwareStructHentAktivitetListe $_speedwareStructHentAktivitetListe)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentAktivitetListeResponse(self::getSoapClient()->HentAktivitetListe(array('Skole'=>$_speedwareStructHentAktivitetListe->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentAktivitetDetaljeListe
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentAktivitetDetaljeListe::getSkole()
	 * @param SpeedwareStructHentAktivitetDetaljeListe $_speedwareStructHentAktivitetDetaljeListe
	 * @return SpeedwareStructHentAktivitetDetaljeListeResponse
	 */
	public function HentAktivitetDetaljeListe(SpeedwareStructHentAktivitetDetaljeListe $_speedwareStructHentAktivitetDetaljeListe)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentAktivitetDetaljeListeResponse(self::getSoapClient()->HentAktivitetDetaljeListe(array('Skole'=>$_speedwareStructHentAktivitetDetaljeListe->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentKoncertDetaljer
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentKoncertDetaljer::getKoncertID()
	 * @uses SpeedwareStructHentKoncertDetaljer::getSkole()
	 * @param SpeedwareStructHentKoncertDetaljer $_speedwareStructHentKoncertDetaljer
	 * @return SpeedwareStructHentKoncertDetaljerResponse
	 */
	public function HentKoncertDetaljer(SpeedwareStructHentKoncertDetaljer $_speedwareStructHentKoncertDetaljer)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentKoncertDetaljerResponse(self::getSoapClient()->HentKoncertDetaljer(array('KoncertID'=>$_speedwareStructHentKoncertDetaljer->getKoncertID(),'Skole'=>$_speedwareStructHentKoncertDetaljer->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentAktivitetDetaljer
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentAktivitetDetaljer::getAktivitetID()
	 * @uses SpeedwareStructHentAktivitetDetaljer::getSkole()
	 * @param SpeedwareStructHentAktivitetDetaljer $_speedwareStructHentAktivitetDetaljer
	 * @return SpeedwareStructHentAktivitetDetaljerResponse
	 */
	public function HentAktivitetDetaljer(SpeedwareStructHentAktivitetDetaljer $_speedwareStructHentAktivitetDetaljer)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentAktivitetDetaljerResponse(self::getSoapClient()->HentAktivitetDetaljer(array('AktivitetID'=>$_speedwareStructHentAktivitetDetaljer->getAktivitetID(),'Skole'=>$_speedwareStructHentAktivitetDetaljer->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentKoncertListeSomHTML
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentKoncertListeSomHTML::getSkole()
	 * @param SpeedwareStructHentKoncertListeSomHTML $_speedwareStructHentKoncertListeSomHTML
	 * @return SpeedwareStructHentKoncertListeSomHTMLResponse
	 */
	public function HentKoncertListeSomHTML(SpeedwareStructHentKoncertListeSomHTML $_speedwareStructHentKoncertListeSomHTML)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentKoncertListeSomHTMLResponse(self::getSoapClient()->HentKoncertListeSomHTML(array('Skole'=>$_speedwareStructHentKoncertListeSomHTML->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentAktivitetsListeSomHTML
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentAktivitetsListeSomHTML::getSkole()
	 * @param SpeedwareStructHentAktivitetsListeSomHTML $_speedwareStructHentAktivitetsListeSomHTML
	 * @return SpeedwareStructHentAktivitetsListeSomHTMLResponse
	 */
	public function HentAktivitetsListeSomHTML(SpeedwareStructHentAktivitetsListeSomHTML $_speedwareStructHentAktivitetsListeSomHTML)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentAktivitetsListeSomHTMLResponse(self::getSoapClient()->HentAktivitetsListeSomHTML(array('Skole'=>$_speedwareStructHentAktivitetsListeSomHTML->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentUndervisningstilbudListe
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentUndervisningstilbudListe::getSkole()
	 * @param SpeedwareStructHentUndervisningstilbudListe $_speedwareStructHentUndervisningstilbudListe
	 * @return SpeedwareStructHentUndervisningstilbudListeResponse
	 */
	public function HentUndervisningstilbudListe(SpeedwareStructHentUndervisningstilbudListe $_speedwareStructHentUndervisningstilbudListe)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentUndervisningstilbudListeResponse(self::getSoapClient()->HentUndervisningstilbudListe(array('Skole'=>$_speedwareStructHentUndervisningstilbudListe->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentUndervisningstilbudDetalje
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentUndervisningstilbudDetalje::getUndervisningstilbudID()
	 * @uses SpeedwareStructHentUndervisningstilbudDetalje::getSkole()
	 * @param SpeedwareStructHentUndervisningstilbudDetalje $_speedwareStructHentUndervisningstilbudDetalje
	 * @return SpeedwareStructHentUndervisningstilbudDetaljeResponse
	 */
	public function HentUndervisningstilbudDetalje(SpeedwareStructHentUndervisningstilbudDetalje $_speedwareStructHentUndervisningstilbudDetalje)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentUndervisningstilbudDetaljeResponse(self::getSoapClient()->HentUndervisningstilbudDetalje(array('UndervisningstilbudID'=>$_speedwareStructHentUndervisningstilbudDetalje->getUndervisningstilbudID(),'Skole'=>$_speedwareStructHentUndervisningstilbudDetalje->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentSammenspilListe
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentSammenspilListe::getSkole()
	 * @param SpeedwareStructHentSammenspilListe $_speedwareStructHentSammenspilListe
	 * @return SpeedwareStructHentSammenspilListeResponse
	 */
	public function HentSammenspilListe(SpeedwareStructHentSammenspilListe $_speedwareStructHentSammenspilListe)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentSammenspilListeResponse(self::getSoapClient()->HentSammenspilListe(array('Skole'=>$_speedwareStructHentSammenspilListe->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named HentSammenspilDetalje
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructHentSammenspilDetalje::getSammenspilID()
	 * @uses SpeedwareStructHentSammenspilDetalje::getSkole()
	 * @param SpeedwareStructHentSammenspilDetalje $_speedwareStructHentSammenspilDetalje
	 * @return SpeedwareStructHentSammenspilDetaljeResponse
	 */
	public function HentSammenspilDetalje(SpeedwareStructHentSammenspilDetalje $_speedwareStructHentSammenspilDetalje)
	{
		try
		{
			$this->setResult(new SpeedwareStructHentSammenspilDetaljeResponse(self::getSoapClient()->HentSammenspilDetalje(array('SammenspilID'=>$_speedwareStructHentSammenspilDetalje->getSammenspilID(),'Skole'=>$_speedwareStructHentSammenspilDetalje->getSkole()))));
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
	 * @return SpeedwareStructHentAktivitetDetaljeListeResponse|SpeedwareStructHentAktivitetDetaljerResponse|SpeedwareStructHentAktivitetListeResponse|SpeedwareStructHentAktivitetsListeSomHTMLResponse|SpeedwareStructHentKoncertDetaljeListeResponse|SpeedwareStructHentKoncertDetaljerResponse|SpeedwareStructHentKoncertListeResponse|SpeedwareStructHentKoncertListeSomHTMLResponse|SpeedwareStructHentLaererListResponse|SpeedwareStructHentLokaleListeResponse|SpeedwareStructHentSammenspilDetaljeResponse|SpeedwareStructHentSammenspilListeResponse|SpeedwareStructHentSkoleListResponse|SpeedwareStructHentUndervisningstilbudDetaljeResponse|SpeedwareStructHentUndervisningstilbudListeResponse
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