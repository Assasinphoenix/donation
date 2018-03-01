<?php 
include 'connect_db.php';
if (isset($_GET['btnlogin'])) {   
      // username and password sent from form 
      
      $myusername = $_GET['username'];
      $mypassword = $_GET['password']; 

      if ($_GET['username'] == 'admin' && $_GET['password']=='pass') {
      	# code...
      	header("Location: Dashboard.php");
      }else{
      	echo "<h1>Please check username and password</h1>";
      }
}
 ?>