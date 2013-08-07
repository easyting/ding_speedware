<?php
/**
 * File for class SpeedwareEnumImageType
 * @package Speedware
 * @subpackage Enumerations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareEnumImageType originally named ImageType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Enumerations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareEnumImageType extends SpeedwareWsdlClass
{
	/**
	 * Constant for value 'Teacher'
	 * @return string 'Teacher'
	 */
	const VALUE_TEACHER = 'Teacher';
	/**
	 * Constant for value 'Booking'
	 * @return string 'Booking'
	 */
	const VALUE_BOOKING = 'Booking';
	/**
	 * Return true if value is allowed
	 * @uses SpeedwareEnumImageType::VALUE_TEACHER
	 * @uses SpeedwareEnumImageType::VALUE_BOOKING
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(SpeedwareEnumImageType::VALUE_TEACHER,SpeedwareEnumImageType::VALUE_BOOKING));
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