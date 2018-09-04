<?php include('session.php');
include('config.php');?>
<?php include 'layouts/admin_header.php' ;?>
  <body>
<?php include 'layouts/admin_navigation.php' ;?>

    <header id="admin_header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><i class="fa fa-cog fa-spin fa-fw"></i>Admin Dashboard</h1>
          </div>
          <div class="col-md-2">
            <div class="create">
             <h4><span class="" aria-hidden="true"></span>Welcome, <b><?php echo $login_session;?></b></h4>
                <span></span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
    </header>
<div class="container">
<div class="row">
 <div class="col-md-offset-10 col-md-2">
   <button type="button" style="margin-top: 15px; margin-bottom: 10px;" class="btn btn-outline-primary" data-toggle="modal"  data-target="#adduser"><i class="far fa-user"></i> Add customer </button> 
 </div>
</div>
</div>

<!-- Modal -->
<div id="adduser" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:400px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Add customer</h4>
      </div>
      <div class="modal-body">
           
          <form id="adduser" action="manage_customers.php" method="POST">
       
          <input name="name" class="form-control" type="TEXT" id="OfficeName" required="required" placeholder="Full name">
          <input name="address" class="form-control" id="PhoneNo" required="required" placeholder="Address">  
          <input name="email" class="form-control" id="email" required="required" placeholder="Email">
          <input name="phone" class="form-control" id="PhoneNo" required="required" placeholder="Phone">
          <select class="form-control" name="office_branch">
          <option >Select Branch</option>
            <option value="nairobi">Nairobi</option>
            <option value="mombasa">Mombasa</option>
            <option value="kisumu">Kisumu</option>
            <option value="nakuru">Nakuru</option>
            </select>
      <input name="date_joined" class="form-control" id="datetimepicker" required="required" placeholder="date joined">    
      <input type="submit" class="form-control btn btn-primary" value="Add User" name="add_user_button"></form>

        </div></div></div></div>
        <!-- Modal end -->
      <?php
    if(isset($_GET['success'])){
     echo' <div class="alert alert-success alert-dismissable">
     <button type="button" class="close" data-dismiss="alert"
     aria-hidden="true">
     &times;
     </button>
     Success! Customer has been added.
    </div>';   
     } 
     if(isset($_POST['add_user_button'])){
       $name=$_POST['name'];       
       $address=$_POST['address'];       
       $email=$_POST['email'];
       $phone=$_POST['phone'];
       $office_branch=$_POST['office_branch'];       
       $date_joined=$_POST['date_joined'];       

         $result=mysqli_query($conn,"insert into `customer_tbl` (customer_name,customer_address,customer_email,customer_no,office_branch,date_joined) 
         values('$name','$address','$email','$phone', '$office_branch','$date_joined')");
         if($result){
          
           echo '<script> window.location="manage_customers.php?success=True" </script>';

         }else{
           
            echo' <div class="alert alert-danger alert-dismissable">
             <button type="button" class="close" data-dismiss="alert"
             aria-hidden="true">
             &times;
             </button>
             Sorry! something went wrong.Please try again.
            </div>'; 
         }
         }
        
       
        ?>
         

 <div class="container">
<div class="row">
 <div class="col-md-1"></div>
  <div class="col-md-10"></div>
   <div class="col-md-1"></div>
         

        </div><!--row ends-->
    </div> <!--container ends-->
    <div class="col-md-1"></div>
<div class="col-md-10">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Manage Customers</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                    <thead>
                     <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone_No</th>
                        <th>Office branch</th>
                        <th>Date Joined</th> 
                        <th>Delete</th>
                      </tr>  
                    </thead>
                    <tbody>
                       <?php
                   $count=1;
                   $sel_query="SELECT * FROM customer_tbl ORDER BY customer_id DESC; ";
                   $result = mysqli_query($conn, $sel_query);
                             //confirm_query($result);
                   while($row = mysqli_fetch_assoc($result)) 
                    { ?>
                          <tr>
                          <td><?php echo $row["customer_id"] ; ?></td>
                          <td><?php echo $row["customer_name"] ; ?></td>
                          <td><?php echo $row["customer_address"] ; ?></td>
                          <td><?php echo $row["customer_email"] ; ?></td>
                          <td><?php echo $row["customer_no"] ; ?></td>
                          <td><?php echo $row["office_branch"] ; ?></td>
                          <td><?php echo $row["date_joined"] ; ?></td>
                         <td> <a href="deletecustomer.php?id=<?php echo $row["customer_id"]; ?>"class="btn btn-warning"> <i class="fa fa-trash"></i> Delete</a></td>
                          
                           
                    
                          </tr>
                          <tr>
                         <?php $count++; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
             </div>
 <div class="col-md-1"></div>



       

   </div><!--row ends-->
    </div> <!--container ends-->  

<!-- Footer -->
<?php include 'layouts/footer.php' ;?>
<!--footer ends--> 






    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../bootstrap/js/jquery.datetimepicker.full.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#datetimepicker').datetimepicker();
      });
       
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#datetimepicker2').datetimepicker();
      });
       
    </script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
