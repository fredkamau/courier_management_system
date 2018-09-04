<?php include("config.php"); ?>
<?php include '../includes/layouts/header.php' ;?>
    
  <body>
  <!-- Navigation -->
   <?php include '../includes/layouts/navigation.php' ;?>  
        <!--Navigation ends-->
 <!--compare Password-->       
<script>
   function check() {
     
            var pass1 = document.getElementById("pass1").value;
            var pass2 = document.getElementById("pass2").value;
            var det = document.getElementById("passwordDetails");

            if(pass1 !=pass2){

                det.innerHTML="<b style='color:red;'>Password Mismatch...</b>"    
            }
            else{

              det.innerHTML="<b style='color:green;'>passwords correct</b>"    
            }
        }

  </script>
  <?php
    if(isset($_GET['success'])){
     echo' <div class="alert alert-success alert-dismissable">
     <button type="button" class="close" data-dismiss="alert"
     aria-hidden="true">
     &times;
     </button>
     Success! You have Registered successfully <a href="login.php">Login now ?.</a>
    </div>';   
     } 
     if(isset($_POST['registration'])){
       $username=$_POST['username'];       
       $mobile=$_POST['mobile'];       
       $pass1=$_POST['pass1'];
       $pass2=$_POST['pass2'];
      
         if($pass1 ==$pass2){
               $similarityResult=mysqli_query($conn,"select * from `user` where `username`='".$username."' ");
            if ($similarityResult->num_rows >0) {
              
              echo' <div class="alert alert-danger alert-dismissable">
             <button type="button" class="close" data-dismiss="alert"
             aria-hidden="true">
             &times;
             </button>
             <b>That username is already registered.</b>
            </div>';
            }else{
         
         $result=mysqli_query($conn,"insert into `user` (username,password,mobile) 
         values('$username','$pass1','$mobile')");
         if($result){
          
           echo '<script> window.location="registration.php?success=True" </script>';
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
         }else{
           
            echo' <div class="alert alert-warning alert-dismissable">
             <button type="button" class="close" data-dismiss="alert"
             aria-hidden="true">
             &times;
             </button>
             Your password is not matching.
            </div>';   
         }
       
       
     }
    ?>
<!--Login starts-->
<div class="container"> 
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    
<div class="panel panel-default" style="margin:40px;">
<div class="panel-heading "><h3 class="panel-title"> Customer Registration</h3></div>
<div class="panel-body">
  <form method="POST" action="registration.php">
    <div class="col-md-12 col-sm-12">
      
       <div class="form-group col-md-8">
            <label class="labelstaff">Username:</label>
            <input type="username" class="form-control input-sm" name="username" required/> 
        </div>
        <div class="form-group col-md-8">
            <label for="Password" class="labelstaff">Mobile No:</label>
            <input type="text" class="form-control input-sm" name="mobile" required/>
        </div>
       
        <div class="form-group col-md-8">
            <label for="Password" class="labelstaff">Password:</label>
            <input type="password" class="form-control input-sm" id="pass1"  name="pass1" required/>
        </div>
         <div class="form-group col-md-8">
            <label for="Password" class="labelstaff">Password:</label>
            <input type="password" class="form-control input-sm" id="pass2" name="pass2" required/>
        </div>
     
       <div class="col-md-12">
        <div class="form-group col-md-1 col-sm-3 " >
            <input type="submit"  class="btn btn-outline-primary" name="registration" value="Register"/>
        </div>

       </div>
      


    </div>

  </form><!--form ends-->
  



</div><!--panel body ends-->
  
</div><!--panel ends-->

  </div>
  <div class="col-md-3"></div>


</div><!--row ends-->
</div>







</div><!--container ends-->

<footer>
<div class="container">

       <!-- Footer starts-->
      <?php include '../includes/layouts/footer.php' ;?>
       <!--footer ends-->   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>