<?php

	$username = "admin";
	$password = "12345";
	$error = " ";
	$success = " ";

	if(isset($_POST['submit']))
	{
		if($_POST['username'] == $username)
		{
			if($_POST['password'] == $password)
			{
				$success = "Password Accepted";
				header("Location: LoanAmountDelaCruzBruceJames.php");
			}
			else 
			{
				$error = "Username or Password does not match";
			}
		}
		else
		{
			$error = "Username or Password does not match";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Machine Problem #2 | PHP</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</head>
<style>
	hr {
		height: 1px;
		background-color: green;
	}
	h1 {
		color: green;
	}
	.input-group {
		padding-top: 10px;
	}
</style>
<body>



	<div>
		<form action="" method="post">
			<div class="container-fluid">
				<div class="form-row">
					<div class="col-sm-12">
						
						<center>
							<h1>RICHARD GWAPO COOPERATIVE INCORPORATED</h1>
							<b><p>Forever Gwapo St., Mandaluyong City</p>
							<p>Telephone #: 143-4456</p></b>
						</center>

						<hr>

					</div>

						<div class="col-sm-4"></div>

						<div class="col-sm-4">
							
							<h2 class="text-center">USERNAME & PASSWORD ENTRY:</h2>

							<br>

							<div class="input-group mb-1">
								<div class="input-group-prepend">
									<span class="input-group-text">User name: </span>
								</div>
								<input class="form-control" type="text" name="username" required>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Password: </span>
								</div>
								<input class="form-control" type="password" name="password"required>
							</div>

							<center>
							<input class="btn btn-primary" type="submit" name="submit" value="Accept">
							<input class="btn btn-secondary ml-1" type="reset" name="clear" value="Reset">
							</center>

							<center class="mt-3">
								<p class="error"><b> <?php echo $error; ?> </b></p>
								<p class="success"><b> <?php echo $success; ?> </b></p>
							</center>

						</div>

						<div class="col-sm-4"></div>

				</div>
			</div>
		</form>
	</div>



</body>
</html>