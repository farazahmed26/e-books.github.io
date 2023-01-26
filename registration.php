<?php

include 'db_conn.php';

session_start();
if (isset($_POST['submit'])) {

	$email = mysqli_real_escape_string($conn, $_POST['usermail']);
	$uname = ($_POST['uname']);
	$pass = ($_POST['password']);
	$cpass = ($_POST['cpassword']);
	$fname = ($_POST['fname']);
	$lname = ($_POST['lname']);
	$num = ($_POST['num']);
	$add = ($_POST['add']);
	$city = ($_POST['city']);
	$gender = ($_POST['gender']);

	$select = " SELECT * FROM customers WHERE email = '$email' && pass = '$pass'";

	$result = mysqli_query($conn, $select);

	if (mysqli_num_rows($result) > 0) {
		$error[] = 'user already exist';
	} else {
		if ($pass != $cpass) {
			$error[] = 'password not mathched!';
		} else {
			//$insert = "INSERT INTO `customers` (`f_name`, `l_name`, `u_name`, `email`, `pass`, `gen`, `phone`,'address', `city`) VALUES
			 //('$fname','$lname', '$uname', '$email', '$pass', '$gender', '$num','$add', '$city')";
			 $insert =  "INSERT INTO `customers`(`c_id`, `f_name`, `l_name`, `u_name`, `email`, `pass`, `gen`, `address`, `phone`, `city`) VALUES 
			 ('','$fname','$lname', '$uname', '$email', '$pass', '$gender','$add', '$num', '$city')";
			mysqli_query($conn, $insert);
			header('location:login.php');
		}
	}
}





?>




<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Bookland-Book Store Ecommerce Website" />
	<meta property="og:title" content="Bookland-Book Store Ecommerce Website" />
	<meta property="og:description" content="Bookland-Book Store Ecommerce Website" />
	<meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

	<!-- PAGE TITLE HERE -->
	<title>e-Books | Registration</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

</head>

<body>
	<div class="page-wraper">
		<div id="loading-area" class="preloader-wrapper-1">
			<?php include('loader.php'); ?>
		</div>
		<!-- Header -->
		<?php include('nav.php');  ?>
		<!-- Header End -->

		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Registration</h1>

					</div>
				</div>
			</div>
			<!-- inner page banner End-->

			<!-- contact area -->
			<section class="content-inner shop-account">
				<!-- Product -->
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="login-area">
								<form action="" method="post" enctype="multipart/form-data">
									<h4 class="text-secondary">Registration</h4>
									<p class="font-weight-600">If you don't have an account with us, please Register
										yourself.</p>

									<?php
									if (isset($error)) {
										foreach ($error as $error) {
											echo '<span class="error-msg">' . $error . '</span>';
										}
									}
									?>

									<div class="mb-4">
										<label class="label-title">First Name *</label>
										<input name="fname" required="" class="form-control" placeholder="Your First Name" type="text">
									</div>
									<div class="mb-4">
										<label class="label-title">Last Name *</label>
										<input name="lname" required="" class="form-control" placeholder="Your Last Name" type="text">
									</div>

									<div class="mb-4">
										<label class="label-title">Username *</label>
										<input name="uname" required="" class="form-control" placeholder="Your Username" type="text">
									</div>
									<div class="mb-4">
										<label class="label-title">Email address*</label>
										<input name="usermail" required="" class="form-control" placeholder="Your Email" type="email">
									</div>
									<div class="mb-4">
										<label class="label-title">Gender * </label>
										<br>
										<!-- <label for="male">Male</label> -->
										<input type="radio" name="gender" id="male" value="male"> Male
										<!-- <label for="female">Female</label> -->
										<input type="radio" name="gender" id="female" value="female"> Female
										<!-- <label for="female">Other</label> -->
										<input type="radio" name="gender" id="other" value="other"> Other
									</div>
									<div class="mb-4">
										<label class="label-title">Cell No *</label>
										<input name="num" required class="form-control" placeholder="Your Mobile No" type="number">
									</div>

									<div class="mb-4">
										<label class="label-title">Address *</label>
										<input name="add" required="" class="form-control" placeholder="Your address" type="text">
									</div>

									<div class="mb-4">
										<?php

										$city = array("Karachi", "Hyderabad", "Lahore", "Peshawar", "Quetta", "Islamabad");

										?>
										<label class="label-title">city *</label>
										<select name="city" class="form-control">

											<?php
											echo " <option> Choose city </option>";
											foreach ($city as $value) {
												echo " <option>$value</option>";
											}
											?>
										</select>
									</div>
									<div class="mb-4">
										<label class="label-title">Password *</label>
										<input name="password" required="" class="form-control " placeholder="Type Password" type="password">
									</div>
									<div class="mb-4">
										<label class="label-title">Confirm Password *</label>
										<input name="cpassword" required="" class="form-control " placeholder="Confirm Password" type="password">
									</div>

									<!-- <div class="mb-4">
										<label class="label-title">Upload Profile *</label>
										<input name="pic" required="" class="form-control " type="file">
									</div> -->

									<div class="mb-5">
										<small>Your personal data will be used to support your experience throughout
											this website, to manage access to your account, and for other purposes
											described in our <a href="privacy-policy.html">privacy policy</a>.</small>
									</div>
									<div class="text-left">
										<button type="submit" value="register now" name="submit" class="btn btn-primary btnhover w-100 me-2">Register</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Product END -->
			</section>
			<!-- contact area End-->
		</div>


		<?php
		include('footer.php');
		?>

		<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
	</div>

	<!-- JAVASCRIPT FILES ========================================= -->
	<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
	<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
	<script src="js/custom.js"></script><!-- CUSTOM JS -->
	<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->


</body>

</html>