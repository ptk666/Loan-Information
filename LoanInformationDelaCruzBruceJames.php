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

	// $officer = $_POST['checkbox'];
	$amount = $_POST['amount'];
	$inputterms = $_POST['terms'];
	$totalamount = " ";
	$interest = " ";
	$monthlydues = " ";
	$name = "Dela Cruz, Bruce James B.";

	if(isset($_POST['checkbox']))
	{
		$officer = 1;
	}
	else
	{
		$officer = 0;
	}


	if($officer == 1)
	{
		
		if($amount == "Php 5,000.00")
		{
			$interest    = "Php 250.00";
			$totalamount = "Php 5,250.00";
			if($inputterms == "6 mos")
			{
				$monthlydues = "Php 875.00";
			
			}
			elseif($inputterms == "12 mos")
			{
				$monthlydues = "Php 437.50";
			}
			elseif($inputterms == "24 mos")
			{
				$monthlydues = "Php 218.75";
			}

		}
		if($amount == "Php 10,000.00")
		{
			$interest    = "Php 500.00";
			$totalamount = "Php 10,500.00";
			if($inputterms == "6 mos")
			{
				$monthlydues = "Php 1,750.00";
			}
			elseif($inputterms == "12 mos")
			{
				$monthlydues = "Php 875.00";
			}
			elseif($inputterms == "24 mos")
			{
				$monthlydues = "Php 437.50";
			}
		}
		if($amount == "Php 15,000.00")
		{
			$interest    = "Php 750.00";
			$totalamount = "Php 15,750.00";
			if($inputterms == "6 mos")
			{
				$monthlydues = "Php 2,625.00";
			}
			elseif($inputterms == "12 mos")
			{
				$monthlydues = "Php 1,312.50";
			}
			elseif($inputterms == "24 mos")
			{
				$monthlydues = "Php 656.25";
			}
		}
		if($amount == "Php 20,000.00")
		{
			$interest    = "Php 1000.00";
			$totalamount = "Php 21,000.00";
			if($inputterms == "6 mos")
			{
				$monthlydues = "Php 3,500.00";
			}
			elseif($inputterms == "12 mos")
			{
				$monthlydues = "Php 1,750.00";
			}
			elseif($inputterms == "24 mos")
			{
				$monthlydues = "Php 875.00";
			}
		}
		if($amount == "Php 25,000.00")
		{
			$interest    = "Php 1,250.00";
			$totalamount = "Php 26,250.00";
			if($inputterms == "6 mos")
			{
				$monthlydues = "Php 4,375.00";
			}
			elseif($inputterms == "12 mos")
			{
				$monthlydues = "Php 2,187.50";
			}
			elseif($inputterms == "24 mos")
			{
				$monthlydues = "Php 1,093.75";
			}
		}
	}


	if($officer == 0)
	{
		if($amount == "Php 5,000.00")
		{
			$interest    = "Php 500.00";
			$totalamount = "Php 5,500.00";
			if($inputterms == "6 mos")
			{
				$monthlydues = "Php 916.67";
			}
			elseif($inputterms == "12 mos")
			{
				$monthlydues = "Php 458.33";
			}
			elseif($inputterms == "24 mos")
			{
				$monthlydues = "Php 229.17";
			}
		}
		if($amount == "Php 10,000.00")
		{
			$interest    = "Php 1,000.00";
			$totalamount = "Php 11,000.00";
			if($inputterms == "6 mos")
			{
				$monthlydues = "Php 1,833.33";
			}
			elseif($inputterms == "12 mos")
			{
				$monthlydues = "Php 916.67";
			}
			elseif($inputterms == "24 mos")
			{
				$monthlydues = "Php 458.33";
			}
		}
		if($amount == "Php 15,000.00")
		{
			$interest    = "Php 1,500.00";
			$totalamount = "Php 16,500.00";
			if($inputterms == "6 mos")
			{
				$monthlydues = "Php 2,750.00";
			}
			elseif($inputterms == "12 mos")
			{
				$monthlydues = "Php 1,375.00";
			}
			elseif($inputterms == "24 mos")
			{
				$monthlydues = "Php 687.50";
			}
		}
		if($amount == "Php 20,000.00")
		{
			$interest    = "Php 2,000.00";
			$totalamount = "Php 22,000.00";
			if($inputterms == "6 mos")
			{
				$monthlydues = "Php 3,666.67";
			}
			elseif($inputterms == "12 mos")
			{
				$monthlydues = "Php 1,833.33";
			}
			elseif($inputterms == "24 mos")
			{
				$monthlydues = "Php 916.67";
			}
		}
		if($amount == "Php 25,000.00")
		{
			$interest    = "Php 2,500.00";
			$totalamount = "Php 27,500.00";
			if($inputterms == "6 mos")
			{
				$monthlydues = "Php 4,583.33";
			}
			elseif($inputterms == "12 mos")
			{
				$monthlydues = "Php 2,291.67";
			}
			elseif($inputterms == "24 mos")
			{
				$monthlydues = "Php 1,145.83";
			}
		}

	}



	

	// replacing format of date
	$time = date("M d, Y");

	// replacing mos to months
	$terms = str_replace("mos", "Months", $inputterms);


if(isset($_POST['submit1']))
{
	header("Location: LoanConfirmationDelaCruzBruceJames.php");
}


?>

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
						
						<center>
						<h2>LOAN INFORMATION</h2>
					


						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Date:</span>
							</div>
								<input class="form-control" type="text" name="date" value=" <?php echo $time; ?>" readonly>
						</div>


						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Name:</span>
							</div>
								<input class="form-control" type="text" name="name" value="<?php echo $name; ?>" readonly>
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Amount:</span>
							</div>
								<input class="form-control" type="text" name="amount" value="<?php echo $amount; ?>" readonly>
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Terms of Payment:</span>
							</div>
								<input class="form-control" type="text" name="terms" value="<?php echo $terms; ?>" readonly>
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Interest (%):</span>
							</div>
								<input class="form-control" type="text" name="interest" value="<?php echo $interest; ?>" readonly>
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Total Amount:</span>
							</div>
								<input class="form-control" type="text" name="total" value="<?php echo $totalamount; ?>" readonly>
						</div>

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Monthly Dues:</span>
							</div>
								<input class="form-control" type="text" name="monthly" value="<?php echo $monthlydues; ?>" readonly>
						</div>

						<br>

						<input class="btn btn-primary" type="submit" name="submit1" value="Submit">
						<input class="btn btn-secondary" type="button" name="back" value="Back" onclick="history.back()">


						</center>

						<br>

					</div>

					<div class="col-sm-4"></div>

				</div>
			</div>
		</form>
	</div>


</body>
</html>