<!DOCTYPE html>
<html lang="en">


<?php
include('db_conn.php');
session_start();
if(!isset($_SESSION['userid']))
{
	header('Location:login.php');
}
include('head.php');
?>

<body>
	<div class="page-wraper">

		<?php include('loader.php');  ?>
		<!-- Nav Header -->
		<?php
		include('nav.php');
		?>
		<!-- Nav Header End -->

		<div class="page-content bg-white">
			<!--banner-->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm"
				style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>About us</h1>

					</div>
				</div>
			</div>

			<!--Our Mission Section-->
			<section class="content-inner overlay-white-middle">
				<div class="container">
					<div class="row about-style1 align-items-center">
						<div class="col-lg-6 m-b30">
							<div class="row sp10 about-thumb">
								<div class="col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="800"
									data-aos-delay="200">
									<div class="split-box">
										<div>
											<img class="m-b30" src="images/about/books.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="split-box ">
										<div>
											<img class="m-b20 aos-item" src="images/about/about2.jpg" alt=""
												data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
										</div>
									</div>
									<div class="exp-bx aos-item" data-aos="fade-up" data-aos-duration="800"
										data-aos-delay="500">
										<div class="exp-head">
											<div class="counter-num">
												<h2><span class="counter">50</span><small>+</small></h2>
											</div>
											<h6 class="title">Years of Experience</h6>
										</div>
										<div class="exp-info">
											<ul class="list-check primary">
												<li>Comics & Graphics</li>
												<li>Biography</li>
												<li>Literary Collections</li>
												<li>Children Fiction</li>
											</ul>
										</div>
									</div>-
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800"
							data-aos-delay="500">
							<div class="about-content px-lg-4">
								<div class="section-head style-1">
									<h2 class="title">e-Book Is Best Choice For Learners</h2>
									<p>In today's quick world, online reading makes it easy to look for books. You don't
										need to plan a whole trip to the bookstore to stock up on your books. You can
										simply download your book. Even if you're busy with work, you can save the book
										on a click!</p>
								</div>
								<a href="books.php" class="btn btn-primary btnhover shadow-primary">Explore</a>
							</div>
						</div>
					</div>
				</div>
			</section>


			<!--icon-box3 section-->
			<section class="content-inner-1 bg-light">
				<div class="container">
					<div class="section-head text-center">
						<h2 class="title">Our Mission</h2>
						<p>The mission of eBooks is to simplify and enhance the overall learning experience. Digital
							Books make the learning process more interactive and engaging. Instead of listening to one
							person continuously talking, students can now actively participate in the learning
							process.07</p>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="icon-bx-wraper style-3 m-b30">
								<div class="icon-lg m-b20">
									<i class="flaticon-open-book-1 icon-cell"></i>
								</div>
								<div class="icon-content">
									<h4 class="title">Best Bookstore</h4>
									<p> Select from a Wide Range of Books Available at Our Online Books Store, OBO.
										Online Books Shopping in Pakistan.A Book Store provide us with facilities to
										expand our knowledge.</p>
									<a href="about.php">Learn More <i class="fa-solid fa-angles-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="icon-bx-wraper style-3 m-b30">
								<div class="icon-lg m-b20">
									<i class="flaticon-exclusive icon-cell"></i>
								</div>
								<div class="icon-content">
									<h4 class="title">Trusted Seller</h4>
									<p>Our seller always meet the customer at the right time of the buying process and
										help them make the right decision. By continuing to give value after the sell
										has closed. </p>
									<a href="about.php">Learn More <i class="fa-solid fa-angles-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="icon-bx-wraper style-3 m-b30">
								<div class="icon-lg m-b20">
									<i class="flaticon-store icon-cell"></i>
								</div>
								<div class="icon-content">
									<h4 class="title">Expand Store</h4>
									<p>We'll go over some of the best ways to get our new online shop infront of the
										people who want to buy. We integrate marketing between our online store and our
										offline buisness.</p>
									<a href="about.php">Learn More <i class="fa-solid fa-angles-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Testimonial -->
			<section class="content-inner-1 testimonial-wrapper">
				<div class="container">
					<div class="testimonial">
						<div class="section-head book-align">
							<div>
								<h2 class="title mb-0">Testimonials</h2>
								<p class="m-b0">Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much.</p>
							</div>
							<div class="pagination-align style-1">
								<div class="testimonial-button-prev swiper-button-prev"><i
										class="fa-solid fa-angle-left"></i></div>
								<div class="testimonial-button-next swiper-button-next"><i
										class="fa-solid fa-angle-right"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-container testimonial-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="testimonial-1">
								<div class="testimonial-info">
									<ul class="dz-rating">
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
									</ul>
									<div class="testimonial-text">
										<p>Very impresive store. Your book made studying for the ABC certification exams
											a breeze. Thank you very much</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic">
											<img src="images/testimonial/testimonial1.jpg" alt="">
										</div>
										<div class="info-right">
											<h6 class="testimonial-name">Jason Huang</h6>
											<span class="testimonial-position">Book Lovers</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-1">
								<div class="testimonial-info">
									<ul class="dz-rating">
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
									</ul>
									<div class="testimonial-text">
										<p>Very impresive store. Your book made studying for the ABC certification exams
											a breeze. Thank you very much</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic radius">
											<img src="images/testimonial/testimonial2.jfif" alt="">
										</div>
										<div>
											<h6 class="testimonial-name">Miranda Lee</h6>
											<span class="testimonial-position">Book Lovers</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-1">
								<div class="testimonial-info">
									<ul class="dz-rating">
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
									</ul>
									<div class="testimonial-text">
										<p>Very impresive store. Your book made studying for the ABC certification exams
											a breeze. Thank you very much</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic radius">
											<img src="images/testimonial/testimonial7.jpg" alt="">
										</div>
										<div>
											<h6 class="testimonial-name">Steve Henry</h6>
											<span class="testimonial-position">Book Lovers</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-1">
								<div class="testimonial-info">
									<ul class="dz-rating">
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
									</ul>
									<div class="testimonial-text">
										<p>Thank you for filling a niche at an affordable price. Your book was just what
											I was looking for. Thanks again</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic radius">
											<img src="images/testimonial/testimonial8.jfif" alt="">
										</div>
										<div>
											<h6 class="testimonial-name">Angela Moss</h6>
											<span class="testimonial-position">Book Lovers</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-1">
								<div class="testimonial-info">
									<ul class="dz-rating">
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
									</ul>
									<div class="testimonial-text">
										<p>Very impresive store. Your book made studying for the ABC certification exams
											a breeze. Thank you very much</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic radius">
											<img src="images/testimonial/testimonial5.jpg" alt="">
										</div>
										<div>
											<h6 class="testimonial-name">Miranda Lee</h6>
											<span class="testimonial-position">Book Lovers</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-1">
								<div class="testimonial-info">
									<ul class="dz-rating">
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
									</ul>
									<div class="testimonial-text">
										<p>Very impresive store. Your book made studying for the ABC certification exams
											a breeze. Thank you very much</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic">
											<img src="images/testimonial/testimonial6.jpg" alt="">
										</div>
										<div class="info-right">
											<h6 class="testimonial-name">Jason Huang</h6>
											<span class="testimonial-position">Book Lovers</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Testimonial End -->

			<!-- Feature Box -->
			<section class="content-inner bg-light">
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
			<section class="py-5 newsletter-wrapper"
				style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
				<div class="container">
					<div class="subscride-inner">
						<div
							class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
							<div class="col-xl-7 col-lg-12">
								<div class="section-head mb-0">
									<h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books
										updates</h2>
								</div>
							</div>
							<div class="col-xl-5 col-lg-6">
								<form class="dzSubscribe style-1"
									action="https://bookland.dexignzone.com/xhtml/script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="form-group">
										<div class="input-group mb-0">
											<input name="dzEmail" required="required" type="email"
												class="form-control bg-transparent text-white"
												placeholder="Your Email Address">
											<div class="input-group-addon">
												<button name="submit" value="Submit" type="submit"
													class="btn btn-primary btnhover">
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
	<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
	<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
	<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
	<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
	<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
	<script src="js/dz.ajax.js"></script><!-- AJAX -->
	<script src="js/custom.js"></script><!-- CUSTOM JS -->

</body>


</html>