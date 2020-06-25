
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 

</head>
<body>

<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h2> User Registration </h2>
		<form action="RegistrationSQL.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>
		<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
				<button type="submit" class="btn btn-primary">Register</button>
			
		</form>
	</div>
	</div>



</div>
</body>
