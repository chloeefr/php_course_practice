<?php
include_once "abstractModel.php";
class Category extends abstractModel {

	// object properties
	public $name;

	// Get and set the 'Category' specific properties
	public function getName() {
		return $this->$name;
	}
	public function setName($name) {
		$this->$name = $name;
	}

	
}
