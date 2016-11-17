<?php
  include_once 'objects/dal/icrud.php';
  class userDAL implements ICRUD {
    // create product
  	function create(){

  		//write query
  		$query = "INSERT INTO
  					" . $this->table_name . "
  				SET
  					title = ?, first_name = ?, last_name = ?, client_type = ?, dob = ?";

  		$stmt = $this->conn->prepare($query);

  		// sanitize
      $this->title=htmlspecialchars(strip_tags($this->title));
  		$this->first_name=htmlspecialchars(strip_tags($this->first_name));
  		$this->last_name=htmlspecialchars(strip_tags($this->last_name));
  		$this->client_type=htmlspecialchars(strip_tags($this->client_type));
  		$this->dob=htmlspecialchars(strip_tags($this->dob));

  		$stmt->bindParam(1, $this->title);
  		$stmt->bindParam(2, $this->first_name);
  		$stmt->bindParam(3, $this->last_name);
  		$stmt->bindParam(4, $this->client_type);
  		$stmt->bindParam(5, $this->dob);

  		if($stmt->execute()){
  			return true;
  		}else{
  			return false;
  		}

  	}

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

  	// read products
  	function readAll($from_record_num, $records_per_page){

  		$query = "SELECT
  					title = ?, first_name = ?, last_name = ?, client_type = ?, dob = ?
  				FROM
  					" . $this->table_name . "
  				ORDER BY
  					name ASC
  				LIMIT ?, ?";

  		// prepare query statement
  		$stmt = $this->conn->prepare( $query );

  		// bind limit clause variables
  		$stmt->bindParam(1, $from_record_num, PDO::PARAM_INT);
  		$stmt->bindParam(2, $records_per_page, PDO::PARAM_INT);

  		// execute query
  		$stmt->execute();

  		return $stmt;
  	}

  	// used for paging products
  	public function countAll(){

  		$query = "SELECT id FROM " . $this->table_name . "";

  		$stmt = $this->conn->prepare( $query );
  		$stmt->execute();

  		$num = $stmt->rowCount();

  		return $num;
  	}

  	// used when filling up the update product form
  	function readOne(){

  		$query = "SELECT
  					title = ?, first_name = ?, last_name = ?, client_type = ?, dob = ?
  				FROM
  					" . $this->table_name . "
  				WHERE
  					id = ?
  				LIMIT
  					0,1";

  		$stmt = $this->conn->prepare( $query );
  		$stmt->bindParam(1, $this->id);
  		$stmt->execute();

  		$row = $stmt->fetch(PDO::FETCH_ASSOC);

  		$this->title = $row['title'];
  		$this->first_name = $row['first_name'];
  		$this->last_name = $row['last_name'];
  		$this->client_type = $row['client_type'];
      $this->dob = $row['dob'];
  	}

  	// update the product
  	function update(){

  		$query = "UPDATE
  					" . $this->table_name . "
  				SET
  					title = :title,
  					first_name = :first_name,
  					last_name = :last_name,
  					client_type  = :client_type
  				WHERE
  					id = :id";

  		$stmt = $this->conn->prepare($query);

  		// sanitize
      $this->title=htmlspecialchars(strip_tags($this->title));
  		$this->first_name=htmlspecialchars(strip_tags($this->first_name));
  		$this->last_name=htmlspecialchars(strip_tags($this->last_name));
  		$this->client_type=htmlspecialchars(strip_tags($this->client_type));
  		$this->dob=htmlspecialchars(strip_tags($this->dob));

  		$stmt->bindParam(1, $this->title);
  		$stmt->bindParam(2, $this->first_name);
  		$stmt->bindParam(3, $this->last_name);
  		$stmt->bindParam(4, $this->client_type);
  		$stmt->bindParam(5, $this->dob);

  		// execute the query
  		if($stmt->execute()){
  			return true;
  		}else{
  			return false;
  		}
  	}

  	// delete the product
  	function delete(){

  		$query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

  		$stmt = $this->conn->prepare($query);

  		// sanitize
  		$this->id=htmlspecialchars(strip_tags($this->id));

  		$stmt->bindParam(1, $this->id);

  		if($result = $stmt->execute()){
  			return true;
  		}else{
  			return false;
  		}
  	}
  }



 ?>
