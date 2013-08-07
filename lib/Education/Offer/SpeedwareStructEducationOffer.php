<?php
/**
 * File for class SpeedwareStructEducationOffer
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructEducationOffer originally named EducationOffer
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructEducationOffer extends SpeedwareWsdlClass
{
	/**
	 * The EducationOfferID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $EducationOfferID;
	/**
	 * The CategoriID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $CategoriID;
	/**
	 * The IsEnsemble
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var boolean
	 */
	public $IsEnsemble;
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Description
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Description;
	/**
	 * The SubCategoryList
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfSubCategory
	 */
	public $SubCategoryList;
	/**
	 * The Images
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfImageRessource
	 */
	public $Images;
	/**
	 * The Attributes
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SpeedwareStructArrayOfAttribute
	 */
	public $Attributes;
	/**
	 * Constructor method for EducationOffer
	 * @see parent::__construct()
	 * @param int $_educationOfferID
	 * @param int $_categoriID
	 * @param boolean $_isEnsemble
	 * @param string $_name
	 * @param string $_description
	 * @param SpeedwareStructArrayOfSubCategory $_subCategoryList
	 * @param SpeedwareStructArrayOfImageRessource $_images
	 * @param SpeedwareStructArrayOfAttribute $_attributes
	 * @return SpeedwareStructEducationOffer
	 */
	public function __construct($_educationOfferID,$_categoriID,$_isEnsemble,$_name = NULL,$_description = NULL,$_subCategoryList = NULL,$_images = NULL,$_attributes = NULL)
	{
		parent::__construct(array('EducationOfferID'=>$_educationOfferID,'CategoriID'=>$_categoriID,'IsEnsemble'=>$_isEnsemble,'Name'=>$_name,'Description'=>$_description,'SubCategoryList'=>($_subCategoryList instanceof SpeedwareStructArrayOfSubCategory)?$_subCategoryList:new SpeedwareStructArrayOfSubCategory($_subCategoryList),'Images'=>($_images instanceof SpeedwareStructArrayOfImageRessource)?$_images:new SpeedwareStructArrayOfImageRessource($_images),'Attributes'=>($_attributes instanceof SpeedwareStructArrayOfAttribute)?$_attributes:new SpeedwareStructArrayOfAttribute($_attributes)));
	}
	/**
	 * Get EducationOfferID value
	 * @return int
	 */
	public function getEducationOfferID()
	{
		return $this->EducationOfferID;
	}
	/**
	 * Set EducationOfferID value
	 * @param int $_educationOfferID the EducationOfferID
	 * @return int
	 */
	public function setEducationOfferID($_educationOfferID)
	{
		return ($this->EducationOfferID = $_educationOfferID);
	}
	/**
	 * Get CategoriID value
	 * @return int
	 */
	public function getCategoriID()
	{
		return $this->CategoriID;
	}
	/**
	 * Set CategoriID value
	 * @param int $_categoriID the CategoriID
	 * @return int
	 */
	public function setCategoriID($_categoriID)
	{
		return ($this->CategoriID = $_categoriID);
	}
	/**
	 * Get IsEnsemble value
	 * @return boolean
	 */
	public function getIsEnsemble()
	{
		return $this->IsEnsemble;
	}
	/**
	 * Set IsEnsemble value
	 * @param boolean $_isEnsemble the IsEnsemble
	 * @return boolean
	 */
	public function setIsEnsemble($_isEnsemble)
	{
		return ($this->IsEnsemble = $_isEnsemble);
	}
	/**
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
	}
	/**
	 * Get Description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Description value
	 * @param string $_description the Description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->Description = $_description);
	}
	/**
	 * Get SubCategoryList value
	 * @return SpeedwareStructArrayOfSubCategory|null
	 */
	public function getSubCategoryList()
	{
		return $this->SubCategoryList;
	}
	/**
	 * Set SubCategoryList value
	 * @param SpeedwareStructArrayOfSubCategory $_subCategoryList the SubCategoryList
	 * @return SpeedwareStructArrayOfSubCategory
	 */
	public function setSubCategoryList($_subCategoryList)
	{
		return ($this->SubCategoryList = $_subCategoryList);
	}
	/**
	 * Get Images value
	 * @return SpeedwareStructArrayOfImageRessource|null
	 */
	public function getImages()
	{
		return $this->Images;
	}
	/**
	 * Set Images value
	 * @param SpeedwareStructArrayOfImageRessource $_images the Images
	 * @return SpeedwareStructArrayOfImageRessource
	 */
	public function setImages($_images)
	{
		return ($this->Images = $_images);
	}
	/**
	 * Get Attributes value
	 * @return SpeedwareStructArrayOfAttribute|null
	 */
	public function getAttributes()
	{
		return $this->Attributes;
	}
	/**
	 * Set Attributes value
	 * @param SpeedwareStructArrayOfAttribute $_attributes the Attributes
	 * @return SpeedwareStructArrayOfAttribute
	 */
	public function setAttributes($_attributes)
	{
		return ($this->Attributes = $_attributes);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructEducationOffer
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