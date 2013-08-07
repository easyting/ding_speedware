<?php
/**
 * File for class SpeedwareStructTree
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
/**
 * This class stands for SpeedwareStructTree originally named Tree
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedadmin.dk/public/speedadmin.asmx?WSDL}
 * @package Speedware
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130801-01
 * @date 2013-08-06
 */
class SpeedwareStructTree extends SpeedwareWsdlClass
{
	/**
	 * The TreeID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $TreeID;
	/**
	 * The ParentID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $ParentID;
	/**
	 * The TreeTypeID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $TreeTypeID;
	/**
	 * The RessourceID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $RessourceID;
	/**
	 * The RessourceTypeID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $RessourceTypeID;
	/**
	 * The NodeName
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $NodeName;
	/**
	 * The NodeDescription
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $NodeDescription;
	/**
	 * The Position
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Position;
	/**
	 * Constructor method for Tree
	 * @see parent::__construct()
	 * @param int $_treeID
	 * @param int $_parentID
	 * @param int $_treeTypeID
	 * @param int $_ressourceID
	 * @param int $_ressourceTypeID
	 * @param string $_nodeName
	 * @param string $_nodeDescription
	 * @param string $_position
	 * @return SpeedwareStructTree
	 */
	public function __construct($_treeID,$_parentID,$_treeTypeID,$_ressourceID,$_ressourceTypeID,$_nodeName = NULL,$_nodeDescription = NULL,$_position = NULL)
	{
		parent::__construct(array('TreeID'=>$_treeID,'ParentID'=>$_parentID,'TreeTypeID'=>$_treeTypeID,'RessourceID'=>$_ressourceID,'RessourceTypeID'=>$_ressourceTypeID,'NodeName'=>$_nodeName,'NodeDescription'=>$_nodeDescription,'Position'=>$_position));
	}
	/**
	 * Get TreeID value
	 * @return int
	 */
	public function getTreeID()
	{
		return $this->TreeID;
	}
	/**
	 * Set TreeID value
	 * @param int $_treeID the TreeID
	 * @return int
	 */
	public function setTreeID($_treeID)
	{
		return ($this->TreeID = $_treeID);
	}
	/**
	 * Get ParentID value
	 * @return int
	 */
	public function getParentID()
	{
		return $this->ParentID;
	}
	/**
	 * Set ParentID value
	 * @param int $_parentID the ParentID
	 * @return int
	 */
	public function setParentID($_parentID)
	{
		return ($this->ParentID = $_parentID);
	}
	/**
	 * Get TreeTypeID value
	 * @return int
	 */
	public function getTreeTypeID()
	{
		return $this->TreeTypeID;
	}
	/**
	 * Set TreeTypeID value
	 * @param int $_treeTypeID the TreeTypeID
	 * @return int
	 */
	public function setTreeTypeID($_treeTypeID)
	{
		return ($this->TreeTypeID = $_treeTypeID);
	}
	/**
	 * Get RessourceID value
	 * @return int
	 */
	public function getRessourceID()
	{
		return $this->RessourceID;
	}
	/**
	 * Set RessourceID value
	 * @param int $_ressourceID the RessourceID
	 * @return int
	 */
	public function setRessourceID($_ressourceID)
	{
		return ($this->RessourceID = $_ressourceID);
	}
	/**
	 * Get RessourceTypeID value
	 * @return int
	 */
	public function getRessourceTypeID()
	{
		return $this->RessourceTypeID;
	}
	/**
	 * Set RessourceTypeID value
	 * @param int $_ressourceTypeID the RessourceTypeID
	 * @return int
	 */
	public function setRessourceTypeID($_ressourceTypeID)
	{
		return ($this->RessourceTypeID = $_ressourceTypeID);
	}
	/**
	 * Get NodeName value
	 * @return string|null
	 */
	public function getNodeName()
	{
		return $this->NodeName;
	}
	/**
	 * Set NodeName value
	 * @param string $_nodeName the NodeName
	 * @return string
	 */
	public function setNodeName($_nodeName)
	{
		return ($this->NodeName = $_nodeName);
	}
	/**
	 * Get NodeDescription value
	 * @return string|null
	 */
	public function getNodeDescription()
	{
		return $this->NodeDescription;
	}
	/**
	 * Set NodeDescription value
	 * @param string $_nodeDescription the NodeDescription
	 * @return string
	 */
	public function setNodeDescription($_nodeDescription)
	{
		return ($this->NodeDescription = $_nodeDescription);
	}
	/**
	 * Get Position value
	 * @return string|null
	 */
	public function getPosition()
	{
		return $this->Position;
	}
	/**
	 * Set Position value
	 * @param string $_position the Position
	 * @return string
	 */
	public function setPosition($_position)
	{
		return ($this->Position = $_position);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SpeedwareWsdlClass::__set_state()
	 * @uses SpeedwareWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SpeedwareStructTree
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