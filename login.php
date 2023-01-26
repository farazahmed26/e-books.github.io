<?php

include ('db_conn.php');

session_start();

if (isset($_POST['submit'])) {

	$email = mysqli_real_escape_string($conn, $_POST['usermail']);
	$pass = $_POST['password'];

	$select = " SELECT * FROM customers WHERE email = '$email' and pass = '$pass'";

	$result = mysqli_query($conn, $select);
	$data = mysqli_fetch_assoc($result);

	if (mysqli_num_rows($result) > 0) {
		$_SESSION['usermail'] = $data['email'];

		$_SESSION['userid'] = $data['c_id'];
		$_SESSION['username'] = $data['f_name'];
		$_SESSION['userpic'] = $data['profile'];

		header("location:index.php");
	} 
	else
	 {
		$errors[] = "<h4 style='color:red;'>Invalid email or password</h4>";
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
	<meta name="description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:title" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html"/>
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>e-Books | Sign In</title>
	
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
	<?php include('loader.php') ?>
		<!-- Header -->
		<?php
		include('nav.php');
		?>
		<!-- Header End -->

		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Login</h1>
						
					</div>
				</div>
			</div>
			<!-- inner page banner End-->

			<!-- contact area -->
			<section class="content-inner shop-account">
				<!-- Product -->
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="login-area">
								<div class="tab-content">
									<h4>NEW CUSTOMER</h4>
									<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									<a class="btn btn-primary btnhover m-r5 button-lg radius-no" href="registration.php">CREATE AN ACCOUNT</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="login-area">
								<div class="tab-content nav">
									<form id="login" class="tab-pane active col-12" action="" method="post">
										<?php
										if (isset($errors)) {
											foreach ($errors as $error) {
												echo '<span class="error-msg">' . $error . '</span>';
											}
										}
										?>
										<h4 class="text-secondary">LOGIN</h4>
										<p class="font-weight-600">If you have an account with us, please log in.</p>
										<div class="mb-4">
											<label class="label-title">E-MAIL *</label>
											<input name="usermail" required="" class="form-control" placeholder="Your Email Id" type="email">
										</div>
										<div class="mb-4">
											<label class="label-title">PASSWORD *</label>
											<input name="password" required="" class="form-control " placeholder="Type Password" type="password">
										</div>
										<div class="text-left">
											<button name="submit" class="btn btn-primary btnhover me-2">login</button>
											<a data-bs-toggle="tab" href="#forgot-password" class="m-l5"><i class="fas fa-unlock-alt"></i> Forgot Password</a>
										</div>
									</form>
									<form id="forgot-password" class="tab-pane fade  col-12">
										<h4 class="text-secondary">FORGET PASSWORD ?</h4>
										<p class="font-weight-600">We will send you an email to reset your password. </p>
										<div class="mb-3">
											<label class="label-title">E-MAIL *</label>
											<input name="usermail" required="" class="form-control" placeholder="Your Email Id" type="email">
										</div>
										<div class="text-left">
											<a class="btn btn-outline-secondary btnhover m-r10" data-bs-toggle="tab" href="#login">Back</a>
											<button type="submit" value="login now" class="btn btn-primary btnhover me-2">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Product END -->
			</section>
			<!-- contact area End-->
		</div>

		<!-- Footer -->
		<?php
		include('footer.php');
		?>
		<!-- Footer End -->

		<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
	</div>

	<!-- JAVASCRIPT FILES ========================================= -->
	<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
	<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
	<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
	<script src="js/custom.js"></script><!-- CUSTOM JS -->


</body>



</html>