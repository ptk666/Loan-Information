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

<?php

	if(isset($_POST['login']))
	{
		header("Location: LoginDelaCruzBruceJames.php");
	}

?>

<body>

<div>
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

			<div class="col-sm-4 text-center">
				
				<p>Thank you <b>Bruce James B. Dela Cruz</b></p>				<p>Your loan will be processed for three (3) working days only.</p>

				<br>

				<input class="btn btn-primary" type="button" name="login" value="Back to Login Page" onclick="history.go(-3)">


			</div>

			<div class="col-sm-4"></div>
		</div>
	</div>
</div>

</body>
</html>