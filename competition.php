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
						<h1>Competition</h1>
						
					</div>
				</div>
			</div>
			<!-- inner page banner End-->
			<!-- Blog Large -->
			<section class="content-inner-1 bg-img-fix">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="dz-blog style-1 bg-white m-b30">
								<div class="dz-media dz-img-effect zoom">
								<a href="comp-details.php"><img src="images/blog/large/blog2.jpg" alt=""></a>
								</div>
								<div class="dz-info">
									<h4 class="dz-title">
										<a href="comp-details.php">Essay writing competition</a>
									</h4>
									<p class="m-b0">Essays can be formal as well as informal. Formal essays are generally academic in nature and take serious topics. We will be focusing on informal essays which are more personal and often have humourous elements. Click here to send your entries. <br><br></p>
									<div class="dz-meta meta-bottom">
										<ul class="border-0 pt-0" style="text-align:center";>
											<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>17 December, 2022</li>
											<li class="post-author"><i class="far fa-user fa-fw m-r10"></i> Last date of Submission</li>
											<!-- <li class="post-comment"><a href="javascript:void(0);"><i class="far fa-comment-alt fa-fw"></i><span>15</span></a></li> -->
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="dz-blog style-1 bg-white m-b30">
								<div class="dz-media dz-img-effect zoom">
								<a href="comp-details.php"><img src="images/blog/large/blog1.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<h4 class="dz-title">
										<a href="comp-details.php">Story Writing Competition</a>
									</h4>
									<p class="m-b0">Maybe some gifted or experienced writers can write intuitively, but as a rule of thumb,
														 you must always map your plot on a narrative arc. Think of a strong enough conflict because not many would want to read a narration of regular events. The stronger the conflict, the higher is the reader engagement.</p>
									<div class="dz-meta meta-bottom">
										<ul class="border-0 pt-0" style="text-align:center";>
											<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>17th December, 2022</li>
											<li class="post-author"><i class="far fa-user fa-fw m-r10"></i>  Last date of Submission</li>
											<!-- <li class="post-comment"><a href="javascript:void(0);"><i class="far fa-comment-alt fa-fw"></i><span>15</span></a></li> -->
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-xl-6 col-lg-6">
							<div class="dz-blog style-1 bg-white m-b30">
								<div class="dz-media dz-img-effect zoom">
									<img src="images/blog/large/blog3.jpg" alt="/">
								</div>
								<div class="dz-info">
									<h4 class="dz-title">
										<a href="blog-details.html">Most Effective Ways To Overcome Library's Problem.</a>
									</h4>
									<p class="m-b0">Sed auctor magna lacus, in placerat nisl sollicitudin ut. Morbi feugiat ante velit, eget convallis arcu iaculis vel. Fusce in rhoncus quam. Integer dolor arcu, ullamcorper sed auctor.</p>
									<div class="dz-meta meta-bottom">
										<ul class="border-0 pt-0">
											<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 March, 2022</li>
											<li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a href="javascript:void(0);"> Johne Doe</a></li>
											<li class="post-comment"><a href="javascript:void(0);"><i class="far fa-comment-alt fa-fw"></i><span>15</span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="dz-blog style-1 bg-white m-b30">
								<div class="dz-media dz-img-effect zoom">
									<img src="images/blog/large/blog4.jpg" alt="">
								</div>
								<div class="dz-info">
									<h4 class="dz-title">
										<a href="blog-detail.html">You Should Experience Library At Least Once In Lifetime</a>
									</h4>
									<p class="m-b0">Sed auctor magna lacus, in placerat nisl sollicitudin ut. Morbi feugiat ante velit, eget convallis arcu iaculis vel. Fusce in rhoncus quam. Integer dolor arcu, ullamcorper sed auctor.</p>
									<div class="dz-meta meta-bottom">
										<ul class="border-0 pt-0">
											<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 March, 2022</li>
											<li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a href="javascript:void(0);"> Johne Doe</a></li>
											<li class="post-comment"><a href="javascript:void(0);"><i class="far fa-comment-alt fa-fw"></i><span>15</span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					<!-- <nav aria-label="Blog Pagination">
						<ul class="pagination text-center style-1 p-t20">
							<li class="page-item"><a class="page-link prev" href="javascript:void(0);">Prev</a></li>
							<li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
							<li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a></li>
						</ul>
					</nav> -->
				</div>
			</section>
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
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->
<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->

</body>


</html>