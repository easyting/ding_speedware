<?php
/**
 * File for class SpeedwareStructBookingAttribute
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructBookingAttribute originally named BookingAttribute
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructBookingAttribute extends SpeedwareWsdlClass
{
	/**
	 * The Sequence
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $Sequence;
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Value
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Value;
	/**
	 * The AttributeType
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $AttributeType;
	/**
	 * Constructor method for BookingAttribute
	 * @see parent::__construct()
	 * @param int $_sequence
	 * @param string $_name
	 * @param string $_value
	 * @param string $_attributeType
	 * @return SpeedwareStructBookingAttribute
	 */
	public function __construct($_sequence,$_name = NULL,$_value = NULL,$_attributeType = NULL)
	{
		parent::__construct(array('Sequence'=>$_sequence,'Name'=>$_name,'Value'=>$_value,'AttributeType'=>$_attributeType));
	}
	/**
	 * Get Sequence value
	 * @return int
	 */
	public function getSequence()
	{
		return $this->Sequence;
	}
	/**
	 * Set Sequence value
	 * @param int $_sequence the Sequence
	 * @return int
	 */
	public function setSequence($_sequence)
	{
		return ($this->Sequence = $_sequence);
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
	 * Get Value value
	 * @return string|null
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set Value value
	 * @param string $_value the Value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->Value = $_value);
	}
	/**
	 * Get AttributeType value
	 * @return string|null
	 */
	public function getAttributeType()
	{
		return $this->AttributeType;
	}
	/**
	 * Set AttributeType value
	 * @param string $_attributeType the AttributeType
	 * @return string
	 */
	public function setAttributeType($_attributeType)
	{
		return ($this->AttributeType = $_attributeType);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructBookingAttribute
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