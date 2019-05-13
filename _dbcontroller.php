<?php
class DBController {
	private $dbtype = "mysql:";
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "relaxdiy";
	private $conn;

	function __construct() {
		$this->conn = new PDO('mysql:host=localhost;dbname=relaxdiy',$this->user,$this->password);
	}

// needed for shopping cart => populate product grid / add courses to shopping cart
	function runQuery($query) {
		$result = $this->conn->prepare($query);
		$result->execute();
		$result->setFetchMode(PDO::FETCH_ASSOC);
		return $result->fetchAll();
	}

// needed for shopping cart => prepares SQL statement for inserting cart items to database booked_courses
	function prepare($query){
		$result = $this->conn->prepare($query);
		return $result;
	}

// needed for login and registratrion => checking if username is in database login_data
	function runQueryParam($query, $param){
		$result = $this->conn->prepare($query);
		$result->bindParam(':username', $param);
		$result->execute();
		$result->setFetchMode(PDO::FETCH_ASSOC);
		return $result->fetch();
	}

// needed for registration => adding new user to database login_data
	function regInsert($query, $username, $password){
		$result = $this->conn->prepare($query);
		$result->bindParam(':username', $username);
		$result->bindParam(':password_hashed', $password);
		$result->execute();
	}
}
?>
