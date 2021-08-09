<?php 
	require 'connectdb.php';

	if(isset($_GET['id']) && !empty($_GET['id'])){
		$id = (int)$_GET['id'];
		if($id <= 0){
			header("location: index.php");
			exit;
		}
		
		

		$sql = "SELECT * FROM users WHERE id = ".$id;
		$query = mysqli_query($conn, $sql);

		if(!$query){
			header("location: ./");
			exit;
		} 

		if(mysqli_num_rows($query) <= 0){
			header("location: ./");
			exit;
		}

		$data = mysqli_fetch_assoc($query);

	} else {
		header("location: ./");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h4 class="text-center">
					Register User
				</h4>
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<form action="update.php" method="post" class="form">
					<div class="form-group row">
						<label for="" class="col-3">Name:</label>
						<div class="col-9">
							<input type="text" class="form-control form-control-sm" name="name" placeholder="Enter Your Name" required value="<?php echo $data['name']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-3">Email:</label>
						<div class="col-9">
							<input type="email" class="form-control form-control-sm" name="email" placeholder="Enter Your Username" required value="<?php echo $data['email']; ?>">
						</div>
					</div>


					<div class="form-group row">
						<label for="" class="col-3">Password:</label>
						<div class="col-9">
							<input type="password" class="form-control form-control-sm" name="password" placeholder="Enter Your password" required>
						</div>
					</div>


					<div class="form-group row">
						<label for="" class="col-3">Role:</label>
						<div class="col-9">

							<select name="role" id="role" class="form-control form-control-sm">
								<option value="admin" <?php echo $data['role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
								<option value="user" <?php echo $data['role'] == 'user' ? 'selected' : ''; ?>>User</option>
							</select>

						</div>
					</div>




					<div class="form-group row">
						<label for="" class="col-3">Status:</label>
						<div class="col-9">

							<select name="status" id="status" class="form-control form-control-sm">
								<option value="active" <?php echo $data['status'] == 'active' ? 'selected' : ''; ?>>Active</option>
								<option value="inactive" <?php echo $data['status'] == 'inactive' ? 'selected' : ''; ?>>Inactive</option>
							</select>

						</div>
					</div>
					<div class="form-group row">
						<div class="col-12">
							<input type="hidden" name="row_id" value="<?php echo $data['id'];?>">
							<button class="btn btn-success btn-block" type="submit">
								Update
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>
