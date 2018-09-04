<?php
include('config.php')
$id=$_REQUEST["customer_id"];
$query= "DELETE FROM 'customer_tbl' WHERE customer_id=$id";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location:manage_customers.php"); 