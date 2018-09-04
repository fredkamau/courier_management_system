<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   //$user_level = $_SESSION['login_user_level'];
   
   $ses_sql = mysqli_query($conn,"select * from `user` where `username` = '".$user_check."' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $login_session_password = $row['password'];
   //$login_session_email = $row['email'];
   $_SESSION['login_user_level']= $row['level'];
   $level="1";
   if(!isset($_SESSION['login_user'])){
      header("location:../public/login.php");
   }
   

?>
<?php include '../includes/layouts/header.php' ;?>
    
  <body>
          <!-- Navigation -->
   <?php include '../includes/layouts/navigation.php' ;?>  
        <!--Navigation ends-->

<!--calculator starts-->
<div class="container">
  <div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8">
<div class="panel panel-default"  style="margin-top:40px;" ><div class="panel-heading">Delivery Status</div><div class="panel-body"><p>

    <form>
<div class="col-md-12 col-sm-12">
  <div class="form-group col-md-12">
            <label for="name" class="labelstaff" style="color:black;">Package No:</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">     
            <span class="help-block">Example:12345678</span>
        </div>
       <div class="col-md-12">
            <div class="form-group col-md-1 col-sm-3 " >
            <input type="submit"  class="btn btn-outline-primary" value="Submit"/>
        </div>

      </div>
       </div>
   </form>

</div>
</div>
</div>
<div class="col-md-2"></div>
</div>
</div>
<!--calculator ends-->
    <!-- Footer starts-->
      <?php include '../includes/layouts/footer.php' ;?>
       <!--footer ends--> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>