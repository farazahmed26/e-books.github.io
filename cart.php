<?php
session_start();
include('db_conn.php');


if(!isset($_SESSION['userid']))
{
	header('Location: login.php');
}


if(isset($_POST['btn']))
{
	
	$query = "select * from books where b_id= ".$_POST['bid'];

	$rawBook = mysqli_query($conn,$query);
	$rowBook = mysqli_fetch_assoc($rawBook);

	
		$cart = array($rowBook['b_id'],$rowBook['b_name'],$rowBook['b_price'],$rowBook['b_img'],$_POST['quan']);
		$_SESSION['cart'][]= $cart;	
	

}

else
{
	if(isset($_GET['ct']))
	{
		$k = $_GET['ct'];
		unset($_SESSION['cart'][$k]);

		header('Location: cart.php');
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
	<title>e-Books | Cart</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="icons/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	
	
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

</head>

<body>
<div class="page-wraper">
	<?php // include ('loader.php') ; ?>


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
						<h1>Cart</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
								<li class="breadcrumb-item">Cart</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->
		
		<!-- contact area -->
		<section class="content-inner shop-account">
			<!-- Product -->
			<?php

			if(isset($_SESSION['cart']))
			{
				$count = sizeof($_SESSION['cart']);
				
				if($count > 0)
				{
			?>

<div class="container">
				<div class="row mb-5">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table check-tbl">
								<thead>
									<tr>
										<th>Product</th>
										<th>Product name</th>
										<th>Unit Price</th>
										<th>Quantity</th>
										<th>Total</th>
										<th class="text-end">Close</th>
									</tr>
								</thead>
								<tbody>
									
								<?php
								$sum = 0;  
								foreach($_SESSION['cart'] as $k=>$item)
								{
								?>
									<tr>
										<td class="product-item-img"><img src="admin/<?= $item[3]?>" alt=""></td>
										<td class="product-item-name"><?= $item[1] ?></td>
										<td class="product-item-price"><?= $item[2] ?>/=</td>
										<td class="product-item-quantity"><?= $item[4] ?></td>
										<td class="product-item-totle"><?php $r = $item[4] * $item[2]; $sum+=$r; echo $r; ?>/=</td>
										<td class="product-item-delete"><a href="cart.php?ct=<?= $k ?>" class="ti-close"></a></td>
									</tr>
								
								<?php 
								}
							?>
				

								</tbody>
							</table>
						</div>
					</div>
					
				</div>
				<div class="row">
				<div class="col-lg-6">
				</div>
					<div class="col-lg-6">
						<div class="widget">
							<h4 class="widget-title">Cart Subtotal</h4>
							<table class="table-bordered check-tbl m-b25">
								<tbody>
									
									<tr>
										<td>Shipping</td>
										<td>Free Shipping</td>
									</tr>
									
									<tr>
										<td>Total</td>
										<td><?= $sum; ?>/=</td>
									</tr>
								</tbody>
							</table>
							<div class="form-group m-b25">
								<a href="checkout.php" class="btn btn-primary btnhover" type="button">Proceed to Checkout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
				
			<?php
				}
				else
				{
					unset($_SESSION['cart']);
					header('Location:cart.php');
				}
			}
			else
			{
			?>
			<div class="container">
				<div class="row mb-5">
					<div class="col-lg-12" style="text-align:center;">
						<h4>No Items in Cart</h4>
					</div>
				</div>
			</div>

			<?php
			}
			?>
			
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
<script src="vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script><!-- BOOTSTRAP TOUCHSPIN JS -->
<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->

</body>


</html>