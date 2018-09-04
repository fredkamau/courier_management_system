
<?php include("config.php"); ?>

<?php include '../includes/layouts/header.php' ;?>
    
  <body>
   <?php include '../includes/layouts/navigation.php' ;?>  
<?php
    if(isset($_GET['success'])){
     echo' <div class="alert alert-success alert-dismissable">
     <button type="button" class="close" data-dismiss="alert"
     aria-hidden="true">
     &times;
     </button>
     Success! Your Order has been received.
    </div>';   
     } 
     if(isset($_POST['book_now_button'])){
       $cityfrom=$_POST['cityfrom'];       
       $cityto=$_POST['cityto'];       
       $urgency=$_POST['urgency'];
       $packing=$_POST['packing'];
       $weight=$_POST['weight'];       
       $length=$_POST['length'];       
       $wide=$_POST['wide'];
       $sender_name=$_POST['sender_name'];
       $sender_mobile=$_POST['sender_mobile'];       
       $recipient_name=$_POST['recipient_name'];       
       $recipient_mobile=$_POST['recipient_mobile'];
       $description=$_POST['description'];
      
         
         $result=mysqli_query($conn,"insert into `bookings_tbl` (origin,destination,urgency,packing,weight,length,wide,sender_name,sender_mobile,recipient_name,recipient_mobile,description) 
         values('$cityfrom','$cityto','$urgency','$packing', '$weight','$length','$wide','$sender_name','$sender_mobile','$recipient_name','$recipient_mobile','$description')");
         if($result){
          
           echo '<script> window.location="online_booking.php?success=True" </script>';
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
    <div class="col-md-10">
      
     <div class="panel panel-info calculator" style="margin:20px;">
<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Online Booking</h3>
</div>
<div class="panel-body">
    <form method="POST" action="online_booking.php">
<div class="col-md-12 col-sm-12">
   <div class="form-group col-md-6">
             <label  class="labelstaff">Origin:</label>
            <select name="cityfrom" class="form-control">
            <option value="nairobi">Nairobi</option>
            <option value="mombasa">Mombasa</option>
            <option value="kisumu">Kisumu</option>
            <option value="nakuru">Nakuru</option>
           </select>
        </div>
        <div class="form-group col-md-6">
            <label  class="labelstaff">Destination:</label>
             <select name="cityto" class="form-control" >
            <option value="nairobi">Nairobi</option>
            <option value="mombasa">Mombasa</option>
            <option value="kisumu">Kisumu</option>
            <option value="nakuru">Nakuru</option>
           </select>
        </div>
           <div class="form-group col-md-6">
             <label  class="labelstaff">Urgency:</label>
            <select name="urgency" class="form-control" >
            <option value="standard">Standard</option>
            <option value="express">Express</option>
            <option value="priority">Immediate priority</option>
           </select>
        </div>
        <div class="form-group col-md-6">
            <label for="name" class="labelstaff">Packing:</label>
             <select name="packing" class="form-control" onchange="somefunction()">
            <option value="yes">Yes</option>
            <option value="no">No</option>
           </select>
        </div>
        <div class="form-group col-md-6">
            <label name="weight" class="labelstaff">Weight(kg):</label>
            <input type="text" class="form-control input-sm" name="weight" placeholder="0.2">
        </div>

        <div class="form-group col-md-6">
            <label for="mobile" class="labelstaff">Length(cm):</label>
            <input type="text" class="form-control input-sm" name="length" placeholder="2">
        </div>

        <div class="form-group col-md-6">
            <label for="mobile" class="labelstaff">Wide(cm):</label>
            <input type="text" class="form-control input-sm" name="wide" placeholder="20">
        </div>
        <div class="form-group col-md-6">
             <label class="labelstaff">Sender Name:</label>
             <input type="text" class="form-control input-sm" name="sender_name" placeholder="">
        </div>
        <div class="form-group col-md-6">
             <label  class="labelstaff">Phone No:</label>
             <input type="text" class="form-control input-sm" name="sender_mobile" placeholder="">
        </div>
        <div class="form-group col-md-6">
             <label  class="labelstaff">Recipient Name:</label>
             <input type="text" class="form-control input-sm" name="recipient_name" placeholder="">
        </div>
        <div class="form-group col-md-6">
             <label  class="labelstaff">Phone no:</label>
             <input type="text" class="form-control input-sm" name="recipient_mobile" placeholder="">
        </div>
         <div class="form-group col-md-6">
            <label class="labelstaff">Description:</label>
            <textarea type="text" class="form-control input-sm" name="description" placeholder=""></textarea> 
        </div>

        </div>
            
       <div class="col-md-12">
      <div class="form-group col-md-1 col-sm-3 " >
      <input type="submit"  class="btn btn-info" value="Book Now" name="book_now_button"/>
  </div>

</div>
</div>
<div class="col-md-1"></div>
</form>
</div>
</div><!--panel ends-->
</div>
</div><!--row ends-->
</div><!--container ends-->

      <!-- Footer starts-->
      <?php include '../includes/layouts/footer.php' ;?>
       <!--footer ends--> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>