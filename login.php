<?php include("config.php"); ?>
<?php include '../includes/layouts/header.php' ;?>
  
  <body>
  <!-- Navigation -->
   <?php include '../includes/layouts/navigation.php' ;?>  
        <!--Navigation ends-->
   
<?php
  
   
    
   if($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['login'])) {
      // username and password sent from form 
      
     echo $myusername = mysqli_real_escape_string($conn,$_POST['username']);
     echo  $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
     echo  $user_level = mysqli_real_escape_string($conn,$_POST['userLevel']); 
      $result=mysqli_query($conn,"select * from `user` where `username`='".$myusername."' and `password`='".$mypassword."' and `status`='Active' and `level` ='". $user_level."'  ");
if ($result->num_rows > 0) {
  
        while($row = $result->fetch_assoc()) {
        echo $myusername=$row['username'];
        echo $userLevel=$row['level'];
         if($userLevel =='admin' ){
           session_start();
        echo $_SESSION['login_user'] = $myusername;
         $_SESSION['login_user_level'] = $userLevel;
         
         header("location:admin/dashboard.php");
         }else{
           session_start();
       echo $_SESSION['login_user'] = $myusername;
         $_SESSION['login_user_level'] = $userLevel;
         
         header("location:user/dashboard.php");
         }
         
          
        }
        //echo $data;
        
} else {
    
echo' <div class="alert alert-warning alert-dismissable">
 <button type="button" class="close" data-dismiss="alert"
 aria-hidden="true">
 &times;
 </button>
 Your Login Name or Password is invalid.
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
<div class="panel-heading "><h3 class="panel-title">Login</h3></div>
<div class="panel-body">
  <form  method="POST" action="login.php">
    <div class="col-md-12 col-sm-12">
      
       <div class="form-group col-md-8">
            <label class="labelstaff">Username:</label>
            <input name="username" class="form-control input-sm" id="username"> 
        </div>
        <div class="form-group col-md-8">
            <label for="Password" class="labelstaff">Password:</label>
            <input  type="password" class="form-control input-sm" name="password" >
        </div>
        <div class="form-group col-md-8">
             <label for="mobile" class="labelstaff">Login as:</label>
            <select class="form-control" id="userLevel" name="userLevel" type="text">
            <option name="Admin">Admin</option>
            <option name="customer">customer</option>
           </select>
        </div>
      
       <div class="col-md-12">
        <div class="form-group col-md-1 col-sm-3 " >
            <input type="submit"  name="login" class="btn btn-outline-primary" value="Login"/>
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