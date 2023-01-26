<?php session_start(); 
?>

<!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.php">E-BOOKS<span>Admin</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.php"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						

						<li class="active"><a href="index.php"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
						
						<?php 

						//if($_SESSION['role'] == "admin")
						{

						?>
						<li><a href="addproduct.php"><i class="lnr lnr-spell-check"></i> <span>Add books</span></a>
						</li>

						<li><a href="books.php"><i class="lnr lnr-menu"></i> 
							<span>Show Books</span></a>
						</li>  
							<?php 
						}
						?>

						<li><a href="users.php"><i class="lnr lnr-menu"></i> <span>Show Customers</span></a>
						</li> 

						<li><a href="orders.php"><i class="lnr lnr-menu"></i> <span>Show Orders</span></a>
						</li> 

						           

					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->