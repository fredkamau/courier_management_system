<?php include('session.php');
include('config.php');?>
<?php include 'layouts/admin_header.php' ;?>  
<?php include 'layouts/admin_navigation.php' ;?>  


    <header id="admin_header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><i class="fa fa-cog fa-spin fa-fw"></i> Admin Dashboard</h1>
          </div>
          <div class="col-md-2">
            <div class="create">
             <h4><span class="" aria-hidden="true"></span>Welcome, <b><?php echo $login_session;?></b></h4>
              
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="" class="list-group-item active main-color-bg">
                <span class="fas fa-truck" aria-hidden="true"></span> Manage Shipments
              </a>
                <a href="new_shipment.php" class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Shipments <span class="badge">12</span></a>
              <a href="shipments_list.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> List Shipments <span class="badge">12</span></a>
           
              <a href="shipments_list.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Manage Shipments <span class="badge">203</span></a>
            </div>
           
          </div>

          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-primary">
              <div class="panel-heading main-color-bg">
              <a href="" class="list-group-item active main-color-bg">
                   <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Data Master
              </a>
               
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 30</h2>
                    <h4>Total Bookings</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> 12</h2>
                    <h4>Shipped</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 8</h2>
                    <h4>Delivered</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="fas fa-fighter-jet" aria-hidden="true"></span> 10</h2>
                    <h4>In Progress</h4>
                  </div>
                </div>
              </div>
              </div>
         </div>
   <div class=col-md-3>
                  
              <div class="list-group">
              <a href="" class="list-group-item active main-color-bg">
                <span class="fas fa-portrait" aria-hidden="true"></span> Data Members
              </a>
              <a href="customers_list.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Manage Customers <span class="badge">12</span></a>
              <a href="branches_list.php" class="list-group-item"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Manage Branches <span class="badge">33</span></a>
              <a href="officers_list.php" class="list-group-item"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Manage Officers <span class="badge">33</span></a>
              
            </div>


      </div>
      <div class="col-md-9">
              <div class="panel panel-primary">
                <div class="panel-heading">
              <a href="" class="list-group-item active main-color-bg">
                 <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Recent Bookings
              </a>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>origin</th>
                        <th>destination</th>
                        <th>urgency</th>
                        <th>sender name</th>
                        <th>sender mobile</th>
                        <th>description</th>
                        <th>Manage</th>
                      </tr>
                    </thead>
                  <tbody>
                     <?php
                   $count=1;
                   $sel_query="SELECT * FROM bookings_tbl ORDER BY id DESC; ";
                   $result = mysqli_query($conn, $sel_query);
                             //confirm_query($result);
                   while($row = mysqli_fetch_assoc($result)) 
                    { ?>
                          <tr>
                          <td><?php echo $row["id"] ; ?></td>
                          <td><?php echo $row["origin"] ; ?></td>
                          <td><?php echo $row["destination"] ; ?></td>
                          <td><?php echo $row["urgency"] ; ?></td>
                          <td><?php echo $row["sender_name"] ; ?></td>
                          <td><?php echo $row["sender_mobile"] ; ?></td>
                          <td><?php echo $row["description"] ; ?></td>
                          <td><a href="manage_bookings.php">view</a></td>
                          </tr>
                          <tr>
                         <?php $count++; } 
                                           ?>
                  </tbody>
                    </table>
                </div>
              </div>
             </div>

        </div><!--row ends-->
    </div> <!--container ends-->

<div class="container">
      <div class="row">
   
       

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
