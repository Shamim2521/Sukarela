<?php 
require_once('config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$query = "select * from admin where username= '".$_POST["username"]."' and password = '".$_POST["password"]."'";
	$result = $mysqli->query($query) or die($mysqli->error);

	if ($result->fetch_assoc()) {
		$_SESSION['User'] = $_POST['username'];
		header("location:dashboard.php");
	}
	else{
		echo "Email or Password is incorrect";
	}
}
?>