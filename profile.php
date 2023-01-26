<?php
include('db_conn.php');
session_start();

if(!isset($_SESSION['userid']))
{
	header("location:login.php");
}
else
{
	$id = $_SESSION['userid'];

$query = "select * from customers where c_id=" .$id;

$rawData = mysqli_query($conn, $query);

$rowData = mysqli_fetch_assoc($rawData);
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
	<title>e-Books | Profile</title>

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

<body id="bg">
	<div class="page-wraper">
		<?php include('loader.php'); ?>


		<!-- Nav Header -->
		<?php
		include('nav.php');
		?>
		<!-- Nav Header End -->


		<!-- Content -->
		<div class="page-content bg-white">
			<!-- contact area -->
			<div class="content-block">
				<!-- Browse Jobs -->
				<section class="content-inner bg-white">
					<div class="container">
						<div class="row">
							<div class="col-xl-3 col-lg-4 m-b30">
								<div class="sticky-top">
									<div class="shop-account">
										<div class="account-detail text-center">
											<div class="my-image">
												<a href="javascript:void(0);">
													<img alt="pic" src="<?= $_SESSION['userpic'] ?>">
												</a>
											</div>
											<div class="account-title">
												<div class="">
													<h4 class="m-b5"><a href="javascript:void(0);"><?= $_SESSION['username'] ?></a></h4>
													<p class="m-b0"><a href="javascript:void(0);"></a></p>
												</div>
											</div>
										</div>
										<ul class="account-list">
											<li>
												<a href="profile.php" class="active"><i class="far fa-user" aria-hidden="true"></i>
													<span>Profile</span></a>
											</li>
											<li>
												<a href="cart.php"><i class="flaticon-shopping-cart-1"></i>
													<span>My Cart</span></a>
											</li>
											<li>
												<a href="books.php"><i class="fa fa-briefcase" aria-hidden="true"></i>
													<span>Shop</span></a>
											</li>
											<li>
												<a href="changepassword.php"><i class="fa fa-key" aria-hidden="true"></i>
													<span>Change Password</span></a>
											</li>
											<li>
												<a href="logout.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i>
													<span>Log Out</span></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-8 m-b30">
								<div class="shop-bx shop-profile">
									<div class="shop-bx-title clearfix">
										<h5 class="text-uppercase">Your Information</h5>
									</div>
									<form method="post" enctype="multipart/form-data">
										<div class="row m-b30">
											<div class="col-lg-6 col-md-6">
												<div class="mb-3">
													<label for="formcontrolinput1" class="form-label">First Name:</label>
													<input type="text" class="form-control" id="formcontrolinput1" value="<?= $rowData['f_name'] ?>">
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="mb-3">
													<label for="formcontrolinput1" class="form-label">Last Name:</label>
													<input type="text" class="form-control" id="formcontrolinput1" value="<?= $rowData['l_name'] ?>">
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="mb-3">
													<label for="formcontrolinput2" class="form-label"> Username</label>
													<input type="text" class="form-control" id="formcontrolinput2" value="<?= $rowData['u_name'] ?>">
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="mb-3">
													<label for="formcontrolinput3" class="form-label">Your Email</label>
													<input type="text" class="form-control" id="formcontrolinput3" value="<?= $rowData['email'] ?>">
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="mb-3">
													<label for="formcontrolinput4" class="form-label">Your Contact number</label>
													<input type="text" class="form-control" id="formcontrolinput4" value="<?= $rowData['phone'] ?>">
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="mb-3">
													<label for="formcontrolinput4" class="form-label">Gender</label>
													<input type="text" class="form-control" id="formcontrolinput4" value="<?= $rowData['gen'] ?>">
												</div>
											</div>
											<div class="col-lg-12 col-md-12">

												<div class="mb-3">
													<label for="exampleFormControlTextarea" class="form-label">Your Address</label>
													<textarea class="form-control" id="exampleFormControlTextarea" rows="5"><?= $rowData['address'] ?></textarea>
												</div>
											</div>
											
										</div>
										<?php

								$city = array("Karachi", "Hyderabad", "Lahore", "Peshawar", "Quetta", "Islamabad");

								?>
								<p><label class="label label-primary">City: </label>
									<select name="city" class="form-control">

										<?php
										foreach ($city as $value) {
											if ($value == $rowData['city']) {
												echo " <option selected >$value</option>";
											} else {
												echo " <option >$value</option>";
											}
										}
										?>
									</select>
								</p>
								<button name="save" class="btn btn-primary btnhover">Save Setting</button>
								</div>
								
								</form>
							</div>
						</div>
					</div>
			</div>
			</section>
			<!-- Browse Jobs END -->
		</div>
	</div>
	<?php
	if (isset($_POST['save'])) {
		$fname = $_POST['f_name'];
		$lname = $_POST['l_name'];
		$email = $_POST['email'];
		$username = $_POST['u_name'];
		$city = $_POST['city'];
		$add = $_POST['address'];
		$gender = $_POST['gen'];
		$num = $_POST['phone'];
		


		$query = "update customers set f_name='$fname', l_name='$lname', u_name='$username', 
                                email='$email', gen='$gender', address='$add',  city='$city', phone='$num' where c_id = $id";

		$check2 = mysqli_query($conn, $query);

		if ($check2) {
			echo "<p class='text-success'>User Updated Successfully!!!</p>";
		} else {
			echo "<p class='text-danger'>Error while updating user information!!!</p>";
		}
	}

	?>
	<!-- Content END-->


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