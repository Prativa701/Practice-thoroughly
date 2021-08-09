<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Registration</title>
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
				<form action="register.php" method="POST" class="form">
					<div class="form-group row">
						<label for="" class="col-3">Name:</label>
						<div class="col-9">
							<input type="text" class="form-control form-control-sm" name="name" placeholder="Enter Your Name" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-3">Email:</label>
						<div class="col-9">
							<input type="email" class="form-control form-control-sm" name="email" placeholder="Enter Your Username" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-3">Password:</label>
						<div class="col-9">
							<input type="password" class="form-control form-control-sm" name="password" placeholder="Enter Your password" required>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-12">
							<button class="btn btn-success btn-block" type="submit">
								Register
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>
