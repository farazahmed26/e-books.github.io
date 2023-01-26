<?php
include('db_conn.php');
session_start();

if(!isset($_SESSION['userid']))
{
	header('Location: login.php');
}


	$id = $_SESSION['userid'];
	$query = "select * from customers  WHERE `c_id`='$id'";
	$custdata = mysqli_query($conn, $query);
	$custrow = mysqli_fetch_assoc($custdata);

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
	<title>e-Books | Checkout</title>
	
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
<?php 
	include('loader.php');
	include('nav.php');
	?>
	<div class="page-wraper">
	
		<!-- Header -->
		
		<!-- Header End -->
		
		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Checkout</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
								<li class="breadcrumb-item">Checkout</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->
			
			<!-- contact area -->
			<section class="content-inner-1">
				<!-- Product -->
				<div class="container">
					<form class="shop-form">
						<div class="row">

						<div class="col-lg-3 col-md-3"></div>
							<div class="col-lg-6 col-md-6">
								<div class="widget">
									<h4 class="widget-title">Billing & Shipping Address</h4>
									
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="First Name" value="<?= $custrow['f_name']?> ">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Last Name" value="<?= $custrow['l_name']?> ">
										</div>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email" value="<?= $custrow['email']?> ">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Address 02" value="<?= $custrow['address']?> ">
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Town / City" value="<?= $custrow['city']?> ">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Phone" value="<?= $custrow['phone']?> ">
										</div>
									</div>
									
									
								</div>
							</div>
							
						</div>
					</form>
					<div class="dz-divider bg-gray-dark text-gray-dark icon-center  my-5">
						<i class="fa fa-circle bg-white text-gray-dark"></i></div>
					

						<?php
						if(isset($_SESSION['cart']))
						{
						?>
					<div class="row">
						<div class="col-lg-6">
							<div class="widget">
								<h4 class="widget-title">Your Order</h4>
								<table class="table-bordered check-tbl">
									<thead class="text-center">
										<tr>
											<th>IMAGE</th>
											<th>PRODUCT NAME</th>
											<th>TOTAL</th>
										</tr>
									</thead>
									<tbody>

									<?php
								$sum = 0;  
								foreach($_SESSION['cart'] as $k=>$item)
								{
									$r = $item[4] * $item[2]; $sum+=$r;
								?>
										<tr>
											<td class="product-item-img"><img src="admin/<?= $item[3]?>" alt=""></td>
											<td class="product-item-name"><?= $item[1] ?></td>
											<td class="product-price"><?= $r ?>/=</td>
										</tr>
							<?php 
								}
							?>
				
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-6">
							<form class="shop-form widget" method="post">
								<h4 class="widget-title">Order Total</h4>
								<table class="table-bordered check-tbl mb-4">
									<tbody>
										
										<tr>
											<td>Shipping</td>
											<td>Free Shipping</td>
										</tr>
										
										<tr>
											<td>Total</td>
											<td class="product-price-total"><?= $sum; ?>/=</td>
										</tr>
									</tbody>
								</table>
								<h4 class="widget-title">Payment Method</h4>
								
								<div class="form-group">
									<select class="default-select">
										
										<option value="">Cash on delivery</option>
									</select>	
								</div>
								
								<div class="form-group">
									<button class="btn btn-primary btnhover" type="submit" name="orderbtn">Place Order Now </button>
								</div>
							</form>
						</div>
					</div>

					<?php
						}
						else
						{
						?>
						<div class="row">
						<div class="col-lg-8" >
							<div class="widget">
								<h4 class="widget-title">No Items in Cart</h4>
							</div>
						</div>
						</div>
						<?php
						}
				
				if(isset($_POST['orderbtn']))
				{
				
					$ans = false;
					foreach($_SESSION['cart'] as $k=>$item)
					{
						
						
						$qty = $item[4];
						$bid= $item[0];
						$cid= $_SESSION['userid'];
						$total = $item[4] * $item[2]; 

						
							$queryO = "insert into orders values (null,curdate(),'$qty','$bid','$cid','$total')";
						$checkO = mysqli_query($conn, $queryO);

						if($checkO)
						{
							$ans = true;
						}
						else
						{
							echo mysqli_error($conn);
						}
					}

					if($ans)
					{
						unset($_SESSION['cart']);
						echo "<script> 
							window.location.href = 'orderplaced.php';
						</script>";
						
					}

				}



				?>
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
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->


</body>


</html>