<?php
   include('session.php');
   if (!iscustomer()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../public/login.php');
}
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Online Courier Management System</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class=" " id="page-top">
  <!-- Navigation-->
 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="dashboard.php">Dashboard</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="track.php"><span class="fa fa-plane"></span> Track order</a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          
		  <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="navbar-brand" href="dashboard.php" style="color:;font-size:20px;"><span class="glyphicon glyphicon-user"></span><i class="fa fa-fw fa-user"></i><b><?php echo $login_session;?></b></a>
            </li> 
		        <li class="nav-item">
		
          <a class="nav-link" href="logout.php" style="color:white">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
         
        </div>
      </nav>
 
    <div class="container-fluid">
	<br>
	<br>
	<br>
     	   <div id="message"></div>
      
      
            <div class="card mb-3">
        <div class="card-header bg-default" style="text-align:">
		<div class="row">
		  <div class="col-md-8"><b> List</b></div>
		  <div class="col-md-4 col-pull-right" style="text-align:right">
		</div>
		
          </div>
        
              </tbody>
            </table>
          </div>
        </div>
      
      </div>
           
     
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
	<!-- update Modal-->
    <div class="modal fade" id="update_brand_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Matatu Route?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <div id="datahere"></div>
		  <script>
		  
		   function editRouteFunc(id){
			   alert(id);
			   var updiv = document.getElementById("datahere"); //document.getElementById("highodds-details");
			   alert(id);
			  var details= '&id='+ id;
			$.ajax({
						type: "POST",
                                url: "editroute.php",
                                data: details,
                                cache: false,
                                success: function(rsp) {
				
              //then append the result where ever you want like
             // $("#datahere").html(rsp); //data will be containing the vote count which you have echoed from the controller
           updiv.innerHTML =rsp;
		     
                }
            });
		   }
		  </script>
		  
        </div>
      </div>
    </div>
    </div>
	<!-- Delete category Modal-->
    <div class="modal fade" id="delete_brand_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  
		  Are you sure you want to delete this item?.<br>
		  <div id="deletedata"></div>
		  </div>
          
		  <script>
		   function deleteRouteFunc(id){
			  alert(id);
			   var id = id;
			   var updiv = document.getElementById("deletedata"); //document.getElementById("highodds-details");
			    updiv.innerHTML ='<form method="POST" action=""><div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" name="deletebuttonFunc" id="'+ id +'" type="submit" data-dismiss="modal" onclick="deleteFunc(this.id)">Delete</button></form></div>';
		     
		   }
		  </script>
		  
            
          
        </div>
      </div>
    </div>
    <!-- Add category list Modal-->
    <div class="modal fade" id="brand_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Register with Route</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <?php
		  //include()
		  $resultCategory=mysqli_query($conn,"select * from `matatu` where `no_plate` ='".$login_session_matatu."' ORDER BY id DESC ");
			if ($resultCategory->num_rows > 0) {
				echo '<form method="POST" action="dashboard.php"><div class="form-group"><label for="vehicle:"><b>Select Matatu</b></label><select name="matatu_name" class="form-control">';
				while($row = $resultCategory->fetch_assoc()) {
				 echo $no_plate =$row['no_plate'];
				//echo $categoryName$row['category_name'];
					
					 echo '<option value="'.$no_plate.'">'.$no_plate.'</option>';
				}?>
				
				</select></div>
				
			
			  <div class="form-group">            
                <label for="date"><b>Enter Matatu Route:</b></label>
                <input type="text" name="matatu_route" class="form-control" placeholder="Enter Matatu Route">
			  </div>
			 
			  
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="addMatatuButton" type="submit" >Add </button>
          </div></form>
			<?php
			;}else{
				echo "No available Animal to select";
			}
		  
		  ?>
		
        </div>
      </div>
    </div>
	
	
	<!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
