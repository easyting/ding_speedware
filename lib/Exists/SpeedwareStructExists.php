<?php
/**
 * File for class SpeedwareStructExists
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructExists originally named Exists
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructExists extends SpeedwareWsdlClass
{
	/**
	 * The Day
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $Day;
	/**
	 * The Month
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $Month;
	/**
	 * The Year
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $Year;
	/**
	 * The Genre
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var boolean
	 */
	public $Genre;
	/**
	 * The FirstName
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $FirstName;
	/**
	 * The Lastname
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Lastname;
	/**
	 * The Address
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Address;
	/**
	 * Constructor method for Exists
	 * @see parent::__construct()
	 * @param int $_day
	 * @param int $_month
	 * @param int $_year
	 * @param boolean $_genre
	 * @param string $_firstName
	 * @param string $_lastname
	 * @param string $_address
	 * @return SpeedwareStructExists
	 */
	public function __construct($_day,$_month,$_year,$_genre,$_firstName = NULL,$_lastname = NULL,$_address = NULL)
	{
		parent::__construct(array('Day'=>$_day,'Month'=>$_month,'Year'=>$_year,'Genre'=>$_genre,'FirstName'=>$_firstName,'Lastname'=>$_lastname,'Address'=>$_address));
	}
	/**
	 * Get Day value
	 * @return int
	 */
	public function getDay()
	{
		return $this->Day;
	}
	/**
	 * Set Day value
	 * @param int $_day the Day
	 * @return int
	 */
	public function setDay($_day)
	{
		return ($this->Day = $_day);
	}
	/**
	 * Get Month value
	 * @return int
	 */
	public function getMonth()
	{
		return $this->Month;
	}
	/**
	 * Set Month value
	 * @param int $_month the Month
	 * @return int
	 */
	public function setMonth($_month)
	{
		return ($this->Month = $_month);
	}
	/**
	 * Get Year value
	 * @return int
	 */
	public function getYear()
	{
		return $this->Year;
	}
	/**
	 * Set Year value
	 * @param int $_year the Year
	 * @return int
	 */
	public function setYear($_year)
	{
		return ($this->Year = $_year);
	}
	/**
	 * Get Genre value
	 * @return boolean
	 */
	public function getGenre()
	{
		return $this->Genre;
	}
	/**
	 * Set Genre value
	 * @param boolean $_genre the Genre
	 * @return boolean
	 */
	public function setGenre($_genre)
	{
		return ($this->Genre = $_genre);
	}
	/**
	 * Get FirstName value
	 * @return string|null
	 */
	public function getFirstName()
	{
		return $this->FirstName;
	}
	/**
	 * Set FirstName value
	 * @param string $_firstName the FirstName
	 * @return string
	 */
	public function setFirstName($_firstName)
	{
		return ($this->FirstName = $_firstName);
	}
	/**
	 * Get Lastname value
	 * @return string|null
	 */
	public function getLastname()
	{
		return $this->Lastname;
	}
	/**
	 * Set Lastname value
	 * @param string $_lastname the Lastname
	 * @return string
	 */
	public function setLastname($_lastname)
	{
		return ($this->Lastname = $_lastname);
	}
	/**
	 * Get Address value
	 * @return string|null
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set Address value
	 * @param string $_address the Address
	 * @return string
	 */
	public function setAddress($_address)
	{
		return ($this->Address = $_address);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructExists
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