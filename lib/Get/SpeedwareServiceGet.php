<?php
/**
 * File for class SpeedwareServiceGet
 * @package Speedware
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareServiceGet originally named Get
 * @package Speedware
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareServiceGet extends SpeedwareWsdlClass
{
	/**
	 * Method to call the operation originally named GetTreeList
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetTreeList::getSchool()
	 * @param SpeedwareStructGetTreeList $_speedwareStructGetTreeList
	 * @return SpeedwareStructGetTreeListResponse
	 */
	public function GetTreeList(SpeedwareStructGetTreeList $_speedwareStructGetTreeList)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetTreeListResponse(self::getSoapClient()->GetTreeList(array('School'=>$_speedwareStructGetTreeList->getSchool()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetTreeListByTreeTypeID
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetTreeListByTreeTypeID::getTreeTypeID()
	 * @uses SpeedwareStructGetTreeListByTreeTypeID::getSchool()
	 * @param SpeedwareStructGetTreeListByTreeTypeID $_speedwareStructGetTreeListByTreeTypeID
	 * @return SpeedwareStructGetTreeListByTreeTypeIDResponse
	 */
	public function GetTreeListByTreeTypeID(SpeedwareStructGetTreeListByTreeTypeID $_speedwareStructGetTreeListByTreeTypeID)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetTreeListByTreeTypeIDResponse(self::getSoapClient()->GetTreeListByTreeTypeID(array('TreeTypeID'=>$_speedwareStructGetTreeListByTreeTypeID->getTreeTypeID(),'School'=>$_speedwareStructGetTreeListByTreeTypeID->getSchool()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetUndervisningstilbudByTreeID
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetUndervisningstilbudByTreeID::getTreeID()
	 * @uses SpeedwareStructGetUndervisningstilbudByTreeID::getSchool()
	 * @param SpeedwareStructGetUndervisningstilbudByTreeID $_speedwareStructGetUndervisningstilbudByTreeID
	 * @return SpeedwareStructGetUndervisningstilbudByTreeIDResponse
	 */
	public function GetUndervisningstilbudByTreeID(SpeedwareStructGetUndervisningstilbudByTreeID $_speedwareStructGetUndervisningstilbudByTreeID)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetUndervisningstilbudByTreeIDResponse(self::getSoapClient()->GetUndervisningstilbudByTreeID(array('TreeID'=>$_speedwareStructGetUndervisningstilbudByTreeID->getTreeID(),'School'=>$_speedwareStructGetUndervisningstilbudByTreeID->getSchool()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetUndervisningsTilbudUnderkategoriByUTID
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTID::getUndervisningsTilbudID()
	 * @param SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTID $_speedwareStructGetUndervisningsTilbudUnderkategoriByUTID
	 * @return SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTIDResponse
	 */
	public function GetUndervisningsTilbudUnderkategoriByUTID(SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTID $_speedwareStructGetUndervisningsTilbudUnderkategoriByUTID)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTIDResponse(self::getSoapClient()->GetUndervisningsTilbudUnderkategoriByUTID(array('UndervisningsTilbudID'=>$_speedwareStructGetUndervisningsTilbudUnderkategoriByUTID->getUndervisningsTilbudID()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetLocations
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetLocations::getSchool()
	 * @param SpeedwareStructGetLocations $_speedwareStructGetLocations
	 * @return SpeedwareStructGetLocationsResponse
	 */
	public function GetLocations(SpeedwareStructGetLocations $_speedwareStructGetLocations)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetLocationsResponse(self::getSoapClient()->GetLocations(array('School'=>$_speedwareStructGetLocations->getSchool()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetRooms
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetRooms::getSchool()
	 * @param SpeedwareStructGetRooms $_speedwareStructGetRooms
	 * @return SpeedwareStructGetRoomsResponse
	 */
	public function GetRooms(SpeedwareStructGetRooms $_speedwareStructGetRooms)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetRoomsResponse(self::getSoapClient()->GetRooms(array('School'=>$_speedwareStructGetRooms->getSchool()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetStudentListByTeacher
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetStudentListByTeacher::getSchool()
	 * @uses SpeedwareStructGetStudentListByTeacher::getUsername()
	 * @uses SpeedwareStructGetStudentListByTeacher::getPassword()
	 * @param SpeedwareStructGetStudentListByTeacher $_speedwareStructGetStudentListByTeacher
	 * @return SpeedwareStructGetStudentListByTeacherResponse
	 */
	public function GetStudentListByTeacher(SpeedwareStructGetStudentListByTeacher $_speedwareStructGetStudentListByTeacher)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetStudentListByTeacherResponse(self::getSoapClient()->GetStudentListByTeacher(array('School'=>$_speedwareStructGetStudentListByTeacher->getSchool(),'Username'=>$_speedwareStructGetStudentListByTeacher->getUsername(),'Password'=>$_speedwareStructGetStudentListByTeacher->getPassword()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetSchoolList
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @return SpeedwareStructGetSchoolListResponse
	 */
	public function GetSchoolList()
	{
		try
		{
			$this->setResult(new SpeedwareStructGetSchoolListResponse(self::getSoapClient()->GetSchoolList()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetBookingByTypeAndRoom
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetBookingByTypeAndRoom::getPublishingTypeID()
	 * @uses SpeedwareStructGetBookingByTypeAndRoom::getBookingTypeID()
	 * @uses SpeedwareStructGetBookingByTypeAndRoom::getSchool()
	 * @uses SpeedwareStructGetBookingByTypeAndRoom::getRoomIDs()
	 * @param SpeedwareStructGetBookingByTypeAndRoom $_speedwareStructGetBookingByTypeAndRoom
	 * @return SpeedwareStructGetBookingByTypeAndRoomResponse
	 */
	public function GetBookingByTypeAndRoom(SpeedwareStructGetBookingByTypeAndRoom $_speedwareStructGetBookingByTypeAndRoom)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetBookingByTypeAndRoomResponse(self::getSoapClient()->GetBookingByTypeAndRoom(array('PublishingTypeID'=>$_speedwareStructGetBookingByTypeAndRoom->getPublishingTypeID(),'BookingTypeID'=>$_speedwareStructGetBookingByTypeAndRoom->getBookingTypeID(),'School'=>$_speedwareStructGetBookingByTypeAndRoom->getSchool(),'RoomIDs'=>$_speedwareStructGetBookingByTypeAndRoom->getRoomIDs()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetBookingsByTypesAndRooms
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetBookingsByTypesAndRooms::getPublishingTypeID()
	 * @uses SpeedwareStructGetBookingsByTypesAndRooms::getSchool()
	 * @uses SpeedwareStructGetBookingsByTypesAndRooms::getBookingTypeIDs()
	 * @uses SpeedwareStructGetBookingsByTypesAndRooms::getRoomIDs()
	 * @param SpeedwareStructGetBookingsByTypesAndRooms $_speedwareStructGetBookingsByTypesAndRooms
	 * @return SpeedwareStructGetBookingsByTypesAndRoomsResponse
	 */
	public function GetBookingsByTypesAndRooms(SpeedwareStructGetBookingsByTypesAndRooms $_speedwareStructGetBookingsByTypesAndRooms)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetBookingsByTypesAndRoomsResponse(self::getSoapClient()->GetBookingsByTypesAndRooms(array('PublishingTypeID'=>$_speedwareStructGetBookingsByTypesAndRooms->getPublishingTypeID(),'School'=>$_speedwareStructGetBookingsByTypesAndRooms->getSchool(),'BookingTypeIDs'=>$_speedwareStructGetBookingsByTypesAndRooms->getBookingTypeIDs(),'RoomIDs'=>$_speedwareStructGetBookingsByTypesAndRooms->getRoomIDs()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetBookingsByTypesAndRoomsFutureOnly
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly::getPublishingTypeID()
	 * @uses SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly::getSchool()
	 * @uses SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly::getBookingTypeIDs()
	 * @uses SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly::getRoomIDs()
	 * @param SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly $_speedwareStructGetBookingsByTypesAndRoomsFutureOnly
	 * @return SpeedwareStructGetBookingsByTypesAndRoomsFutureOnlyResponse
	 */
	public function GetBookingsByTypesAndRoomsFutureOnly(SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly $_speedwareStructGetBookingsByTypesAndRoomsFutureOnly)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetBookingsByTypesAndRoomsFutureOnlyResponse(self::getSoapClient()->GetBookingsByTypesAndRoomsFutureOnly(array('PublishingTypeID'=>$_speedwareStructGetBookingsByTypesAndRoomsFutureOnly->getPublishingTypeID(),'School'=>$_speedwareStructGetBookingsByTypesAndRoomsFutureOnly->getSchool(),'BookingTypeIDs'=>$_speedwareStructGetBookingsByTypesAndRoomsFutureOnly->getBookingTypeIDs(),'RoomIDs'=>$_speedwareStructGetBookingsByTypesAndRoomsFutureOnly->getRoomIDs()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetBookingsByTypesAndRoomsFutureOnly_Test
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test::getPublishingTypeID()
	 * @uses SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test::getSchool()
	 * @uses SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test::getBookingTypeIDs()
	 * @uses SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test::getRoomIDs()
	 * @param SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test $_speedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test
	 * @return SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_TestResponse
	 */
	public function GetBookingsByTypesAndRoomsFutureOnly_Test(SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test $_speedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_TestResponse(self::getSoapClient()->GetBookingsByTypesAndRoomsFutureOnly_Test(array('PublishingTypeID'=>$_speedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test->getPublishingTypeID(),'School'=>$_speedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test->getSchool(),'BookingTypeIDs'=>$_speedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test->getBookingTypeIDs(),'RoomIDs'=>$_speedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test->getRoomIDs()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetImage
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetImage::getType()
	 * @uses SpeedwareStructGetImage::getID()
	 * @uses SpeedwareStructGetImage::getSchool()
	 * @param SpeedwareStructGetImage $_speedwareStructGetImage
	 * @return SpeedwareStructGetImageResponse
	 */
	public function GetImage(SpeedwareStructGetImage $_speedwareStructGetImage)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetImageResponse(self::getSoapClient()->GetImage(array('Type'=>$_speedwareStructGetImage->getType(),'ID'=>$_speedwareStructGetImage->getID(),'School'=>$_speedwareStructGetImage->getSchool()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetEducationOffer
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetEducationOffer::getSchool()
	 * @param SpeedwareStructGetEducationOffer $_speedwareStructGetEducationOffer
	 * @return SpeedwareStructGetEducationOfferResponse
	 */
	public function GetEducationOffer(SpeedwareStructGetEducationOffer $_speedwareStructGetEducationOffer)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetEducationOfferResponse(self::getSoapClient()->GetEducationOffer(array('School'=>$_speedwareStructGetEducationOffer->getSchool()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetBookingByType
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetBookingByType::getPublishingTypeID()
	 * @uses SpeedwareStructGetBookingByType::getBookingTypeID()
	 * @uses SpeedwareStructGetBookingByType::getSchool()
	 * @param SpeedwareStructGetBookingByType $_speedwareStructGetBookingByType
	 * @return SpeedwareStructGetBookingByTypeResponse
	 */
	public function GetBookingByType(SpeedwareStructGetBookingByType $_speedwareStructGetBookingByType)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetBookingByTypeResponse(self::getSoapClient()->GetBookingByType(array('PublishingTypeID'=>$_speedwareStructGetBookingByType->getPublishingTypeID(),'BookingTypeID'=>$_speedwareStructGetBookingByType->getBookingTypeID(),'School'=>$_speedwareStructGetBookingByType->getSchool()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetBookingPublishingTypes
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetBookingPublishingTypes::getSchool()
	 * @param SpeedwareStructGetBookingPublishingTypes $_speedwareStructGetBookingPublishingTypes
	 * @return SpeedwareStructGetBookingPublishingTypesResponse
	 */
	public function GetBookingPublishingTypes(SpeedwareStructGetBookingPublishingTypes $_speedwareStructGetBookingPublishingTypes)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetBookingPublishingTypesResponse(self::getSoapClient()->GetBookingPublishingTypes(array('School'=>$_speedwareStructGetBookingPublishingTypes->getSchool()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetBookingTypes
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetBookingTypes::getSchool()
	 * @param SpeedwareStructGetBookingTypes $_speedwareStructGetBookingTypes
	 * @return SpeedwareStructGetBookingTypesResponse
	 */
	public function GetBookingTypes(SpeedwareStructGetBookingTypes $_speedwareStructGetBookingTypes)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetBookingTypesResponse(self::getSoapClient()->GetBookingTypes(array('School'=>$_speedwareStructGetBookingTypes->getSchool()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetAfdeling
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetAfdeling::getSkole()
	 * @param SpeedwareStructGetAfdeling $_speedwareStructGetAfdeling
	 * @return SpeedwareStructGetAfdelingResponse
	 */
	public function GetAfdeling(SpeedwareStructGetAfdeling $_speedwareStructGetAfdeling)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetAfdelingResponse(self::getSoapClient()->GetAfdeling(array('Skole'=>$_speedwareStructGetAfdeling->getSkole()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetUndervisningstilbudListByKategoriID
	 * @uses SpeedwareWsdlClass::getSoapClient()
	 * @uses SpeedwareWsdlClass::setResult()
	 * @uses SpeedwareWsdlClass::getResult()
	 * @uses SpeedwareWsdlClass::saveLastError()
	 * @uses SpeedwareStructGetUndervisningstilbudListByKategoriID::getKategoriID()
	 * @uses SpeedwareStructGetUndervisningstilbudListByKategoriID::getSkole()
	 * @param SpeedwareStructGetUndervisningstilbudListByKategoriID $_speedwareStructGetUndervisningstilbudListByKategoriID
	 * @return SpeedwareStructGetUndervisningstilbudListByKategoriIDResponse
	 */
	public function GetUndervisningstilbudListByKategoriID(SpeedwareStructGetUndervisningstilbudListByKategoriID $_speedwareStructGetUndervisningstilbudListByKategoriID)
	{
		try
		{
			$this->setResult(new SpeedwareStructGetUndervisningstilbudListByKategoriIDResponse(self::getSoapClient()->GetUndervisningstilbudListByKategoriID(array('KategoriID'=>$_speedwareStructGetUndervisningstilbudListByKategoriID->getKategoriID(),'Skole'=>$_speedwareStructGetUndervisningstilbudListByKategoriID->getSkole()))));
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
	 * @return SpeedwareStructGetAfdelingResponse|SpeedwareStructGetBookingByTypeAndRoomResponse|SpeedwareStructGetBookingByTypeResponse|SpeedwareStructGetBookingPublishingTypesResponse|SpeedwareStructGetBookingsByTypesAndRoomsFutureOnlyResponse|SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_TestResponse|SpeedwareStructGetBookingsByTypesAndRoomsResponse|SpeedwareStructGetBookingTypesResponse|SpeedwareStructGetEducationOfferResponse|SpeedwareStructGetImageResponse|SpeedwareStructGetLocationsResponse|SpeedwareStructGetRoomsResponse|SpeedwareStructGetSchoolListResponse|SpeedwareStructGetStudentListByTeacherResponse|SpeedwareStructGetTreeListByTreeTypeIDResponse|SpeedwareStructGetTreeListResponse|SpeedwareStructGetUndervisningstilbudByTreeIDResponse|SpeedwareStructGetUndervisningstilbudListByKategoriIDResponse|SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTIDResponse
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