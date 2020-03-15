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


	if(isset($_POST['submit']))
	{
		$amount      = $_POST['amount'];
		$terms       = $_POST['terms'];
		$cooperative = $_POST['checkbox'];
	}


?>

<body>



	<div>
		<form action="LoanInformationDelaCruzBruceJames.php" method="post">
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
						
						<center>
						<h2>LOAN AMOUNT</h2>
						</center>

						<br>
						<br>

					
						<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">Select Loan Amount:</th>
						    </tr>
						  </thead>

						  <tbody>
						    <tr>
						      <td>
						      	<input class="form-check-input" type="radio" name="amount" value="Php 5,000.00">
						      	<label class="form-check-label ml-1">Php 5,000.00</label>
						      </td>

						    </tr>

						    <tr>
								<td>
									<input class="form-check-input" type="radio" name="amount" value="Php 10,000.00">
									<label class="form-check-label ml-1">Php 10,000.00</label>
								</td>
						    </tr>

						    <tr>
								<td>
									<input class="form-check-input" type="radio" name="amount" value="Php 15,000.00">
									<label class="form-check-label ml-1">Php 15,000.00</label>
								</td>
						    </tr>

						    <tr>
								<td>
									<input class="form-check-input" type="radio" name="amount" value="Php 20,000.00">
									<label class="form-check-label ml-1">Php 20,000.00</label>
								</td>
						    </tr>

						    <tr>
								<td>
									<input class="form-check-input" type="radio" name="amount" value="Php 25,000.00">
									<label class="form-check-label ml-1">Php 25,000.00</label>
								</td>
						    </tr>
						  </tbody>
						</table>

						<table class="table">
							<thead>
								<tr>
									<th scope="col">Terms of Payment:</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>
										<input class="form-check-input" type="radio" name="terms" value="6 mos">
										<label class="form-check-label ml-1">6 mos</label>
									</td>
								</tr>

								<tr>
									<td>
										<input class="form-check-input" type="radio" name="terms" value="12 mos">
										<label class="form-check-label ml-1">12 mos</label>
									</td>
								</tr>

								<tr>
									<td>
										<input class="form-check-input" type="radio" name="terms" value="24 mos">
										<label class="form-check-label ml-1">24 mos</label>
									</td>
								</tr>
							</tbody>
						</table>

						<table class="table">
							<thead>
								<tr>
									<th scope="col">Cooperative Officer:</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>
										<input class="form-check-input" type="checkbox" name="checkbox" value="Yes">
										<label class="form-check-label ml-1">Yes</label>
									</td>
								</tr>
							</tbody>
						</table>

						<br>

						<center>
						<input class="btn btn-primary" type="submit" name="submit" value="Confirm Loan">
						<input class="btn btn-secondary" type="reset" name="clear" value="Clear All">
						</center>


					</div>

					<div class="col-sm-4"></div>

				</div>
			</div>
		</form>
	</div>

</body>
</html>
