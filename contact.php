<?php
session_start();
if(!isset($_SESSION['userid']))
{
	header('Location:login.php');
}
if (isset($_REQUEST['submit'])) {
	if (($_REQUEST['name'] == "") || ($_REQUEST['email'] == "") ||
		($_REQUEST['phone'] == "") || ($_REQUEST['message'] == "")
	) {

		$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2 role= "alert> Fill All Fields </div>';
	} else {
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$message = $_REQUEST['message'];


		$mailTo = "syedbilalhussain550@gmail.com";
		$headers = "From: " . $email;
		$txt = "You have received an emailfrom" . $name . ".\n\n" . $message;
		mail($mailTo, $phone, $txt, $headers);
		$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2 role= "alert> Send Successfully </div>';
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
	<title>e-Books | Contact</title>

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
		<!-- Nav Header -->
		<?php
		include('nav.php');
		?>
		<!-- Nav Header End -->

		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Contact</h1>

					</div>
				</div>
			</div>
			<div class="content-inner-2 pt-0">
				<div class="map-iframe">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d926743.3493145213!2d67.00113638726005!3d24.860734280964184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1673328692842!5m2!1sen!2s" style="border:0; width:100%; min-height:100%; margin-bottom: -8px;" allowfullscreen></iframe>
				</div>
			</div>

			<section class="contact-wraper1" style="background-image: url(images/background/bg2.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="contact-info">
								<div class="section-head text-white style-1">
									<h3 class="title text-white">Get In Touch</h3>
									<p>If you are interested in working with us, please get in touch.</p>
								</div>
								<ul class="no-margin">
									<li class="icon-bx-wraper text-white left m-b30">
										<div class="icon-md">
											<span class="icon-cell text-primary">
												<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
													<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
													<circle cx="12" cy="10" r="3"></circle>
												</svg>
											</span>
										</div>
										<div class="icon-content">
											<h5 class=" dz-tilte text-white">Our Address</h5>
											<p>1247/Plot No. 39, Block 4, North Nazimabad, Karachi.</p>
										</div>
									</li>
									<li class="icon-bx-wraper text-white left m-b30">
										<div class="icon-md">
											<span class="icon-cell text-primary">
												<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
													<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
													<polyline points="22,6 12,13 2,6"></polyline>
												</svg>
											</span>
										</div>
										<div class="icon-content">
											<h5 class="dz-tilte text-white">Our Email</h5>
											<p>info@gmail<br>services@gmail.com</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-7 m-b40">
							<div class="contact-area1 m-r20 m-md-r0">
								<div class="section-head style-1">
									<h6 class="sub-title text-primary">CONTACT US</h6>
									<h3 class="title m-b20">Get In Touch With Us</h3>
								</div>

								<form class="dz-form dzForm" method="POST" action="">
									<input type="hidden" class="form-control" name="dzToDo" value="Contact">
									<div class="dzFormMsg"></div>
									<div class="input-group">
										<input required type="text" class="form-control" name="name" placeholder="Full Name">
									</div>
									<div class="input-group">
										<input required type="email" class="form-control" name="email" placeholder="Email Adress">
									</div>
									<div class="input-group">
										<input required type="phone" class="form-control" name="phone" placeholder="Phone No.">
									</div>
									<div class="input-group">
										<textarea required name="message" rows="5" class="form-control" placeholder="message"></textarea>
									</div>
									<div class="mb-3">
										<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
										<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
									</div>
									<div>
										<button name="submit" type="submit" value="submit" class="btn w-100 btn-primary btnhover">SUBMIT</button>
									</div>
									<?php
									if (isset($msg)) {
										echo $msg;
									} ?>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Feature Box -->
			<section class="content-inner">
				<div class="container">
					<div class="row sp15">
						<div class="col-lg-3 col-md-6 col-sm-6 col-6">
							<div class="icon-bx-wraper style-2 m-b30 text-center">
								<div class="icon-bx-lg">
									<i class="fa-solid fa-users icon-cell"></i>
								</div>
								<div class="icon-content">
									<h2 class="dz-title counter m-b0">125,663</h2>
									<p class="font-20">Happy Customers</p>
								</div>
							</div>
						</div>
						<div class=" col-lg-3 col-md-6 col-sm-6 col-6">
							<div class="icon-bx-wraper style-2 m-b30 text-center">
								<div class="icon-bx-lg">
									<i class="fa-solid fa-book icon-cell"></i>
								</div>
								<div class="icon-content">
									<h2 class="dz-title counter m-b0">50,672</h2>
									<p class="font-20">Book Collections</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-6">
							<div class="icon-bx-wraper style-2 m-b30 text-center">
								<div class="icon-bx-lg">
									<i class="fa-solid fa-store icon-cell"></i>
								</div>
								<div class="icon-content">
									<h2 class="dz-title counter m-b0">1,562</h2>
									<p class="font-20">Our Stores</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-6">
							<div class="icon-bx-wraper style-2 m-b30 text-center">
								<div class="icon-bx-lg">
									<i class="fa-solid fa-leaf icon-cell"></i>
								</div>
								<div class="icon-content">
									<h2 class="dz-title counter m-b0">457</h2>
									<p class="font-20">Famous Writers</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Feature Box End -->

			<!-- Newsletter -->
			<section class="py-5 newsletter-wrapper" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
				<div class="container">
					<div class="subscride-inner">
						<div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
							<div class="col-xl-7 col-lg-12">
								<div class="section-head mb-0">
									<h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
								</div>
							</div>
							<div class="col-xl-5 col-lg-6">
								<form class="dzSubscribe style-1" action="https://bookland.dexignzone.com/xhtml/script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="form-group">
										<div class="input-group mb-0">
											<input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Your Email Address">
											<div class="input-group-addon">
												<button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
													<span>SUBSCRIBE</span>
													<i class="fa-solid fa-paper-plane"></i>
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Newsletter End -->

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
	<script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
	<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
	<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
	<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
	<script src="js/dz.ajax.js"></script><!-- AJAX -->
	<script src="js/custom.js"></script><!-- CUSTOM JS -->

</body>


</html>