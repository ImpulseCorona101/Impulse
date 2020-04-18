<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../Styles/buyer_reg.css">
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
	<title>Buyer Registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
	<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
    body{
        margin: 0;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f5f8fa;
    }

    .my-form, .login-form
    {
        font-family: Raleway, sans-serif;
    }

    .my-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }

    </style>
</head>

<body>
	<main class="my-form">
		<div class="cotainer">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
					<div class="card-header"><h4 style="font-style:bold;">Register</h4></div>
						<div class="card-body">
							<form name="my-form" action="BuyerRegistration.php" method="post">
								<div class="form-group row">
									<label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
									<div class="col-md-6">
										<input type="text" id="full_name" class="form-control" name="name" placeholder="Enter Your Name" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
									<div class="col-md-6">
										<input type="text" id="phone_number" class="form-control" name="phonenumber" placeholder="Phone Number" required>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
									<div class="col-md-6">
										<input type="email" id="email_address" class="form-control" name="mail" placeholder="E-Mail ID" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="present_address" class="col-md-4 col-form-label text-md-right">Present Address</label>
									<div class="col-md-6">
										<textarea type="text" id="present_address" class="form-control" rows="4" name="address" placeholder="Address" required></textarea>
									</div>
								</div>

								<div class="form-group row">
									<label for="campany_name" class="col-md-4 col-form-label text-md-right">Company Name</label>
									<div class="col-md-6">
										<input type="text" id="campany_name" class="form-control" name="company_name" placeholder="Company name" required>
									</div>
								</div>			

								<div class="form-group row">
									<label for="lisence" class="col-md-4 col-form-label text-md-right">Lisence</label>
									<div class="col-md-6">
										<input type="text" id="lisence" class="form-control" name="license" placeholder="license" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="account1" class="col-md-4 col-form-label text-md-right">Bank Account No.</label>
									<div class="col-md-6">
										<input type="text" id="account1" class="form-control" name="account" placeholder="Bank Account number" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="account2" class="col-md-4 col-form-label text-md-right">PAN No.</label>
									<div class="col-md-6">
										<input type="text" id="account2" class="form-control" name="pan" placeholder="Pan number" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
									<div class="col-md-6">
										<input type="text" id="user_name" class="form-control" name="username" placeholder="Username" required>
									</div>
								</div>


								<div class="form-group row">
									<label for="p1" class="col-md-4 col-form-label text-md-right">Password</label>
									<div class="col-md-6">
										<input id="p1" class="form-control" type="password" name="password" placeholder="Password" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="p2" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
									<div class="col-md-6">
										<input id="p2" class="form-control" type="password" name="confirmpassword" placeholder="Confirm Password" required>
									</div>
								</div>

								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary" name="register" value="Register">
										Register
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

</body>

</html>


<?php

include("../Includes/db.php");

if (isset($_POST['register'])) {

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$company_name = mysqli_real_escape_string($con, $_POST['company_name']);
	$license = mysqli_real_escape_string($con, $_POST['license']);
	$account = mysqli_real_escape_string($con, $_POST['account']);
	$pan = mysqli_real_escape_string($con, $_POST['pan']);
	$mail = mysqli_real_escape_string($con, $_POST['mail']);
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

	$ciphering = "AES-128-CTR";
	$iv_length = openssl_cipher_iv_length($ciphering);
	$options = 0;
	$encryption_iv = '2345678910111211';
	$encryption_key = "DE";

	$encryption = openssl_encrypt(
		$password,
		$ciphering,
		$encryption_key,
		$options,
		$encryption_iv
	);

	if (strcmp($password, $confirmpassword) == 0) {

		$query = "insert into buyerregistration (buyer_name,buyer_phone,buyer_addr,buyer_comp,
		buyer_license,buyer_bank,buyer_pan,buyer_mail,buyer_username,buyer_password) 
		values ('$name','$phonenumber','$address','$company_name','$license','$account','$pan',
		'$mail','$username','$encryption')";

		$run_register_query = mysqli_query($con, $query);
		echo "<script>alert('SucessFully Inserted');</script>";
		echo "<script>window.open('BuyerLogin.php','_self')</script>";
	} else if (strcmp($password, $confirmpassword) != 0) {
		echo "<script>
			alert('Password and Confirm Password Should be same');
		</script>";
	}
}


?>