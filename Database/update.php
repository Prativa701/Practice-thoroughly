<?php 
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";*/
	/*

		
			INSERT INTO table SET 
				column_name = value,
				column_name_1 = value_1,
				................. ,
				column_name_n = value_n



			UPDATE table SET 
				column_name = value,
				column_name_1 = value_1,
				................. ,
				column_name_n = value_n
			WHERE condition 				// optional






	*/
	require 'connectdb.php';
	if(isset($_POST['id']) && !empty($_POST['id'])){
		// update

		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			header('location: index.php');
			exit;
		}

		$email = $_POST['email'];

		$name = $_POST['name'];

		$role = $_POST['role'];
		$status = $_POST['status'];
		$id = $_POST['id'];
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

		$sql = "UPDATE users SET
					name = '".$name."',
					email = '".$email."',
					role = '".$role."',
					password = '".$password."',
					status = '".$status."'
				WHERE id =  ".$id;

		$query = mysqli_query($conn, $sql);

		header("location: ./");
		exit;
	} else {
		header("location: ./");
		exit;
	}
