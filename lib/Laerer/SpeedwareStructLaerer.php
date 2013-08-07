<?php
/**
 * File for class SpeedwareStructLaerer
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructLaerer originally named Laerer
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructLaerer extends SpeedwareWsdlClass
{
	/**
	 * The LaererID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $LaererID;
	/**
	 * The Navn
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Navn;
	/**
	 * The Titel
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Titel;
	/**
	 * The Fag
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfString
	 */
	public $Fag;
	/**
	 * The Billede
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var base64Binary
	 */
	public $Billede;
	/**
	 * The Initialer
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Initialer;
	/**
	 * The Tlf
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Tlf;
	/**
	 * The Mobil
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Mobil;
	/**
	 * The Email
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Email;
	/**
	 * Constructor method for Laerer
	 * @see parent::__construct()
	 * @param int $_laererID
	 * @param string $_navn
	 * @param string $_titel
	 * @param SpeedwareStructArrayOfString $_fag
	 * @param base64Binary $_billede
	 * @param string $_initialer
	 * @param string $_tlf
	 * @param string $_mobil
	 * @param string $_email
	 * @return SpeedwareStructLaerer
	 */
	public function __construct($_laererID,$_navn = NULL,$_titel = NULL,$_fag = NULL,$_billede = NULL,$_initialer = NULL,$_tlf = NULL,$_mobil = NULL,$_email = NULL)
	{
		parent::__construct(array('LaererID'=>$_laererID,'Navn'=>$_navn,'Titel'=>$_titel,'Fag'=>($_fag instanceof SpeedwareStructArrayOfString)?$_fag:new SpeedwareStructArrayOfString($_fag),'Billede'=>$_billede,'Initialer'=>$_initialer,'Tlf'=>$_tlf,'Mobil'=>$_mobil,'Email'=>$_email));
	}
	/**
	 * Get LaererID value
	 * @return int
	 */
	public function getLaererID()
	{
		return $this->LaererID;
	}
	/**
	 * Set LaererID value
	 * @param int $_laererID the LaererID
	 * @return int
	 */
	public function setLaererID($_laererID)
	{
		return ($this->LaererID = $_laererID);
	}
	/**
	 * Get Navn value
	 * @return string|null
	 */
	public function getNavn()
	{
		return $this->Navn;
	}
	/**
	 * Set Navn value
	 * @param string $_navn the Navn
	 * @return string
	 */
	public function setNavn($_navn)
	{
		return ($this->Navn = $_navn);
	}
	/**
	 * Get Titel value
	 * @return string|null
	 */
	public function getTitel()
	{
		return $this->Titel;
	}
	/**
	 * Set Titel value
	 * @param string $_titel the Titel
	 * @return string
	 */
	public function setTitel($_titel)
	{
		return ($this->Titel = $_titel);
	}
	/**
	 * Get Fag value
	 * @return SpeedwareStructArrayOfString|null
	 */
	public function getFag()
	{
		return $this->Fag;
	}
	/**
	 * Set Fag value
	 * @param SpeedwareStructArrayOfString $_fag the Fag
	 * @return SpeedwareStructArrayOfString
	 */
	public function setFag($_fag)
	{
		return ($this->Fag = $_fag);
	}
	/**
	 * Get Billede value
	 * @return base64Binary|null
	 */
	public function getBillede()
	{
		return $this->Billede;
	}
	/**
	 * Set Billede value
	 * @param base64Binary $_billede the Billede
	 * @return base64Binary
	 */
	public function setBillede($_billede)
	{
		return ($this->Billede = $_billede);
	}
	/**
	 * Get Initialer value
	 * @return string|null
	 */
	public function getInitialer()
	{
		return $this->Initialer;
	}
	/**
	 * Set Initialer value
	 * @param string $_initialer the Initialer
	 * @return string
	 */
	public function setInitialer($_initialer)
	{
		return ($this->Initialer = $_initialer);
	}
	/**
	 * Get Tlf value
	 * @return string|null
	 */
	public function getTlf()
	{
		return $this->Tlf;
	}
	/**
	 * Set Tlf value
	 * @param string $_tlf the Tlf
	 * @return string
	 */
	public function setTlf($_tlf)
	{
		return ($this->Tlf = $_tlf);
	}
	/**
	 * Get Mobil value
	 * @return string|null
	 */
	public function getMobil()
	{
		return $this->Mobil;
	}
	/**
	 * Set Mobil value
	 * @param string $_mobil the Mobil
	 * @return string
	 */
	public function setMobil($_mobil)
	{
		return ($this->Mobil = $_mobil);
	}
	/**
	 * Get Email value
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set Email value
	 * @param string $_email the Email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->Email = $_email);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructLaerer
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