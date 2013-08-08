<?php
/**
 * Test with Speedware
 * @package Speedware
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
ini_set('memory_limit','512M');
ini_set('display_errors', true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/SpeedwareAutoload.php';
/**
 * Speedware Informations
 */
define('SPEEDWARE_WSDL_URL','https://www.speedadmin.dk/public/speedadmin.asmx?WSDL');
define('SPEEDWARE_USER_LOGIN','');
define('SPEEDWARE_USER_PASSWORD','');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[SpeedwareWsdlClass::WSDL_URL] = SPEEDWARE_WSDL_URL;
$wsdl[SpeedwareWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[SpeedwareWsdlClass::WSDL_TRACE] = true;
if(SPEEDWARE_USER_LOGIN !== '')
	$wsdl[SpeedwareWsdlClass::WSDL_LOGIN] = SPEEDWARE_USER_LOGIN;
if(SPEEDWARE_USER_PASSWORD !== '')
	$wsdl[SpeedwareWsdlClass::WSDL_PASSWD] = SPEEDWARE_USER_PASSWORD;
// etc....
/**
 * Examples
 */


/*********************************
 * Example for SpeedwareServiceGet
 */
$speedwareServiceGet = new SpeedwareServiceGet($wsdl);
// sample call for SpeedwareServiceGet::GetTreeList()
if($speedwareServiceGet->GetTreeList(new SpeedwareStructGetTreeList(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetTreeListByTreeTypeID()
if($speedwareServiceGet->GetTreeListByTreeTypeID(new SpeedwareStructGetTreeListByTreeTypeID(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetUndervisningstilbudByTreeID()
if($speedwareServiceGet->GetUndervisningstilbudByTreeID(new SpeedwareStructGetUndervisningstilbudByTreeID(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetUndervisningsTilbudUnderkategoriByUTID()
if($speedwareServiceGet->GetUndervisningsTilbudUnderkategoriByUTID(new SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTID(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetLocations()
if($speedwareServiceGet->GetLocations(new SpeedwareStructGetLocations(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetRooms()
if($speedwareServiceGet->GetRooms(new SpeedwareStructGetRooms(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetStudentListByTeacher()
if($speedwareServiceGet->GetStudentListByTeacher(new SpeedwareStructGetStudentListByTeacher(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetSchoolList()
if($speedwareServiceGet->GetSchoolList())
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetBookingByTypeAndRoom()
if($speedwareServiceGet->GetBookingByTypeAndRoom(new SpeedwareStructGetBookingByTypeAndRoom(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetBookingsByTypesAndRooms()
if($speedwareServiceGet->GetBookingsByTypesAndRooms(new SpeedwareStructGetBookingsByTypesAndRooms(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetBookingsByTypesAndRoomsFutureOnly()
if($speedwareServiceGet->GetBookingsByTypesAndRoomsFutureOnly(new SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetBookingsByTypesAndRoomsFutureOnly_Test()
if($speedwareServiceGet->GetBookingsByTypesAndRoomsFutureOnly_Test(new SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetImage()
if($speedwareServiceGet->GetImage(new SpeedwareStructGetImage(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetEducationOffer()
if($speedwareServiceGet->GetEducationOffer(new SpeedwareStructGetEducationOffer(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetBookingByType()
if($speedwareServiceGet->GetBookingByType(new SpeedwareStructGetBookingByType(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetBookingPublishingTypes()
if($speedwareServiceGet->GetBookingPublishingTypes(new SpeedwareStructGetBookingPublishingTypes(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetBookingTypes()
if($speedwareServiceGet->GetBookingTypes(new SpeedwareStructGetBookingTypes(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetAfdeling()
if($speedwareServiceGet->GetAfdeling(new SpeedwareStructGetAfdeling(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());
// sample call for SpeedwareServiceGet::GetUndervisningstilbudListByKategoriID()
if($speedwareServiceGet->GetUndervisningstilbudListByKategoriID(new SpeedwareStructGetUndervisningstilbudListByKategoriID(/*** update parameters list ***/)))
	print_r($speedwareServiceGet->getResult());
else
	print_r($speedwareServiceGet->getLastError());

/************************************
 * Example for SpeedwareServiceSelect
 */
$speedwareServiceSelect = new SpeedwareServiceSelect($wsdl);
// sample call for SpeedwareServiceSelect::SelectSubCat()
if($speedwareServiceSelect->SelectSubCat(new SpeedwareStructSelectSubCat(/*** update parameters list ***/)))
	print_r($speedwareServiceSelect->getResult());
else
	print_r($speedwareServiceSelect->getLastError());

/************************************
 * Example for SpeedwareServiceExists
 */
$speedwareServiceExists = new SpeedwareServiceExists($wsdl);
// sample call for SpeedwareServiceExists::Exists()
if($speedwareServiceExists->Exists(new SpeedwareStructExists(/*** update parameters list ***/)))
	print_r($speedwareServiceExists->getResult());
else
	print_r($speedwareServiceExists->getLastError());

/**********************************
 * Example for SpeedwareServiceHent
 */
$speedwareServiceHent = new SpeedwareServiceHent($wsdl);
// sample call for SpeedwareServiceHent::HentLaererList()
if($speedwareServiceHent->HentLaererList(new SpeedwareStructHentLaererList(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentSkoleList()
if($speedwareServiceHent->HentSkoleList(new SpeedwareStructHentSkoleList(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentLokaleListe()
if($speedwareServiceHent->HentLokaleListe(new SpeedwareStructHentLokaleListe(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentKoncertListe()
if($speedwareServiceHent->HentKoncertListe(new SpeedwareStructHentKoncertListe(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentKoncertDetaljeListe()
if($speedwareServiceHent->HentKoncertDetaljeListe(new SpeedwareStructHentKoncertDetaljeListe(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentAktivitetListe()
if($speedwareServiceHent->HentAktivitetListe(new SpeedwareStructHentAktivitetListe(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentAktivitetDetaljeListe()
if($speedwareServiceHent->HentAktivitetDetaljeListe(new SpeedwareStructHentAktivitetDetaljeListe(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentKoncertDetaljer()
if($speedwareServiceHent->HentKoncertDetaljer(new SpeedwareStructHentKoncertDetaljer(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentAktivitetDetaljer()
if($speedwareServiceHent->HentAktivitetDetaljer(new SpeedwareStructHentAktivitetDetaljer(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentKoncertListeSomHTML()
if($speedwareServiceHent->HentKoncertListeSomHTML(new SpeedwareStructHentKoncertListeSomHTML(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentAktivitetsListeSomHTML()
if($speedwareServiceHent->HentAktivitetsListeSomHTML(new SpeedwareStructHentAktivitetsListeSomHTML(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentUndervisningstilbudListe()
if($speedwareServiceHent->HentUndervisningstilbudListe(new SpeedwareStructHentUndervisningstilbudListe(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentUndervisningstilbudDetalje()
if($speedwareServiceHent->HentUndervisningstilbudDetalje(new SpeedwareStructHentUndervisningstilbudDetalje(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentSammenspilListe()
if($speedwareServiceHent->HentSammenspilListe(new SpeedwareStructHentSammenspilListe(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
// sample call for SpeedwareServiceHent::HentSammenspilDetalje()
if($speedwareServiceHent->HentSammenspilDetalje(new SpeedwareStructHentSammenspilDetalje(/*** update parameters list ***/)))
	print_r($speedwareServiceHent->getResult());
else
	print_r($speedwareServiceHent->getLastError());
?>