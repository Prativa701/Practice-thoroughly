<?php

/*
		Delete Operation

			a. DROP 
				table, Database delete 
				Syntax: 
					DROP TABLE/DATABASE <table_name>;

			b. DELETE 
				Delete row from a table 
				=> DELETE FROM table 
					WHERE condition;

			c. TRUNCATE
				=> Reset a table
					TRUNCATE table

					


	*/

    require "connectdb.php"; //database_connection 


if(isset($_GET['id']) && !empty($_GET['id'])){
    // valid id
    $id = (int)$_GET['id'];		

    $sql = "DELETE FROM users WHERE id = ".$id;

    /// ............ WHERE id IN (1,2,3)

    $query = mysqli_query($conn, $sql);

    header("location: index.php");
    exit;

} else {
    header("location: index.php");
    exit;
}

?>