<?php
/**
 * File to load generated classes once at once time
 * @package Speedware
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * Includes for all generated classes files
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
require_once dirname(__FILE__) . '/SpeedwareWsdlClass.php';
require_once dirname(__FILE__) . '/Hent/List/SpeedwareStructHentSkoleList.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentSkoleListResponse.php';
require_once dirname(__FILE__) . '/Array/Skole/SpeedwareStructArrayOfSkole.php';
require_once dirname(__FILE__) . '/Array/String/SpeedwareStructArrayOfString.php';
require_once dirname(__FILE__) . '/Laerer/SpeedwareStructLaerer.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentLaererListResponse.php';
require_once dirname(__FILE__) . '/Array/Laerer/SpeedwareStructArrayOfLaerer.php';
require_once dirname(__FILE__) . '/Skole/SpeedwareStructSkole.php';
require_once dirname(__FILE__) . '/Hent/Liste/SpeedwareStructHentLokaleListe.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentKoncertListeResponse.php';
require_once dirname(__FILE__) . '/Array/Koncert/SpeedwareStructArrayOfKoncert.php';
require_once dirname(__FILE__) . '/Hent/Liste/SpeedwareStructHentKoncertListe.php';
require_once dirname(__FILE__) . '/Lokale/SpeedwareStructLokale.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentLokaleListeResponse.php';
require_once dirname(__FILE__) . '/Array/Lokale/SpeedwareStructArrayOfLokale.php';
require_once dirname(__FILE__) . '/Hent/List/SpeedwareStructHentLaererList.php';
require_once dirname(__FILE__) . '/Kategori/SpeedwareStructKategori.php';
require_once dirname(__FILE__) . '/Booking/Type/SpeedwareStructBookingPublishingType.php';
require_once dirname(__FILE__) . '/Get/Types/SpeedwareStructGetBookingTypes.php';
require_once dirname(__FILE__) . '/Array/Type/SpeedwareStructArrayOfBookingPublishingType.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetBookingPublishingTypesResponse.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetBookingByTypeResponse.php';
require_once dirname(__FILE__) . '/Get/Types/SpeedwareStructGetBookingPublishingTypes.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetBookingTypesResponse.php';
require_once dirname(__FILE__) . '/Array/Type/SpeedwareStructArrayOfBookingType.php';
require_once dirname(__FILE__) . '/Afdeling/SpeedwareStructAfdeling.php';
require_once dirname(__FILE__) . '/Array/Kategori/SpeedwareStructArrayOfKategori.php';
require_once dirname(__FILE__) . '/Array/Afdeling/SpeedwareStructArrayOfAfdeling.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetAfdelingResponse.php';
require_once dirname(__FILE__) . '/Booking/Type/SpeedwareStructBookingType.php';
require_once dirname(__FILE__) . '/Get/Afdeling/SpeedwareStructGetAfdeling.php';
require_once dirname(__FILE__) . '/Koncert/SpeedwareStructKoncert.php';
require_once dirname(__FILE__) . '/Hent/Liste/SpeedwareStructHentKoncertDetaljeListe.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentUndervisningstilbudListeResponse.php';
require_once dirname(__FILE__) . '/Get/ID/SpeedwareStructGetUndervisningstilbudListByKategoriID.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetUndervisningstilbudListByKategoriIDResponse.php';
require_once dirname(__FILE__) . '/Hent/Liste/SpeedwareStructHentUndervisningstilbudListe.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentAktivitetsListeSomHTMLResponse.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentKoncertListeSomHTMLResponse.php';
require_once dirname(__FILE__) . '/Hent/HTML/SpeedwareStructHentAktivitetsListeSomHTML.php';
require_once dirname(__FILE__) . '/Hent/Detalje/SpeedwareStructHentUndervisningstilbudDetalje.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentUndervisningstilbudDetaljeResponse.php';
require_once dirname(__FILE__) . '/Hent/Detalje/SpeedwareStructHentSammenspilDetalje.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentSammenspilDetaljeResponse.php';
require_once dirname(__FILE__) . '/Sammenspil/SpeedwareStructSammenspil.php';
require_once dirname(__FILE__) . '/Array/Sammenspil/SpeedwareStructArrayOfSammenspil.php';
require_once dirname(__FILE__) . '/Hent/Liste/SpeedwareStructHentSammenspilListe.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentSammenspilListeResponse.php';
require_once dirname(__FILE__) . '/Hent/HTML/SpeedwareStructHentKoncertListeSomHTML.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentAktivitetDetaljerResponse.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentAktivitetListeResponse.php';
require_once dirname(__FILE__) . '/Array/Aktivitet/SpeedwareStructArrayOfAktivitet.php';
require_once dirname(__FILE__) . '/Hent/Liste/SpeedwareStructHentAktivitetListe.php';
require_once dirname(__FILE__) . '/Koncert/Detaljer/SpeedwareStructKoncertDetaljer.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentKoncertDetaljeListeResponse.php';
require_once dirname(__FILE__) . '/Array/Detaljer/SpeedwareStructArrayOfKoncertDetaljer.php';
require_once dirname(__FILE__) . '/Aktivitet/SpeedwareStructAktivitet.php';
require_once dirname(__FILE__) . '/Hent/Liste/SpeedwareStructHentAktivitetDetaljeListe.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentKoncertDetaljerResponse.php';
require_once dirname(__FILE__) . '/Hent/Detaljer/SpeedwareStructHentAktivitetDetaljer.php';
require_once dirname(__FILE__) . '/Hent/Detaljer/SpeedwareStructHentKoncertDetaljer.php';
require_once dirname(__FILE__) . '/Aktivitet/Detaljer/SpeedwareStructAktivitetDetaljer.php';
require_once dirname(__FILE__) . '/Hent/Response/SpeedwareStructHentAktivitetDetaljeListeResponse.php';
require_once dirname(__FILE__) . '/Array/Detaljer/SpeedwareStructArrayOfAktivitetDetaljer.php';
require_once dirname(__FILE__) . '/Get/Type/SpeedwareStructGetBookingByType.php';
require_once dirname(__FILE__) . '/Attribute/SpeedwareStructAttribute.php';
require_once dirname(__FILE__) . '/Get/Locations/SpeedwareStructGetLocations.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetLocationsResponse.php';
require_once dirname(__FILE__) . '/Array/Location/SpeedwareStructArrayOfLocation.php';
require_once dirname(__FILE__) . '/Exists/Response/SpeedwareStructExistsResponse.php';
require_once dirname(__FILE__) . '/Exists/SpeedwareStructExists.php';
require_once dirname(__FILE__) . '/Array/Underkategori/SpeedwareStructArrayOfUndervisningsTilbudUnderkategori.php';
require_once dirname(__FILE__) . '/Undervisnings/Underkategori/SpeedwareStructUndervisningsTilbudUnderkategori.php';
require_once dirname(__FILE__) . '/Location/SpeedwareStructLocation.php';
require_once dirname(__FILE__) . '/Get/Rooms/SpeedwareStructGetRooms.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetStudentListByTeacherResponse.php';
require_once dirname(__FILE__) . '/Array/Student/SpeedwareStructArrayOfStudent.php';
require_once dirname(__FILE__) . '/Get/Teacher/SpeedwareStructGetStudentListByTeacher.php';
require_once dirname(__FILE__) . '/Room/SpeedwareStructRoom.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetRoomsResponse.php';
require_once dirname(__FILE__) . '/Array/Room/SpeedwareStructArrayOfRoom.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTIDResponse.php';
require_once dirname(__FILE__) . '/Get/UTID/SpeedwareStructGetUndervisningsTilbudUnderkategoriByUTID.php';
require_once dirname(__FILE__) . '/Get/ID/SpeedwareStructGetTreeListByTreeTypeID.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetTreeListByTreeTypeIDResponse.php';
require_once dirname(__FILE__) . '/Tree/SpeedwareStructTree.php';
require_once dirname(__FILE__) . '/Array/Tree/SpeedwareStructArrayOfTree.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetTreeListResponse.php';
require_once dirname(__FILE__) . '/Tree/Structure/SpeedwareStructTreeStructure.php';
require_once dirname(__FILE__) . '/Select/Cat/SpeedwareStructSelectSubCat.php';
require_once dirname(__FILE__) . '/Select/Response/SpeedwareStructSelectSubCatResponse.php';
require_once dirname(__FILE__) . '/Array/Kategori/SpeedwareStructArrayOfUnderKategori.php';
require_once dirname(__FILE__) . '/Under/Kategori/SpeedwareStructUnderKategori.php';
require_once dirname(__FILE__) . '/Undervisningstilbud/SpeedwareStructUndervisningstilbud.php';
require_once dirname(__FILE__) . '/Array/Undervisningstilbud/SpeedwareStructArrayOfUndervisningstilbud.php';
require_once dirname(__FILE__) . '/Get/ID/SpeedwareStructGetUndervisningstilbudByTreeID.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetUndervisningstilbudByTreeIDResponse.php';
require_once dirname(__FILE__) . '/Student/SpeedwareStructStudent.php';
require_once dirname(__FILE__) . '/Get/List/SpeedwareStructGetSchoolList.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetImageResponse.php';
require_once dirname(__FILE__) . '/Get/Offer/SpeedwareStructGetEducationOffer.php';
require_once dirname(__FILE__) . '/Image/Type/SpeedwareEnumImageType.php';
require_once dirname(__FILE__) . '/Get/Image/SpeedwareStructGetImage.php';
require_once dirname(__FILE__) . '/Get/Test/SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_Test.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly_TestResponse.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetEducationOfferResponse.php';
require_once dirname(__FILE__) . '/Array/Offer/SpeedwareStructArrayOfEducationOffer.php';
require_once dirname(__FILE__) . '/Image/Ressource/SpeedwareStructImageRessource.php';
require_once dirname(__FILE__) . '/Array/Attribute/SpeedwareStructArrayOfAttribute.php';
require_once dirname(__FILE__) . '/Array/Ressource/SpeedwareStructArrayOfImageRessource.php';
require_once dirname(__FILE__) . '/Sub/Category/SpeedwareStructSubCategory.php';
require_once dirname(__FILE__) . '/Education/Offer/SpeedwareStructEducationOffer.php';
require_once dirname(__FILE__) . '/Array/Category/SpeedwareStructArrayOfSubCategory.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetBookingsByTypesAndRoomsFutureOnlyResponse.php';
require_once dirname(__FILE__) . '/Get/Only/SpeedwareStructGetBookingsByTypesAndRoomsFutureOnly.php';
require_once dirname(__FILE__) . '/Array/Int/SpeedwareStructArrayOfInt.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetBookingByTypeAndRoomResponse.php';
require_once dirname(__FILE__) . '/Get/Room/SpeedwareStructGetBookingByTypeAndRoom.php';
require_once dirname(__FILE__) . '/School/SpeedwareStructSchool.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetSchoolListResponse.php';
require_once dirname(__FILE__) . '/Array/School/SpeedwareStructArrayOfSchool.php';
require_once dirname(__FILE__) . '/Array/Booking/SpeedwareStructArrayOfBooking.php';
require_once dirname(__FILE__) . '/Booking/SpeedwareStructBooking.php';
require_once dirname(__FILE__) . '/Get/Rooms/SpeedwareStructGetBookingsByTypesAndRooms.php';
require_once dirname(__FILE__) . '/Get/Response/SpeedwareStructGetBookingsByTypesAndRoomsResponse.php';
require_once dirname(__FILE__) . '/Booking/Attribute/SpeedwareStructBookingAttribute.php';
require_once dirname(__FILE__) . '/Array/Attribute/SpeedwareStructArrayOfBookingAttribute.php';
require_once dirname(__FILE__) . '/Array/Image/SpeedwareStructArrayOfBookingImage.php';
require_once dirname(__FILE__) . '/Booking/Image/SpeedwareStructBookingImage.php';
require_once dirname(__FILE__) . '/Get/List/SpeedwareStructGetTreeList.php';
require_once dirname(__FILE__) . '/Get/SpeedwareServiceGet.php';
require_once dirname(__FILE__) . '/Select/SpeedwareServiceSelect.php';
require_once dirname(__FILE__) . '/Exists/SpeedwareServiceExists.php';
require_once dirname(__FILE__) . '/Hent/SpeedwareServiceHent.php';
require_once dirname(__FILE__) . '/SpeedwareClassMap.php';
?>