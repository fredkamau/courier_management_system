<?php
include('config.php');
  $id = $_REQUEST['id'];
 //$id = "1";
$result_array = array();

		$result=mysqli_query($conn,"DELETE FROM bookings_tbl WHERE `id`='".$id."' ");
		echo '<script> window.location="deletebookings.php?delete=True"</script>';
if ($result) {
	
	echo '<script> window.location="delebookings.php?delete=True"</script>';
	echo' <div class="alert alert-success alert-dismissable">
 <button type="button" class="close" data-dismiss="alert"
 aria-hidden="true">
 &times;
 </button>
 You have successfully deleted an item.
</div>';
	}
	
 else {
    echo  "No Match"; 
}

?>


<?php
// include('config.php')
// $id=$_POST["id"];
// $query= "DELETE FROM 'bookings_tbl' WHERE `id`='".$id."' ";
// $result = mysqli_query($conn,$query) or die ( mysqli_error());
// header("Location:bookings.php"); 



?>
<?php
// require_once '../includes/db_connection.php'; 
// $id=$_REQUEST['id'];
// $query = "DELETE FROM driver WHERE driver_id=$id"; 
// $result = mysqli_query($con,$query) or die ( mysqli_error());
// header("Location: manage_drivers.php"); 
?>  