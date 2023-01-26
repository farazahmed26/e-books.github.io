<?php

include('db_conn.php');
session_start();

?>

<?php
if(isset($_POST['btn-comp']))
{
    $title= $_POST ['title'];
    $file= $_FILES ['file']['name'];
	$category= $_POST ['category'];

    $file_name = $_FILES['file']['name'];
    //$file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    //$file_type = $_FILES['image']['type'];

    //$query = "INSERT INTO `competition` (`title`, `title_file`, `comp_category`) VALUES ('$title','$file', '$category')";
	$query=  "INSERT INTO `competition`(`comp_id`, `title`, `title_file`, `comp_category`, `customer_id`) VALUES ('','$title','$file','$category','')";
    $check = mysqli_query($conn,$query);

    if($check)
    {
        (move_uploaded_file($file_tmp, "competition/". $file_name));
        echo "<p class='text-success'>File inserted Successfully!!!</p>";
    }

    else
    {
        echo "<p class='text-danger'>File Insertion Failed!!!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- head tag -->

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
	<title>Competition Details</title>

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
		<?php include('loader.php'); ?>


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
						<h1>Competition Details</h1>

					</div>
				</div>
			</div>
			<!-- inner page banner End-->
			<!-- Blog Large -->
			<section class="content-inner-1 bg-img-fix">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-8">
							<!-- blog start -->
							<div class="dz-blog blog-single style-1">
								<div class="dz-media rounded-md">
									<img src="images/background/3.png" alt="">
								</div>
								<div class="dz-info">
									<div class="dz-meta  border-0 py-0 mb-2">
										<ul class="border-0 pt-0">
											<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>17th December , 2022</li>
											<li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a href="javascript:void(0);"> Johne Doe</a></li>
										</ul>
									</div>
									<h4 class="dz-title">The Time Is Running Out! Send Your Entries Now...!</h4>

									<div class="dz-post-text">
										<p>As you all know we are hosting writing competition so send your entries as soon as possible, before 28th January 2023.</p>
										<p>winner will be awarded with cash prize</p>
										<blockquote class="wp-block-quote is-style-default">
											<p>A great book should leave you with many experiences, and slightly exhausted at the end. You live several lives while reading. </p><cite></cite>
										</blockquote>
										

										<h4 class="m-b30"></h4>
										<img class="alignleft rounded-md w-50" src="images/background/2.png" alt="">
										<p></p>
										
										<h4 class="m-b30"></h4>
										<img class="alignleft rounded-md w-50" src="images/background/1.png" alt="">
										<p></p>
										<p></p>
									</div>
									<hr>
									<hr>
									<hr>
								</div>
							</div>

							<!-- text area for story and Essay -->
							<div class="default-form comment-respond style-1" id="respond">
								<h4 class="comment-reply-title" id="reply-title">LEAVE YOUR CONTENT HERE <small> <a rel="nofollow" id="cancel-comment-reply-link" href="javascript:void(0)" style="display:none;">Cancel reply</a> </small></h4>
								<div class="clearfix">
									<form enctype="multipart/form-data" method="post" id="comments_form" class="comment-form"  >

										<p class="comment-form-author"><input id="name" require class="form-control" placeholder="Title" name="title" type="text" value=""></p>
										<p class="comment-form-email"><input name="file" required class="form-control " type="file"></p>
										<p class="comment-form-email">


											<?php
                    							$category = array("Story","Essay");
                    						?>
											<select name="category" class="form-control" id="demo">
												<option >Select</option>
												<?php
                            						foreach($category as $value)
                            						{
                            				    	echo "<option>$value</option>";
                           					 		}
                            					?>	
											</select>
										</p>
										
										
										<p class="col-md-12 col-sm-12 col-xs-12 form-submit">
											<button id="submit" name="btn-comp" type="submit" class="submit btn btn-primary btnhover3 filled">
												Submit Now <i class="fa fa-angle-right m-l10"></i>
											</button>
										</p>
									</form>
								</div>
							</div>


							<!-- blog END -->

						</div>
					</div>
				</div>
			</section>
			<!-- Feature Box -->
		</div>

		<!-- Footer -->
		<?php
		include('footer.php');
		?>
		<!-- Footer End -->>


		<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
	</div>


	<!-- JAVASCRIPT FILES ========================================= -->
	<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
	<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
	<script src="js/dz.ajax.js"></script><!-- AJAX -->
	<script src="js/custom.js"></script><!-- CUSTOM JS -->
	<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->

</body>


</html>