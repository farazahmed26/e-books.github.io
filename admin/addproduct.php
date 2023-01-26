<?php

session_start();

if (!isset($_SESSION['admin'])) {
	//header('Location: signin.php');
}



include('../db_conn.php');

$query = "select * from books";
$data = mysqli_query($conn, $query);



?>


<!DOCTYPE HTML>
<html>

<head>
	<title>Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<!-- chart -->
	<script src="js/Chart.js"></script>
	<!-- //chart -->
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--//end-animate-->
	<!----webfonts--->
	<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<!---//webfonts--->
	<!-- Meters graphs -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<!-- Placed js at the end of the document so the pages load faster -->

</head>

<body class="sticky-header left-side-collapsed" onload="initMap()">
	<section>
		<?php
		include('nav.php');
		?>

		<!-- main content start-->
		<div class="main-content main-content3">
			<?php
			include('header.php');
			?>
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Books Uploading</h3>
					<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" enctype="multipart/form-data" method="post">

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Book Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="name">
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Book Details</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="detail">
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Book short Details</label>
									<div class="col-sm-8">
										<textarea class="form-control1" id="focusedinput" name="sdetail"></textarea>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Book Price </label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" id="focusedinput" name="price"/>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Book Author </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="author"/>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Book Publisher </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="publisher"/>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Book release year </label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" id="focusedinput" name="year"/>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Book Picture</label>
									<div class="col-sm-4">
										<input type="file" name="file_upl" required="" class="form-control1" accept="image/*" id="focusedinput">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Book Category</label>
									<div class="col-sm-8">
		
										<?php 
										$genre = "select * from genre";
               							$category = mysqli_query($conn,$genre);
                						?>
									<select name="cat" >
							 		<?php echo"<option>Category</option>";
                                	 while($cate = mysqli_fetch_assoc($category))
                                 	{
                                     echo "<option value='".$cate['g_id']."'>".$cate['g_name']."</option>";
                                 	}                           
                                	?>								
									</select>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-4">
										<input type="submit" class="btn btn-primary" value="Upload" name="btn_upl" style="float: right;" />
									</div>
								</div>
							</form>
						</div>
					</div>

					<p>
						<?php

						if (isset($_POST['btn_upl'])) {
							//$file = $_FILES['file_upl'];
							$allowed_ext = array('jpg', 'jpeg', 'png', 'gif', 'bmp');
							
							$filename = $_FILES['file_upl']['name'];
							$file_ext = explode('.', $filename);
							$file_ext = end($file_ext);
							$file_ext = strtolower($file_ext);
							$allowed_size = 10;
							$file_size = $_FILES['file_upl']['size'] / (1024 * 1024);


							$b_name = $_POST['name'];
							$b_details = $_POST['detail'];
							$bs_details = $_POST['sdetail'];
							$b_price = $_POST['price'];
							$author = $_POST['author'];
							$publisher = $_POST['publisher'];
							$year = $_POST['year'];
							$cat = $_POST['cat'];

							if ($_FILES['file_upl']['error'] == 0) {
								if (in_array($file_ext, $allowed_ext)) {
									if ($file_size <= $allowed_size) {
										$file_name = rand(123456789, 999999999) . "_" . rand(1234567, 9999999) . "_" . time() . "." . $file_ext;

										$file_path = 'images/books/grid/' . $file_name;

										$chk = move_uploaded_file($_FILES['file_upl']['tmp_name'], $file_path);

										if ($chk) {
											$ppic = "images/books/grid/" . $file_name;

											$query = "insert into Books values('' ,'" . $b_name . "','" . $b_details . "','" . $bs_details . "','" . $b_price . "','" . $file_path . "','" . $cat . "','" . $author . "','" . $publisher . "','" . $year . "')";

											$chk2 = mysqli_query($conn, $query) or die(mysqli_error($conn));
											if ($chk2) {
												echo "<p class='text-success'>Book Inserted Successfully</p>";
											} else {
												echo "<p class='text-danger'>Book Insert Failed.. :(</p>";
											}
										} else {
											echo "<p class='text-danger'>Error uploading file</p>";
										}
									} else {
										echo "<p>File size cannot be greater than 10 MB.</p>";
									}
								} else {
									echo "<p>File type invalid.</p>";
								}
							} else {
								echo "<p class='text-danger'>File has error.</p>";
							}
						}




						?>
					</p>


				</div>
			</div>
		</div>
		<!--footer section start-->
		<footer>
			<p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
		</footer>
		<!--footer section end-->
	</section>

	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>