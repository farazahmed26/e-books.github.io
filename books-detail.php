<?php

session_start();
include('db_conn.php');
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "select * from books  WHERE `b_id`='$id'";
	$rawdata = mysqli_query($conn, $query);
}
else
{
	header('Location:books.php');
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
	<title>e-Books | Books Details</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="icons/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

</head>

<body>
	<div class="page-wraper">
		<?php //include('loader.php') 
		?>
		<!-- Nav Header -->
		<?php
		include('nav.php');
		?>
		<!-- Nav Header End -->
		<div class="page-content bg-grey">
			<section class="content-inner-1">
				<div class="container">
					<div class="row book-grid-row style-4 m-b60">
						<?php
						while ($row = mysqli_fetch_assoc($rawdata)) {
						?>
							<div class="col">
								<div class="dz-box">
									<div class="dz-media">
										<img src="admin/<?php echo $row['b_img']; ?>" alt="User">
										
									</div>
									<div class="dz-content">
										<div class="dz-header">
											<h3 class="title"><?= $row['b_name']; ?></h3>
											<div class="shop-item-rating">
												<div class="d-lg-flex d-sm-inline-flex d-flex align-items-center">
													<!-- <ul class="dz-rating">
													<li><i class="flaticon-star text-yellow"></i></li>
													<li><i class="flaticon-star text-yellow"></i></li>
													<li><i class="flaticon-star text-yellow"></i></li>
													<li><i class="flaticon-star text-yellow"></i></li>
													<li><i class="flaticon-star text-muted"></i></li>
												</ul>  -->
												</div>
												<div class="social-area">
													<ul class="dz-social-icon style-3">
														<li><a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
														<li><a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
														<li><a href="https://www.whatsapp.com" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
														<li><a href="https://www.google.com" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="dz-body">
											<div class="book-detail">
												<ul class="book-info">
													<li>
														<div class="writer-info">
															<div>
																<span>Writen by</span><?= $row['author']; ?>
															</div>
														</div>
													</li>
													<li><span>Publisher</span><?= $row['publisher']; ?></li>
													<li><span>Year</span><?= $row['b_year']; ?></li>
												</ul>
											</div>
											<p class="text-1"><?= $row['b_details']; ?></p>
											<div class="book-footer">
												<div class="price">
													<h5><?= $row['b_price']; ?>/=</h5>
													<!-- <p class="p-lr10">$70.00</p> -->
												</div>
												<form action="cart.php" method="post">
												<div class="product-num">
													<div class="quantity btn-quantity style-1 me-3">
														<input type="number" value="1" name="quan" min="1"/>
														<input type="hidden" value="<?= $row['b_id']?>" name="bid" />
													</div>
													<button type="submit" class="btn btn-primary btnhover btnhover2" name="btn"><i class="flaticon-shopping-cart-1"></i> 
													<span>Add to cart</span></button>
													<div class="bookmark-btn style-1 d-none d-sm-block">
														<input class="form-check-input" type="checkbox" id="flexCheckDefault1">
													</div>
												</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>

					<!-- <div class="row">
						<div class="col-xl-8">
							<div class="product-description tabs-site-button">
								<ul class="nav nav-tabs">
									<li><a data-bs-toggle="tab" href="#graphic-design-1" class="active">Details Product</a></li>
									<li><a data-bs-toggle="tab" href="#developement-1">Customer Reviews</a></li>
								</ul>
								<div class="tab-content">
									<div id="graphic-design-1" class="tab-pane show active">
										<table class="table border book-overview">
											<tr>
												<th>Book Title</th>
												<td>Think and Grow Rich</td>
											</tr>
											<tr>
												<th>Author</th>
												<td>Napoleon Rich</td>
											</tr>
											<tr>
												<th>ISBN</th>
												<td>121341381648 (ISBN13: 121341381648)</td>
											</tr>
											<tr>
												<th>Ediiton Language</th>
												<td>English</td>
											</tr>
											<tr>
												<th>Book Format</th>
												<td>Paperback, 450 Pages</td>
											</tr>
											<tr>
												<th>Date Published</th>
												<td>August 10th 2019</td>
											</tr>
											<tr>
												<th>Publisher</th>
												<td>Wepress Inc.</td>
											</tr>
											<tr>
												<th>Pages</th>
												<td>520</td>
											</tr>
											<tr>
												<th>Lesson</th>
												<td>7</td>
											</tr>
											<tr>
												<th>Topic</th>
												<td>360</td>
											</tr>
											<tr class="tags">
												<th>Tags</th>
												<td>
													<a href="javascript:void(0);" class="badge">Drama</a>
													<a href="javascript:void(0);" class="badge">Advanture</a>
													<a href="javascript:void(0);" class="badge">Survival</a>
													<a href="javascript:void(0);" class="badge">Biography</a>
													<a href="javascript:void(0);" class="badge">Trending2022</a>
													<a href="javascript:void(0);" class="badge">Bestseller</a>
												</td>
											</tr>
										</table>
									</div>
									<div id="developement-1" class="tab-pane">
										<div class="clear" id="comment-list">
											<div class="post-comments comments-area style-1 clearfix">
												<h4 class="comments-title">4 COMMENTS</h4>
												<div id="comment">
													<ol class="comment-list">
														<li class="comment even thread-even depth-1 comment" id="comment-2">
															<div class="comment-body">
																<div class="comment-author vcard">
																	<img src="images/profile4.jpg" alt="" class="avatar" />
																	<cite class="fn">Michel Poe</cite> <span class="says">says:</span>
																	<div class="comment-meta">
																		<a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
																	</div>
																</div>
																<div class="comment-content dlab-page-text">
																	<p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam vulputate erat.</p>
																</div>
																<div class="reply">
																	<a rel="nofollow" class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
																</div>
															</div>
															<ol class="children">
																<li class="comment byuser comment-author-w3itexpertsuser bypostauthor odd alt depth-2 comment" id="comment-3">
																	<div class="comment-body" id="div-comment-3">
																		<div class="comment-author vcard">
																			<img src="images/profile3.jpg" alt="" class="avatar" />
																			<cite class="fn">Celesto Anderson</cite> <span class="says">says:</span>
																			<div class="comment-meta">
																				<a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
																			</div>
																		</div>
																		<div class="comment-content dlab-page-text">
																			<p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam vulputate erat.</p>
																		</div>
																		<div class="reply">
																			<a class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
																		</div>
																	</div>
																</li>
															</ol>
														</li>
														<li class="comment even thread-odd thread-alt depth-1 comment" id="comment-4">
															<div class="comment-body" id="div-comment-4">
																<div class="comment-author vcard">
																	<img src="images/profile2.jpg" alt="" class="avatar" />
																	<cite class="fn">Ryan</cite> <span class="says">says:</span>
																	<div class="comment-meta">
																		<a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
																	</div>
																</div>
																<div class="comment-content dlab-page-text">
																	<p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam vulputate erat.</p>
																</div>
																<div class="reply">
																	<a class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
																</div>
															</div>
														</li>
														<li class="comment odd alt thread-even depth-1 comment" id="comment-5">
															<div class="comment-body" id="div-comment-5">
																<div class="comment-author vcard">
																	<img src="images/profile1.jpg" alt="" class="avatar" />
																	<cite class="fn">Stuart</cite> <span class="says">says:</span>
																	<div class="comment-meta">
																		<a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
																	</div>
																</div>
																<div class="comment-content dlab-page-text">
																	<p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam vulputate erat.</p>
																</div>
																<div class="reply">
																	<a rel="nofollow" class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
																</div>
															</div>
														</li>
													</ol>
												</div>
												<div class="default-form comment-respond style-1" id="respond">
													<h4 class="comment-reply-title" id="reply-title">LEAVE A REPLY <small> <a rel="nofollow" id="cancel-comment-reply-link" href="javascript:void(0)" style="display:none;">Cancel reply</a> </small></h4>
													<div class="clearfix">
														<form method="post" id="comments_form" class="comment-form" novalidate>
															<p class="comment-form-author"><input id="name" placeholder="Author" name="author" type="text" value=""></p>
															<p class="comment-form-email"><input id="email" required="required" placeholder="Email" name="email" type="email" value=""></p>
															<p class="comment-form-comment"><textarea id="comments" placeholder="Type Comment Here" class="form-control4" name="comment" cols="45" rows="3" required="required"></textarea></p>
															<p class="col-md-12 col-sm-12 col-xs-12 form-submit">
																<button id="submit" type="submit" class="submit btn btn-primary filled">
																	Submit Now <i class="fa fa-angle-right m-l10"></i>
																</button>
															</p>
														</form>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 mt-5 mt-xl-0">
							<div class="widget">
								<h4 class="widget-title">Related Books</h4>
								<div class="row">
									<div class="col-xl-12 col-lg-6">
										<div class="dz-shop-card style-5">
											<div class="dz-media">
												<img src="images/books/grid/book15.jpg" alt="">
											</div>
											<div class="dz-content">
												<h5 class="subtitle">Terrible Madness</h5>
												<ul class="dz-tags">
													<li>THRILLE,</li>
													<li>DRAMA,</li>
													<li>HORROR</li>
												</ul>
												<div class="price">
													<span class="price-num">$45.4</span>
													<del>$98.4</del>
												</div>
												<a href="cart.php" class="btn btn-outline-primary btn-sm btnhover btnhover2"><i class="flaticon-shopping-cart-1 me-2"></i> Add to cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-6">
										<div class="dz-shop-card style-5">
											<div class="dz-media">
												<img src="images/books/grid/book3.jpg" alt="">
											</div>
											<div class="dz-content">
												<h5 class="subtitle">Battle Drive</h5>
												<ul class="dz-tags">
													<li>THRILLE,</li>
													<li>DRAMA,</li>
													<li>HORROR</li>
												</ul>
												<div class="price">
													<span class="price-num">$45.4</span>
													<del>$98.4</del>
												</div>
												<a href="cart.php" class="btn btn-outline-primary btn-sm btnhover btnhover2"><i class="flaticon-shopping-cart-1 me-2"></i> Add to cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-6">
										<div class="dz-shop-card style-5 mb-0">
											<div class="dz-media">
												<img src="images/books/grid/book5.jpg" alt="">
											</div>
											<div class="dz-content">
												<h5 class="subtitle">Terrible Madness</h5>
												<ul class="dz-tags">
													<li>THRILLE,</li>
													<li>DRAMA,</li>
													<li>HORROR</li>
												</ul>
												<div class="price">
													<span class="price-num">$45.4</span>
													<del>$98.4</del>
												</div>
												<a href="cart.php" class="btn btn-outline-primary btn-sm btnhover btnhover2"><i class="flaticon-shopping-cart-1 me-2"></i> Add to cart</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
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
	<script src="vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script><!-- BOOTSTRAP TOUCHSPIN JS -->
	<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
	<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
	<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
	<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
	<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
	<script src="js/dz.ajax.js"></script><!-- AJAX -->
	<script src="js/custom.js"></script><!-- CUSTOM JS -->

</body>



</html>