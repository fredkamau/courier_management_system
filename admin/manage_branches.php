<?php include('session.php');
include('config.php');?>
<?php include 'layouts/admin_header.php' ;?>
  <body>
<?php include 'layouts/admin_navigation.php' ;?>

    <header id="admin_header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><i class="fa fa-cog fa-spin fa-fw"></i> Admin Dashboard</h1>
          </div>
          <div class="col-md-2">
            <div class="create">
             <h4><span class="" aria-hidden="true"></span> Welcome, <b><?php echo $login_session;?></b></h4>
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
   <button type="button" style="margin-top: 15px; margin-bottom: 10px;" class="btn btn-outline-primary" data-toggle="modal"  data-target="#adduser"><i class="fas fa-home"></i> New Branch</button> 
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
        <h4 class="modal-title"> Add New Branch</h4>
      </div>
      <div class="modal-body">
           
          <form id="adduser" action="manage_branches.php" method="POST">
          <input name="city" class="form-control" id="PhoneNo" required="required" placeholder="city">
          <input name="address" class="form-control" id="OfficeTiming" required="required" placeholder="Address">
          <input name="contact_person" class="form-control" type="TEXT" id="OfficeName" required="required" placeholder="contact_person">
          <input name="phone" class="form-control" id="PhoneNo" required="required" placeholder="Phone">
          <input name="email" class="form-control" id="PhoneNo" required="required" placeholder="Email">
          <input type="submit" class="form-control btn btn-primary" value="Proceed" name="add_branch_button"></form>

        </div></div></div></div>
        <!-- Modal end -->
        <?php
    if(isset($_GET['success'])){
     echo' <div class="alert alert-success alert-dismissable">
     <button type="button" class="close" data-dismiss="alert"
     aria-hidden="true">
     &times;
     </button>
     Success! New branch has been added.
    </div>';   
     } 
     if(isset($_POST['add_branch_button'])){
       $city=$_POST['city']; 
       $address=$_POST['address'];       
       $contact_person=$_POST['contact_person']; 
       $phone=$_POST['phone'];      
       $email=$_POST['email'];      

         $result=mysqli_query($conn,"insert into `branch_tbl` (branch_city,branch_address,contact_person,contact_no,contact_email) 
         values('$city','$address','$contact_person', '$phone','$email')");
         if($result){
          
           echo '<script> window.location="manage_branches.php?success=True" </script>';

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
    <div class="col-md-1"></div>
<div class="col-md-10">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Manage Branches</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover" style="font-family: 'Segoe UI'; ">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Manager</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                            <?php
                   $count=1;
                   $sel_query="SELECT * FROM branch_tbl ORDER BY branch_id DESC; ";
                   $result = mysqli_query($conn, $sel_query);
                             //confirm_query($result);
                   while($row = mysqli_fetch_assoc($result)) 
                    { ?>
                          <tr>
                          <td><?php echo $row["branch_id"] ; ?></td>
                          <td><?php echo $row["branch_city"] ; ?></td>
                          <td><?php echo $row["branch_address"] ; ?></td>
                          <td><?php echo $row["contact_person"] ; ?></td>
                          <td><?php echo $row["contact_no"] ; ?></td>
                          <td><?php echo $row["contact_email"] ; ?></td>
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
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
