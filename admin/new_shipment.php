<?php
 include('session.php');
 include('config.php');

?>
<?php include 'layouts/admin_header.php' ;?>
<body>
<?php include 'layouts/admin_navigation.php' ;?>

    <header id="admin_header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><i class="fa fa-cog fa-spin fa-fw"></i>  Admin Dashboard</h1>
          </div>
          <div class="col-md-2">
            <div class="create">
             <h4><span class="" aria-hidden="true"></span>Welcome, <b><?php echo $login_session;?></b> </h4>
                <span></span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
    </header>
    <?php
    if(isset($_GET['success'])){
     echo' <div class="alert alert-success alert-dismissable">
     <button type="button" class="close" data-dismiss="alert"
     aria-hidden="true">
     &times;
     </button>
     Success! The package has been booked for shipment.
    </div>';   
     } 
     if(isset($_POST['add_courier'])){
       $sender_name=$_POST['sender_name'];       
       $sender_city=$_POST['sender_city'];       
       $sender_mobile=$_POST['sender_mobile'];
       $sender_address=$_POST['sender_address'];
       $recipient_name=$_POST['recipient_name'];
       $recipient_city=$_POST['recipient_city']; 
       $recipient_mobile=$_POST['recipient_mobile'];       
       $recipient_address=$_POST['recipient_address']; 
       $package_no=$_POST['package_no'];          
       $shipment_type=$_POST['shipment_type'];
       $weight=$_POST['weight'];
       $length=$_POST['length'];       
       $wide=$_POST['wide'];
       $payment=$_POST['payment'];
       $destination=$_POST['destination'];
       $departure_datetime=$_POST['departure_datetime'];       
       $pickup_datetime=$_POST['pickup_datetime'];
       $description=$_POST['description'];
      
         
         $result=mysqli_query($conn,"insert into `shipments_tbl` (sender_name,sender_city,sender_mobile,sender_address,recipient_name, recipient_city,recipient_mobile,recipient_address,package_no,shipment_type,weight,length,wide,payment,destination,status,departure_datetime,pickup_datetime,description) 
         values('$sender_name','$sender_city','$sender_mobile','$sender_address', '$recipient_name','$recipient_city','$recipient_mobile','$recipient_address','$package_no','$shipment_type','$weight','$length','$wide','$payment','$destination','$departure_datetime','$pickup_datetime','$description')");

         if($result){
          
           echo '<script> window.location="new_shipment.php?success=True" </script>';

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


<!--main-->
<div class="container"> 
<div class="row">
  <div class="col-md-6">
        
<div class="panel panel-info" style="margin:20px;">
<div class="panel-heading"><h3 class="panel-title"><span class="fas fa-truck" aria-hidden="true"></span> Sender Details</h3></div>
<div class="panel-body">
  <form method="POST" action="new_shipment.php">
    <div class="col-md-12 col-sm-12">
      
       <div class="form-group col-md-6">
            <label class="labelstaff">Sender Name:</label>
            <input type="Username" class="form-control input-sm" name="sender_name" required/>
        </div>
          <div class="form-group col-md-6">
            <label for="Password" class="labelstaff">Sender City:</label>
            <input type="text" class="form-control input-sm" name="sender_city" required/>
        </div>
          <div class="form-group col-md-6">
            <label for="Password" class="labelstaff">Sender Phone:</label>
            <input type="text" class="form-control input-sm" name="sender_mobile" required/>
        </div>
          <div class="form-group col-md-6">
            <label for="Password" class="labelstaff">Sender Address:</label>
            <input type="text" class="form-control input-sm" name="sender_address" required/>
        </div>
        
       <div class="col-md-12">
        <div class="form-group col-md-1 col-sm-3 " >
            
        </div>

       </div>
      </div>

  </form><!--form ends-->
  </div><!--panel body ends-->
  
</div><!--panel ends-->
  </div>
  

  <div class="col-md-6">
        
<div class="panel panel-info" style="margin:20px;">
<div class="panel-heading"><h3 class="panel-title"><span class="fas fa-portrait" aria-hidden="true"></span> Recipient Details</h3></div>
<div class="panel-body">
  <form>
    <div class="col-md-12 col-sm-12">
      
       <div class="form-group col-md-6">
            <label class="labelstaff">Recipient Name:</label>
            <input type="Username" class="form-control input-sm" name="recipient_name" required/>
        </div>
          <div class="form-group col-md-6">
            <label for="" class="labelstaff">Recipient City:</label>
            <input type="text" class="form-control input-sm" name="recipient_city" required/>
        </div>
          <div class="form-group col-md-6">
            <label for="" class="labelstaff">Recipient mobile:</label>
            <input type="text" class="form-control input-sm" name="recipient_mobile" required/>
        </div>
          <div class="form-group col-md-6">
            <label for="" class="labelstaff">Recipient Address:</label>
            <input type="text" class="form-control input-sm" name="recipient_address" required/>
        </div>
        
       <div class="col-md-12">
        <div class="form-group col-md-1 col-sm-3 " >
         
        </div>

       </div>
      </div>

  </form><!--form ends-->
  </div><!--panel body ends-->
  
</div><!--panel ends-->
  </div>

  </div><!--row ends-->
</div><!--container ends-->
</div>
</div><!--container ends--> 

<!--consignment staff-->
<div class="container">
<div class="row">
   <div class="col-md-8 col-md-offset-2">

  <div class="col-md-12">
        
<div class="panel panel-info" style="margin:20px;">
<div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-globe" aria-hidden="true"> Consignment Info</h3></div>
<div class="panel-body">
  <form>
    <div class="col-md-12 col-sm-12">
      
       <div class="form-group col-md-6">
            <label class="labelstaff">Package No:</label>
            <input type="text" class="form-control input-sm" name="package_no" required/>
        </div>
         <div class="form-group col-md-6">
            <label for="name" class="labelstaff">Urgency:</label>
             <select name="urgency" class="form-control">
            <option value="standard">Standard </option>
            <option value="express">Express</option>
            <option value="priority">Immediate Priority</option>
           </select>
        </div>
        <div class="form-group col-md-6">
            <label  class="labelstaff"> Weight:</label>
            <input type="text" class="form-control input-sm" name="weight" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="text" class="labelstaff">Length:</label>
            <input type="text" class="form-control input-sm" name="length" required/>
        </div>
          <div class="form-group col-md-6">
            <label for="text" class="labelstaff">Wide:</label>
            <input type="text" class="form-control input-sm" name="wide" required/>
        </div>
          <div class="form-group col-md-6">
            <label for="name" class="labelstaff">Payment:</label>
             <select name="payment" class="form-control">
            <option value="paid">Paid</option>
            <option value="not_paid">Not Paid</option>
           </select>
        </div>
         <div class="form-group col-md-6">
            <label for="name" class="labelstaff">Destination:</label>
             <select name="destination" class="form-control" >
            <option value="nairobi">Nairobi</option>
            <option value="mombasa">Mombasa</option>
            <option value="kisumu">Kisumu</option>
            <option value="nakuru">Nakuru</option>
           </select>
        </div>
     
         <div class="form-group col-md-6">
            <label for="name" class="labelstaff">Status</label>
             <select name="status" class="form-control" >
            <option value="in_transit">In transit</option>
            <option value="delivered">Delivered</option>
           </select>
        </div>
        <div class="form-group col-md-6">
            <label for="text" class="labelstaff">dep date|time:</label>
            <input type="text" class="form-control input-sm" id="datetimepicker" name="dep_datetime">
        </div>
        <div class="form-group col-md-6">
            <label for="text" class="labelstaff">Pickup date|time:</label>
            <input type="text" class="form-control input-sm" id="datetimepicker2" name="pickup_datetime">
        </div>
        <div class="form-group col-md-8">
            <label for="Comments" class="labelstaff">Description:</label>
            <textarea type="text" class="form-control input-sm" cols="60" rows="2" id="Comments" name="description"></textarea> 
        </div>
        
       <div class="col-md-12">
      <div class="form-group col-md-1 col-sm-3 " >
      <input type="submit"  class="btn btn-info" value="Add courier" name="add_courier"/>
  </div>

      </div>

  </form><!--form ends-->
  </div><!--panel body ends-->
  
</div><!--panel ends-->
  </div>
     
   </div> 
</div><!--row ends-->
</div><!--container ends-->


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
