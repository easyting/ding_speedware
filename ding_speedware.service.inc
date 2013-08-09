<?php

/**
 * @file speedware.service.inc
 * Helper functions to integrate with SOAP library.
 */

require_once __DIR__ . '/lib/SpeedwareAutoload.php';

/**
 * Get list of all schools.
 *
 * @return array
 *  list of schools.
 */
function _speedware_get_all_schools() {
  $speedwareServiceGet = new SpeedwareServiceGet(_speedware_default_config());
  if($speedwareServiceGet->GetSchoolList()) {
    return $speedwareServiceGet->getResult()->GetSchoolListResult->School->GetSchoolListResult->School;
  }
  else {
    _speedware_service_log($speedwareServiceGet->getLastError());
  }

  return array();
}

/**
 * Get list of teachers for default school.
 *
 * @return array
 *  list of teachers.
 */
function _speedware_get_all_teachers() {
  $speedwareServiceHent = new SpeedwareServiceHent(_speedware_default_config());
  $laererList = new SpeedwareStructHentLaererList(variable_get('speedware_default_school', FALSE));
  if($speedwareServiceHent->HentLaererList($laererList)) {
    $teachers = $speedwareServiceHent
      ->getResult()
      ->HentLaererListResult
      ->Laerer
      ->HentLaererListResult
      ->Laerer
    ;

    // Fetch images.
    foreach ($teachers as $teacher) {
      if ($teacher->Billede) {
        // @TODO: image fetching (image field is always empty).
        _speedware_fetch_image($teacher->Billede);
      }
    }

    return $teachers;
  }
  else {
    _speedware_service_log($speedwareServiceHent->getLastError());
  }

  return array();
}

/**
 * Get list of all concerts for default school.
 *
 * @return array
 *  list of concerts.
 */
function _speedware_get_all_concerts() {
  $speedwareServiceHent = new SpeedwareServiceHent(_speedware_default_config());
  $detaljeListe = new SpeedwareStructHentKoncertDetaljeListe(variable_get('speedware_default_school', FALSE));
  if($speedwareServiceHent->HentKoncertDetaljeListe($detaljeListe)) {
    return $speedwareServiceHent
      ->getResult()
      ->HentKoncertDetaljeListeResult
      ->KoncertDetaljer
      ->HentKoncertDetaljeListeResult
      ->KoncertDetaljer
    ;
  }
  else {
    _speedware_service_log($speedwareServiceHent->getLastError());
  }

  return array();
}

/**
 * Get list of all instruments for default school.
 *
 * @return array
 *  list of instruments.
 */
function _speedware_get_all_instruments() {
  $speedwareServiceHent = new SpeedwareServiceHent(_speedware_default_config());
  $list = new SpeedwareStructHentUndervisningstilbudListe(variable_get('speedware_default_school', FALSE));
  if($speedwareServiceHent->HentUndervisningstilbudListe($list)) {
    return $speedwareServiceHent
      ->getResult()
      ->HentUndervisningstilbudListeResult
      ->Undervisningstilbud
      ->HentUndervisningstilbudListeResult
      ->Undervisningstilbud
    ;
  }
  else {
    _speedware_service_log($speedwareServiceHent->getLastError());
  }

  return array();
}

/**
 * Fetch an image.
 *
 * @param string $id
 *  speedware image id.
 */
function _speedware_fetch_image($id) {
  $speedwareServiceGet = new SpeedwareServiceGet(_speedware_default_config());
  $image_query = new SpeedwareStructGetImage(
    SpeedwareEnumImageType::VALUE_TEACHER,
    $id,
    variable_get('speedware_default_school', FALSE)
  );
  if($speedwareServiceGet->GetImage($image_query)) {
    // @TODO: store locally.
  }
  else {
    _speedware_service_log($speedwareServiceGet->getLastError());
  }

  return FALSE;
}

/**
 * Create default config for SoapClient.
 *
 * @return array
 *  wsdl config.
 */
function _speedware_default_config() {
  $wsdl = array();
  $wsdl[SpeedwareWsdlClass::WSDL_URL] = variable_get('speedware_service_uri', FALSE);
  $wsdl[SpeedwareWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_MEMORY;
  $wsdl[SpeedwareWsdlClass::WSDL_EXCPTS] = true;

  if (variable_get('speedware_debug', FALSE)) {
    $wsdl[SpeedwareWsdlClass::WSDL_TRACE] = true;
  }

  return $wsdl;
}

/**
 * Log errors.
 *
 * @param array $last_error
 *  array with last exception.
 * @throws SoapFault
 */
function _speedware_service_log($last_error) {
  $error = current($last_error);
  watchdog_exception('speedware', $error, WATCHDOG_ERROR);
  if (variable_get('speedware_debug', FALSE)) {
    throw $error;
  }
}
