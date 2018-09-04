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



    <div class="col-md-1"></div>
<div class="col-md-10">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Door-to-Door Bookings</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Id</th>
                        <th>Origin</th>
                        <th>Destination</th>
                        <th>Urgency</th>
                        <th>Packing</th>
                        <th>Weight</th>
                        <th>Length</th>
                        <th>Wide</th>
                        <th>Sender Name</th>
                        <th>Sender Mobile</th>
                        <th>Recipient Name</th>
                        <th>Recipient Mobile</th>
                        <th>Description</th>
                        <th>Delete</th>

                      </tr>
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
                          <td><?php echo $row["packing"] ; ?></td>
                          <td><?php echo $row["weight"] ; ?></td>
                          <td><?php echo $row["length"] ; ?></td>
                          <td><?php echo $row["wide"] ; ?></td>
                          <td><?php echo $row["sender_name"] ; ?></td>
                          <td><?php echo $row["sender_mobile"] ; ?></td>
                          <td><?php echo $row["recipient_name"] ; ?></td>
                          <td><?php echo $row["recipient_mobile"] ; ?></td>
                          <td><?php echo $row["description"] ; ?></td>
                          
                         <td> <a href="deletebookings.php?id=<?php echo $row["id"]; ?>"class="btn btn-warning"> <i class="fa fa-trash"></i> Delete</a></td>
                          
                           
                    
                          </tr>
                          <tr>
                         <?php $count++; } 
                                           ?>

                      <!-- <tr>
                        <td>A001343</td>
                        <td>Nakuru</td>
                        <td>Nairobi</td>
                        <td>Standard</td>
                        <th>No</th>
                        <td>0.2</td>
                        <td>30</td>
                        <td>20</td>
                        <td>imma Njeri</td>
                        <td>0783993939</td>
                        <td>fred Kamau</td>
                        <td>073829292</td>
                        <td>handle with care</td>
                      </tr> -->
                  
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
