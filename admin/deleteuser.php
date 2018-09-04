<?php
include('config.php');
  $id = $_POST['id'];
 //$id = "1";
$result_array = array();

		$result=mysqli_query($conn,"DELETE FROM user WHERE `id`='".$id."' ");
		echo '<script> window.location="user.php?delete=True"</script>';
if ($result) {
	//header("Refresh:0; url=http://localhost/hardware/user.php");
	echo '<script> window.location="user.php?delete=True"</script>';
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