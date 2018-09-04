	<?php include '../includes/functions.php'; ?>
	<?php include '../includes/db_connection.php'; ?>
	<?php include '../includes/fpdf.php'; ?>
	<?php session_start(); ?>
<?php include 'auth_admin.php'; ?>

	<!DOCTYPE html>
	<html lang="zxx">
	<head>
	<title>Roy Transmoters</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/table-style.css" />
	<link rel="stylesheet" type="text/css" href="css/basictable.css" />
	<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	</head>
	<body>
	<!-- banner -->
	<div class="wthree_agile_admin_info">
			  <!-- /w3_agileits_top_nav-->
			  <!-- /nav-->
			  <div class="w3_agileits_top_nav">
				<ul id="gn-menu" class="gn-menu-main">
					  		 <!-- /nav_agile_w3l -->
					<li class="gn-trigger">
						<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
						<nav class="gn-menu-wrapper">
							<div class="gn-scroller scrollbar1">
								<ul class="gn-menu agile_menu_drop">
									<li><a href="index.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
									<li>
										<a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Manage Orders <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
										<ul class="gn-submenu">
											<li class="mini_list_agile"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Place Order</a></li>
											<li class="mini_list_w3"><a href="#"> <i class="fa fa-caret-right" aria-hidden="true"></i> My Orders</a></li>
										</ul>
									</li>
									
									
									
									
								
									
								</ul>
							</div><!-- /gn-scroller -->
						</nav>
					</li>
					<!-- //nav_agile_w3l -->
	                <li class="second logo"><h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Roy Transmoters </a></h1></li>
						<li class="second admin-pic">
						<ul class="top_dp_agile">
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><img src="images/admin.png" alt=""> </span> 
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									
									<li> <a href="#"><i class="fa fa-user"></i> <?php echo  $_SESSION['admin']; ?></a> </li> 
									<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>

						</ul>
					</li>
					<li class="second top_bell_nav">
						<ul class="top_dp_agile ">
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge blue">0</span></a>
								<ul class="dropdown-menu">
									<li>
										<!-- <div class="notification_header">
											<h3>Your Notifications</h3>
										</div> -->
									</li>
									
										<div class="clearfix"></div>	
									</a></li>
									
									<li>
										
									</li>
								</ul>
							</li>

						</ul>
					</li>
					<li class="second top_bell_nav">
						<ul class="top_dp_agile ">
							

						</ul>
					</li>
					<li class="second top_bell_nav">
						<ul class="top_dp_agile ">
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue">0</span></a>
								<ul class="dropdown-menu">
									<li>
										
										
									</li>
								</ul>
							</li>	
						</ul>
					</li>


					<li class="second w3l_search">
					 
							<form action="#" method="post">
								<input type="search" name="search" placeholder="Search here..." required="">
								<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						
					</li>
					<li class="second full-screen">
						<section class="full-top">
							<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
						</section>
					</li>

				</ul>
				<!-- //nav -->
				
			</div>
			<div class="clearfix"></div>
			<!-- //w3_agileits_top_nav-->
			
			<!-- /inner_content-->
					<div class="inner_content">
					    <!-- /inner_content_w3_agile_info-->

						<!-- breadcrumbs -->
							<div class="w3l_agileits_breadcrumbs">
								<div class="w3l_agileits_breadcrumbs_inner">
									<ul>
										<li><a href="index.php">Home</a><span>«</span></li>
										
										<li>Payments</li>
									</ul>
								</div>
							</div>
						<!-- //breadcrumbs -->

						<div class="inner_content_w3_agile_info two_in">
						 

										<!-- tables -->
										
										<div class="agile-tables">
											
							
										  
				  
				<div class="w3l-table-info agile_info_shadow">
				 
				 <h3>Mpesa payments</h3>
				  <table id="table-two-axis" class="two-axis">
					<thead>
					  <tr>
						<th>Account Name</th>
						<th>Transaction Code</th>
						<th>Date</th>
						<th>Amount</th>
						<th>          </th>
			  		  </tr>
					</thead>
					<tbody>
						<?php
    $count=1;
   $sel_query="SELECT * FROM mpesa  ORDER BY mpesa_id DESC; ";
   $result = mysqli_query($con,$sel_query);
             confirm_query($result);
   while($row = mysqli_fetch_assoc($result)) 
   	{ ?>
				  <tr>
					<td><?php echo $row["account_name"] ; ?></td>
					<td><?php echo $row["transaction_code"] ; ?></td>
					<td><?php echo $row["date"] ; ?></td>
					<td><?php echo $row["amount"] ; ?></td>
					
					
					
					<td><a href="delete_mpesa.php?id=<?php echo $row["mpesa_id"]; ?>"class="btn btn-warning"> <i class="fa fa-trash"></i> Delete</a></td>
				  </tr>
				  <tr>
				 <?php $count++; } ?>
				</tbody>
			  </table>

										  

										</div>
							</div>
								<!-- //tables -->
						
							
					    </div>
						<!-- //inner_content_w3_agile_info-->
					</div>
			<!-- //inner_content-->
	<!--copy rights start here-->
	<div class="copyrights">
		<p>© 2017-<?php echo date("Y");?> Roy Transmoters. All rights reserved 
		</p>
	</div>	
	<!--copy rights end here-->
	<!-- js -->

	          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			  <script src="js/modernizr.custom.js"></script>
			
			   <script src="js/classie.js"></script>
			  <script src="js/gnmenu.js"></script>
			  <script>
				new gnMenu( document.getElementById( 'gn-menu' ) );
			 </script>
	<!-- tables -->

	<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
	<script type="text/javascript">
	    $(document).ready(function() {
	      $('#table').basictable();

	      $('#table-breakpoint').basictable({
	        breakpoint: 768
	      });

	      $('#table-swap-axis').basictable({
	        swapAxis: true
	      });

	      $('#table-force-off').basictable({
	        forceResponsive: false
	      });

	      $('#table-no-resize').basictable({
	        noResize: true
	      });

	      $('#table-two-axis').basictable();

	      $('#table-max-height').basictable({
	        tableWrapper: true
	      });
	    });
	</script>
	<!-- //js -->
	<script src="js/screenfull.js"></script>
			<script>
			$(function () {
				$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

				if (!screenfull.enabled) {
					return false;
				}

				

				$('#toggle').click(function () {
					screenfull.toggle($('#container')[0]);
				});	
			});
			</script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>

	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


	</body>
	</html>