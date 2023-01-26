<?php
include('../db_conn.php');

$query="select * from Orders";
$result= mysqli_query($conn,$query);


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <?php
    	include('nav.php'); 
    	?>
    
    <!-- main content start-->
		<div class="main-content main-content4">
			<?php
			include('header.php');
			?>
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Orders Details</h3>

						<div class="table-responsive">
						  <table class="table table-bordered">
							<thead>
							  <tr>
								<th>Order Id</th>
								<th>Order Date</th>
								<th>Order Quantity</th>
								<th>Book Id</th>
								<th>Customer Id</th>								
								
								<th>Delete Order</th>
							  </tr>
							</thead>
							<tbody>
								<?php
								while($row=mysqli_fetch_assoc($result))
								{
								?>	
							  <tr>
							  
								<td><?= $row['o_id'] ?></td>
								<td><?= $row['o_date']?></td>
								<td><?= $row['o_qty'] ?></td>
								<td><?= $row['b_id'] ?></td>
								<td><?= $row['c_id'] ?></td>								
								
								<td><a href="delorder.php?id=<?= $row['c_id']?>" class="glyphicon glyphicon-trash"></a></td>
							  </tr>
							  <?php
								}
								?>
							  
							</tbody>
						  </table>
						</div><!-- /.table-responsive -->
						
					</div>
				</div>
			</div>
		</div>
		<!--footer section start-->
			<footer>
			   <p>&copy 2019 Admin Panel. All Rights Reserved</p>
			</footer>
        <!--footer section end-->
	</section>
	
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>