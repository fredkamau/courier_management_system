<?php
include('config.php')
$id="";
$id=$_GET["id"];
$query= "DELETE FROM 'bookings_tbl' WHERE id=$id";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location:manage_shipments.php"); 



?>