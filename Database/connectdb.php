<?php 
$conn = mysqli_connect("localhost", "root", "", "db_prativa");	//servername,id,psw,databasename	
if(!$conn){
	$_SESSION['error'] = "Error establishing database connection.";
	header("location: ./");
	exit;	
}
