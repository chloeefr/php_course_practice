<?php
include_once "abstractModel.php";
class Users extends abstractModel {

	// object properties
	public $title;
	public $first_name;
	public $last_name;
	public $client_type;
	public $dob;

	// Get and set the 'User' specific properties
	public function getTitle() {
		return $this->$title;
	}
	public function setTitle($title) {
		$this->$title = $title;
	}

	public function getFirstName(){
		return $this->$first_name;
	}
	public function setFirstName($first_name){
		$this->$first_name = $first_name;
	}

	public function getLastName(){
		return $this->$last_name;
	}
	public function setLastName($last_name){
		$this->$last_name = $last_name;
	}

	public function getClientType(){
		return $this->$client_type;
	}
	public function setClientType($client_type){
		$this->$client_type = $client_type;
	}

	public function getDob(){
		return $this->$dob;
	}
	public function setDob($dob){
		$this->$dob = $dob;
	}


}
