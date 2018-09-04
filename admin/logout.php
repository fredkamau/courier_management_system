<?php
   session_start();
   // Starting session
//session_start();
 
// Destroying session
$destroy=session_destroy();
   if($destroy) {
      header("Location:../index.php");
   }
?>