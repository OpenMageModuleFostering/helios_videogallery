<?php


class Helios_Videogallery_Block_Adminhtml_Videogallery extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_videogallery";
	$this->_blockGroup = "videogallery";
	$this->_headerText = Mage::helper("videogallery")->__("Videogallery Manager");
	$this->_addButtonLabel = Mage::helper("videogallery")->__("Add New Item");
	parent::__construct();
	
	}

}