<?php
include('db_conn.php');
session_start();
if(!isset($_SESSION['userid']))
{
	header('Location:login.php');
}

$query = "select * from books";
$rawdata = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">


<!-- head tag -->

<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="" />
	<meta name="description" content="Bookland-Book Store Ecommerce Website" />
	<meta property="og:title" content="Bookland-Book Store Ecommerce Website" />
	<meta property="og:description" content="IBookland-Book Store Ecommerce Website" />
	<meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/x-icon" href="images/favicon.png" />

	<!-- PAGE TITLE HERE -->
	<title>e-Books</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

</head>

<body>
	<div class="page-wraper">
		<?php include('loader.php');  ?>

		<!-- Nav Header -->
		<?php
		include('nav.php');
		?>
		<!-- Nav Header End -->

		<div class="page-content bg-white">

			<!--Swiper Banner Start -->
			<div class="main-slider style-1 slider-white">
				<div class="main-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide bg-light" style="background-image: url(images/background/waveElement2.png);">
							<div class="container">
								<div class="banner-content">
									<div class="row">
										<div class="col-md-6">
											<div class="swiper-content">
												<div class="content-info">
													<h3 class="sub-title" data-swiper-parallax="-10">Competition</h3>
													<h1 class="title mb-0" data-swiper-parallax="-20">Essay Writing
														Competition</h1>

													<p class="text mb-0" data-swiper-parallax="-40">E-book store is
														hosting Essay Writing Competition for our readers,<br> so what
														are you wating for??? Register yourself and submit your essays
														with in three days and get a chance to win cash prize and free
														book</p>
													<div class="price" data-swiper-parallax="-50">
														<span class="price-num">Cash Prize of $10</span>
														<!-- <del>$15.25</del>
													<span class="badge badge-danger">15% OFF</span> -->
													</div>
													<div class="content-btn" data-swiper-parallax="-60">
														<!-- <a class="btn btn-primary btnhover" href="registration.php">Sign
															Up</a> -->
														<a class="btn btn-outline-secondary btnhover ms-4" href="competition.php">See Details</a>
													</div>
												</div>

											</div>
										</div>

										<div class="col-md-6">
											<!-- <div class="banner-media" data-swiper-parallax="-100">
											<img src="images/banner/banner-media3.png" alt="media">
										</div> -->
											<img class="pattern" src="images/Group.png" data-swiper-parallax="-100" alt="dots">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide bg-light" style="background-image: url(images/background/waveelement2-2.png);">
							<div class="container">
								<div class="banner-content">
									<div class="row">
										<div class="col-md-6">
											<div class="swiper-content">
												<div class="content-info">
													<h3 class="sub-title" data-swiper-parallax="-10">Competition</h3>
													<h1 class="title mb-0" data-swiper-parallax="-20">Story writing
														Competition</h1>

													<p class="text mb-0" data-swiper-parallax="-40">Writing Competition
														for our readers <br>
														out of best with be publish on our Website so register yourself
														and send your Stories </p>
													<div class="price" data-swiper-parallax="-50">
														<span class="price-num">Cash Prize of 30$</span>

													</div>
													<div class="content-btn" data-swiper-parallax="-60">
														<!-- <a class="btn btn-primary btnhover" href="registration.php">Sign
															Up</a> -->
														<a class="btn btn-outline-secondary btnhover ms-4" href="competition.php">See Details</a>
													</div>
												</div>

											</div>
										</div>
										<div class="col-md-6">
											<!-- <div class="banner-media" data-swiper-parallax="-100">
											<img src="images/banner/banner-media4.png" alt="media">
										</div> -->
											<img class="pattern" src="images/Group.png" data-swiper-parallax="-100" alt="dots">
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
				<div class="swiper main-swiper-thumb">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="books-card">
								<div class="dz-media">
									<a href="books-detail.php"><img src="admin/images/books/grid/book17.png"alt="book"></a>
								</div>
								<div class="dz-content">
								<a href="books-detail.php"><h5 class="title mb-0">Think and Grow Rich</h5></a>
									<div class="dz-meta">
										<ul>
											<li>by Napoleon Hill</li>
										</ul>
									</div>
									<div class="book-footer">
										<div class="price">
											<span class="price-num">$10</span>
										</div>
										<div class="rate">
											<i class="flaticon-star text-yellow"></i>
											<i class="flaticon-star text-yellow"></i>
											<i class="flaticon-star text-yellow"></i>
											<i class="flaticon-star text-yellow"></i>
											<i class="flaticon-star text-yellow"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="books-card">
								<div class="dz-media">
								<a href="books-detail.php"><img src="admin/images/books/grid/book9.jpg" alt="book"></a>
								</div>
								<div class="dz-content">
								<a href="books-detail.php"><h5 class="title mb-0">Pushing Clouds</h5></a>
									<div class="dz-meta">
										<ul>
											<li>by Jamet Sigh</li>
										</ul>
									</div>
									<div class="book-footer">
										<div class="price">
											<span class="price-num">$52.7</span>
										</div>
										<div class="rate">
											<i class="flaticon-star text-yellow"></i>
											<i class="flaticon-star text-yellow"></i>
											<i class="flaticon-star text-yellow"></i>
											<i class="flaticon-star text-yellow"></i>
											<i class="flaticon-star text-muted"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
		<!--Swiper Banner End-->


		<section class="content-inner-1 overlay-white-middle">
			<div class="container">
				<div class="row about-style1 align-items-center">
					<div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.1s">
						<div class="row sp10 about-thumb">
							<div class="col-sm-6 aos-item ">
								<div class="split-box">
									<div>
										<img class="m-b30" src="images/about/books.jpg" alt="/">
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="split-box ">
									<div>
										<img class="m-b20 aos-item" src="images/about/about2.jpg" alt="/">
									</div>
								</div>
								<div class="exp-bx aos-item">
									<div class="exp-head">
										<div class="counter-num">
											<h2><span class="counter">50</span><small>+</small></h2>
										</div>
										<h6 class="title">Years of Experience</h6>
									</div>
									<div class="exp-info">
										<ul class="list-check primary">
											<li>drama & Comedy</li>
											<li>Biography</li>
											<li>Fantasies</li>
											<li>Fictions/Non-Fictions</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
						<div class="about-content px-lg-4">
							<div class="section-head style-1">
								<h2 class="title">E-books Is Best Choice For Learners</h2>
								<p>In today's quick world, online reading makes it easy to look for books. You don't
									need to plan a whole trip to the bookstore to stock up on your books. You can simply
									download your book. Even if you're busy with work, you can save the book on a click!
								</p>
							</div>
							<a href="books.php" class="btn btn-primary shadow-primary btnhover">Explore</a>
						</div>
					</div>
				</div>
				<!--Client Swiper -->

			</div>
		</section>
		<section class="content-inner-1 bg-grey reccomend ">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Recomended For You</h2>
					<p>We reviewed the best eBook lists to help you navigate the best-selling titles and choose your
						next digital read</p>
				</div>
				<!-- Swiper -->
				<div class="swiper-container swiper-two">
					<div class="swiper-wrapper">
						<?php
						while ($row = mysqli_fetch_assoc($rawdata)) {
						?>
							<div class="swiper-slide">
								<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
									<div class="dz-media">
										<a href="books-detail.php?id=<?= $row['b_id']; ?>"><img src="admin/<?php echo $row['b_img']; ?>" alt="book"></a>
									</div>
									<div class="dz-content">
										<h4 class="title">
											<?= $row['b_name']; ?>
										</h4>
										<span class="price">
											<?= $row['b_price']; ?>
										</span>
										<a href="cart.php" class="btn btn-secondary btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</section>

		<!-- icon-box1 -->
		<section class="content-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="icon-bx-wraper style-1 m-b30 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="flaticon-power icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Quick Delivery</h5>
								<p>Online Books Shopping in all over the world. Cash on Delivery. Free Delivery. Don't
									miss the chance.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="icon-bx-wraper style-1 m-b30 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="flaticon-shield icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Secure Payment</h5>
								<p>User's financial and personal information is protected from fraud and unauthorized
									access.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="icon-bx-wraper style-1 m-b30 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="flaticon-like icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Best Quality</h5>
								<p>We organize it logically and sensibly. Each chapter serve a bigger purpose.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="icon-bx-wraper style-1 m-b30 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="flaticon-star icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Return Guarantee</h5>
								<p>We guarantee that you'll love this product or you'll get your money back!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- icon-box1 End-->

		<!--icon-box3 section-->
		<section class="content-inner-1 bg-light">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Our Mission</h2>
					<p>The mission of eBooks is to simplify and enhance the overall learning experience. Digital Books
						make the learning process more interactive and engaging. Instead of listening to one person
						continuously talking, students can now actively participate in the learning process.
					</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="icon-bx-wraper style-3 m-b30">
							<div class="icon-lg m-b20">
								<i class="flaticon-open-book-1 icon-cell"></i>
							</div>
							<div class="icon-content">
								<h4 class="title">Best Bookstore</h4>
								<p>Select from a Wide Range of Books Available at Our Online Books Store, OBO. Online
									Books Shopping in Pakistan.A Book Store provide us with facilities to expand our
									knowledge.</p>
								<a href="about-us.html">Learn More <i class="fa-solid fa-angles-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="icon-bx-wraper style-3 m-b30">
							<div class="icon-lg m-b20">
								<i class="flaticon-exclusive icon-cell"></i>
							</div>
							<div class="icon-content">
								<h4 class="title">Trusted Seller</h4>
								<p>Our seller always meet the customer at the right time of the buying process and help
									them make the right decision. By continuing to give value after the sell has
									closed.they care about the customers. </p>
								<a href="about-us.html">Learn More <i class="fa-solid fa-angles-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
						<div class="icon-bx-wraper style-3 m-b30">
							<div class="icon-lg m-b20">
								<i class="flaticon-store icon-cell"></i>
							</div>
							<div class="icon-content">
								<h4 class="title">Expand Store</h4>
								<p>We'll go over some of the best ways to get our new online shop infront of the people
									who want to buy. We integrate marketing between our online store and our offline
									buisness.</p>
								<a href="about-us.html">Learn More <i class="fa-solid fa-angles-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Book Sale -->
		<!-- <section class="content-inner-1">
			<div class="container">
				<div class="section-head book-align">
					<h2 class="title mb-0">Books on Sale</h2>
					<div class="pagination-align style-1">
						<div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
						<div class="swiper-pagination-two"></div>
						<div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
					</div>
				</div>
				<div class="swiper-container books-wrapper-3 swiper-four">
					<div class="swiper-wrapper">
						<?php
						while ($row = mysqli_fetch_assoc($rawdata)) {
						?>
							<div class="swiper-slide">
								<div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
									<div class="dz-media">
										<a href="books-detail.php?id=<?= $row['b_id']; ?>"><img src="admin/<?php echo $row['b_img']; ?>" alt="book"></a>
									</div>
									<div class="dz-content">
										<h5 class="title"><a href="books-grid-view.html">
												<?= $row['b_name']; ?>
											</a></h5>
										<div class="price">
											<span class="price-num">
												<?= $row['b_price']; ?>
											</span>
										</div>
										<a href="cart.php" class="btn btn-secondary btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
	</div>

	</div>
	</div>
	</div>
	</section> -->
	<!-- Book Sale End -->

	<!-- Testimonial2 -->
	<section class="content-inner bg-grey testimonial-wrapper-2">
		<div class="container">
			<div class="testimonial">
				<div class="section-head text-center">
					<h2 class="title">What Customer’s Said</h2>
					<p> These are some customer's feedback stand out. It helps us to figure out that they are still in the right market.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="swiper-container testimonial-swiper-2">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="testimonial-2">
							<i class="fa-solid fa-quote-right test-quotes"></i>
							<img src="images/testimonial/wave.png" class="pattern" alt="/">
							<div class="testimonial-pic">
								<img src="images/testimonial/testimonial2.jfif" alt="/">
							</div>
							<div class="testimonial-info">
								<p class="testimonial-text">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
									doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
									veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
									voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
									consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
									porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur
								</p>
								<div class="testimonial-detail">
									<div class="clearfix">
										<h5 class="testimonial-name m-t10 m-b5">Johnson Simanungkalit</h5>
										<span class="testimonial-position">faculty of Economics 2022</span>
									</div>
									<div class="dz-rating-bar">
										<ul class="dz-rating">
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-muted"></i></li>
										</ul>
										<span class="rate">4.8</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-2">
							<i class="fa-solid fa-quote-right test-quotes"></i>
							<img src="images/testimonial/wave.png" class="pattern" alt="/">
							<div class="testimonial-pic">
								<img src="images/testimonial/testimonial8.jfif" alt="/">
							</div>
							<div class="testimonial-info">
								<p class="testimonial-text">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
									doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
									veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
									voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
									consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
									porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur
								</p>
								<div class="testimonial-detail">
									<div class="clearfix">
										<h5 class="testimonial-name m-t10 m-b5">Johnson Simanungkalit</h5>
										<span class="testimonial-position">faculty of Economics 2022</span>
									</div>
									<div class="dz-rating-bar">
										<ul class="dz-rating">
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-muted"></i></li>
										</ul>
										<span class="rate">4.8</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-2">
							<i class="fa-solid fa-quote-right test-quotes"></i>
							<img src="images/testimonial/wave.png" class="pattern" alt="/">
							<div class="testimonial-pic">
								<img src="images/testimonial/testimonial1.png" alt="/">
							</div>
							<div class="testimonial-info">
								<p class="testimonial-text">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
									doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
									veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
									voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
									consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
									porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur
								</p>
								<div class="testimonial-detail">
									<div class="clearfix">
										<h5 class="testimonial-name m-t10 m-b5">Johnson Simanungkalit</h5>
										<span class="testimonial-position">faculty of Economics 2022</span>
									</div>
									<div class="dz-rating-bar">
										<ul class="dz-rating">
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-muted"></i></li>
										</ul>
										<span class="rate">4.8</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-2">
							<i class="fa-solid fa-quote-right test-quotes"></i>
							<img src="images/testimonial/wave.png" class="pattern" alt="/">
							<div class="testimonial-pic">
								<img src="images/testimonial/testimonial7.jpg" alt="/">
							</div>
							<div class="testimonial-info">
								<p class="testimonial-text">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
									doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
									veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
									voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
									consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
									porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur
								</p>
								<div class="testimonial-detail">
									<div class="clearfix">
										<h5 class="testimonial-name m-t10 m-b5">Johnson Simanungkalit</h5>
										<span class="testimonial-position">faculty of Economics 2022</span>
									</div>
									<div class="dz-rating-bar">
										<ul class="dz-rating">
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-yellow"></i></li>
											<li><i class="flaticon-star text-muted"></i></li>
										</ul>
										<span class="rate">4.8</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-pagination-four"></div>
			</div>
		</div>

	</section>
	<!-- Testimonial2 End -->

	<!-- Special Offer-->
	<!-- <section class="content-inner-1">
		<div class="container">
			<div class="section-head book-align">
				<h2 class="title mb-0">Special Offers</h2>
				<div class="pagination-align style-1">
					<div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
					<div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
				</div>
			</div>
			<div class="swiper-container book-swiper">
				<div class="swiper-wrapper">
					<?php
					while ($row = mysqli_fetch_assoc($rawdata)) {
					?>
						<div class="swiper-slide">
							<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media">
									<a href="books-detail.html"><img src="images/blog/blog5.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<h4 class="dz-title"><a href="books-detail.html">SECONDS [Part I]</a></h4>
									<div class="dz-meta">
										<ul class="dz-tags">
											<li><a href="books-detail.html">BIOGRAPHY</a></li>
											<li><a href="books-detail.html">THRILLER</a></li>
											<li><a href="books-detail.html">HORROR</a></li>
										</ul>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore.</p>
									<div class="bookcard-footer">
										<a href="cart.php" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
										<div class="price-details">
											$18,78 <del>$25</del>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Special Offer End -->

	<!-- Pricing Table -->
	

	<!-- Feature Box -->
	<section class="content-inner">
		<div class="container">
			<div class="row sp15">
				<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
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
				<div class=" col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">
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
				<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.3s">
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
				<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.4s">
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
	<section class="py-5 newsletter-wrapper style-2" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
		<div class="container">
			<div class="subscride-inner">
				<div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
					<div class="col-xl-7 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
						<div class="section-head mb-0">
							<h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books
								updates</h2>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
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
	<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
	<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
	<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
	<script src="vendor/countdown/counter.js"></script><!-- COUNTER JS -->
	<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
	<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
	<script src="js/dz.ajax.js"></script><!-- AJAX -->
	<script src="js/custom.js"></script><!-- CUSTOM JS -->

</body>



</html>