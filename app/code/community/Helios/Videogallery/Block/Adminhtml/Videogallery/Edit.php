<?php
	
class Helios_Videogallery_Block_Adminhtml_Videogallery_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "videogallery_id";
				$this->_blockGroup = "videogallery";
				$this->_controller = "adminhtml_videogallery";
				$this->_updateButton("save", "label", Mage::helper("videogallery")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("videogallery")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("videogallery")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("videogallery_data") && Mage::registry("videogallery_data")->getId() ){

				    return Mage::helper("videogallery")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("videogallery_data")->getId()));

				} 
				else{

				     return Mage::helper("videogallery")->__("Add Item");

				}
		}
}