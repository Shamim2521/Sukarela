<?php
include 'header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

	//mysql credentials
	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "login";
	
	$u_name = filter_var($_POST["name"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
	$u_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$u_address = filter_var($_POST["address"], FILTER_SANITIZE_STRING);
	$u_qualification = filter_var($_POST["qualification"], FILTER_SANITIZE_STRING);

	if (empty($u_name)){
		die("Please enter your name");
	}
	if (empty($u_email) || !filter_var($u_email, FILTER_VALIDATE_EMAIL)){
		die("Please enter valid email address");
	}
		
	if (empty($u_address)){
		die("Please enter your address");
	}	

	if (empty($u_qualification)){
		die("Please enter your qualification");
	}

	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}	
	
	$statement = $mysqli->prepare("INSERT INTO volunteer (name, email, address, qualification ) VALUES(?, ?, ?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('ssss', $u_name, $u_email, $u_address, $u_qualification); //bind values and execute insert query
	
	if($statement->execute()){
		echo "<div class='form-style-5'> Hello " .$u_name. "!, your message has been saved!</div>";
	}else{
		print $mysqli->error; //show mysql error if any
	}
}
include 'footer.php';
?>