<?php 
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";*/
	session_start();
	require "connectdb.php";

	if(isset($_POST, $_POST['email'], $_POST['password']) && !empty($_POST)){
		// post is not empty
		$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);	// format
		if(!$email){
			$_SESSION['error'] = "Invalid email format.";
			header("location: ./");
			exit;	
		}

		if(empty($_POST['password'])){
			$_SESSION['error'] = "Password cannot be empty.";
			header("location: ./");
			exit;
		}


		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


		$name = $_POST['name'];

		$role = array("admin", "user");
		$status = array("active", "inactive");

		$random = rand(0,1);

		$sql = "INSERT INTO users SET 
					name = '".$name."',
					email = '".$email."',
					password = '".$password."',
					role = '".$role[$random]."',
					status = '".$status[$random]."'
				";


		$query = mysqli_query($conn, $sql);

		if($query){
			header("location: login-form.php");
			exit;
		} else {
			$_SESSION['error'] = "Sorry! Data could not be stored at this moment.";
			header("location: ./");
			exit;
		}

	} else {
		// post is empty
		$_SESSION['error'] = "Fill the form first.";
		header("location: ./");
		exit;
	}
