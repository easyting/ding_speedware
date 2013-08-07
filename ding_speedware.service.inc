<?php

/**
 * @file speedware.service.inc
 * Helper functions to integrate with SOAP library.
 */

function _speedware_get_all_schools() {
  $speedwareServiceGet = new SpeedwareServiceGet(_speedware_default_config());
  if($speedwareServiceGet->GetSchoolList()) {
    return $speedwareServiceGet->getResult()->GetSchoolListResult->School->GetSchoolListResult->School;
  }
  else {
    _speedware_service_log($speedwareServiceGet->getLastError());
  }
}

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
}

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

function _speedware_service_log($last_error) {
  $error = current($last_error);
  watchdog_exception('speedware', $error, WATCHDOG_ERROR);
  if (variable_get('speedware_debug', FALSE)) {
    throw $error;
  }
}
