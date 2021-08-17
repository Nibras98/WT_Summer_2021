<?php

	//require_once('../db/db.php');
	$host 	= "localhost";
	$dbuser = "root";
	$dbpass	= "";
	$dbname	= "nursingservice";

	function dbConnection(){

		global $host;
		global $dbuser;
		global $dbpass;
		global $dbname;

		return $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	}

	function getByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from register where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function getByName($username){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from register where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function getByEmail($email){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from register where email='{$email}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}


	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from register where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			return true;
		}else{
			return false;
		}
	}


	function insert($register){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
       
		$sql = "insert into register values('', '{$register['name']}', '{$register['email']}', '{$register['contact_number']}', '{$register['username']}', '{$register['gender']}', '{$register['dob']}', '{$register['address']}', '{$register['user_type']}', '{$register['password']}', '{$register['confirm_password']}')";		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

//complain
	function complain_create($complain){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into complain values('', '{$complain['complain_type']}', '{$complain['description']}', '{$complain['user_id']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	
//view complain history
	function getComplainById($my_id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from complain where user_id='{$my_id}'";
		$result = mysqli_query($conn, $sql);
		$complain = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($complain, $row);
		}

		return $complain;
	}

//view All complain history
function getAllComplain($my_id){
	$conn = dbConnection();

	if(!$conn){
		echo "DB connection error";
	}

	$sql = "select * from complain";
	$result = mysqli_query($conn, $sql);
	$complain = [];

	while($row = mysqli_fetch_assoc($result)){
		array_push($complain, $row);
	}

	return $complain;
}

//view Purchase history
function getPurchaseHistory($my_id){
	$conn = dbConnection();

	if(!$conn){
		echo "DB connection error";
	}

	$sql = "select * from purchase_history where user_id='{$my_id}'";
	$result = mysqli_query($conn, $sql);
	$my_purchase = [];

	while($row = mysqli_fetch_assoc($result)){
		array_push($my_purchase, $row);
	}

	return $my_purchase;
}

function getAllPurchaseHistory($my_id){
	$conn = dbConnection();

	if(!$conn){
		echo "DB connection error";
	}

	$sql = "select * from purchase_history";
	$result = mysqli_query($conn, $sql);
	$my_purchase = [];

	while($row = mysqli_fetch_assoc($result)){
		array_push($my_purchase, $row);
	}

	return $my_purchase;
}



	function update($register){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update register set name='{$register['name']}', address='{$register['address']}', contact_number='{$register['contact_number']}', gender='{$register['gender']}', dob='{$register['dob']}' where id='{$register['id']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateAdmin($register){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update register set name='{$register['name']}', address='{$register['address']}', contact_number='{$register['contact_number']}', gender='{$register['gender']}', dob='{$register['dob']}' where id='{$register['id']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function delete($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "delete from  users where id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function getEmail($email)
    {
        $conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select email from register where email='{$email}'";
		$result = mysqli_query($conn, $sql);
        $userEmail = mysqli_fetch_assoc($result);
        
        return $userEmail;
	}


	function getUsername($username){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select username from register where username like '%{$username}%'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		mysqli_close($conn);
		return $row;
	}





?>