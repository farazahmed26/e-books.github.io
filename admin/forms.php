<!DOCTYPE HTML>
<html>
<head>
<title>Easy Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
					<h3 class="blank1">File Uploading</h3>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" enctype="multipart/form-data" method="post">

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">User Name</label>
									<div class="col-sm-4">
										<input type="file" name="file_upl" class="form-control1" accept="image/*" id="focusedinput">
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-4">
									<input type="submit" class="btn btn-primary" value="Upload" name="btn_upl" style="float: right;" />
									</div>
								</div>






								<!-- <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">User Email</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput">
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">User Contact</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput">
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">User Address</label>
									<div class="col-sm-8">
										<textarea name="txtarea1" id="txtarea1" cols="50" rows="8" class="form-control1"></textarea></div>
								</div> -->
							</form>
						</div>
					</div>
					
					<p>
					<?php

						if(isset($_POST['btn_upl']))
						{
							$file= $_FILES['file_upl'];
							$allowed_ext=array('jpg','jpeg','png','gif','bmp','mp3','mp4','txt','pdf','docx','rar','zip');

							$file_ext = strtolower(end(explode('.',$file['name'])));
							$allowed_size= 10;
							$file_size = $file['size']/(1024*1024);
							/*echo "<p><b>File Name: </b>".$file['name']."</p>";
							echo "<p><b>File Type: </b>".$file['type']."</p>";
							echo "<p><b>File Size: </b>".round($file['size']/(1024))." KB</p>";
							echo "<p><b>File Error: </b>".$file['error']."</p>";
							echo "<p><b>File Tmp Name: </b>".$file['tmp_name']."</p>"; */


							if($file['error'] == 0)
							{
								if(in_array($file_ext, $allowed_ext))
								{
									if($file_size <= $allowed_size)
									{
										$file_name= rand(123456789,999999999)."_".rand(1234567,9999999)."_".time().".".$file_ext;

										$file_path='uploads/'.$file_name;
										
										$chk=move_uploaded_file($file['tmp_name'],$file_path );

										if($chk)
										{
											echo "<p class='text-success'>File Uploaded</p>";
											echo "<img src='$file_path' class='img-responsive' />";
										}
										else
										{
											echo "<p class='text-danger'>Error uploading file</p>";
										}

									}
									else
									{
										echo "<p>File size cannot be greater than 10 MB.</p>";
									}

								}
								else
								{
									echo "<p>File type invalid.</p>";
								}
							}
							else
							{
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