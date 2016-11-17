<?php
include_once "abstractModel.php";
class Product extends abstractModel {

	// object properties
	public $name;
	public $price;
	public $description;
	public $category_id;

	// Get and set the 'Product' specific properties
	public function getName() {
		return $this->$name;
	}
	public function setName($name) {
		$this->$name = $name;
	}

	public function getPrice() {
		return $this->$price;
	}
	public function setPrice($price) {
		$this->$price = $price;
	}

	public function getDescription() {
		return $this->$description;
	}
	public function setDescription($description) {
		$this->$description = $description;
	}

	public function getCategoryId() {
		return $this->$categoryId;
	}
	public function setCategoryId($category_id) {
		$this->$category_id = $category_id;
	}


}
?>
