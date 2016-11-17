<?php
  include_once 'objects/dal/icrud.php';
  class categoryDAL implements ICRUD {

    private $conn;
    private $table_name = "categories";

    public function setConnection($dbConnection){
      $this->conn = $dbConnection;
    }


    // used by select drop-down list
  	function read(){
  		//select all data
  		$query = "SELECT
  					id, name
  				FROM
  					" . $this->table_name . "
  				ORDER BY
  					name";

  		$stmt = $this->conn->prepare( $query );
  		$stmt->execute();

  		return $stmt;
  	}

  	// used to read category name by its ID
  	function readName($categoryId){
      $query = "SELECT name FROM " . $this->table_name . " WHERE id = ? limit 0,1";

  		$stmt = $this->conn->prepare( $query );
  		$stmt->bindParam(1, $categoryId);
  		$stmt->execute();

  		$row = $stmt->fetch(PDO::FETCH_ASSOC);

  		$name = $row['name'];
      return $name;

  	}

    function create(){
  		return null;
  	}

  	// read products
  	function readAll($from_record_num, $records_per_page){
      return null;
  	}

  	// used for paging products
  	public function countAll(){
      return null;
  	}

  	// used when filling up the update product form
  	function readOne(){
      return null;
  	}

  	// update the product
  	function update(){

  		return null;
  	}

  	// delete the product
  	function delete(){
      return null;
  	}

  }

 ?>
