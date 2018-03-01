<?php 
	$id = $_GET['did'];
	
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT * FROM tbdonate WHERE id ='$id'";
   mysql_select_db('donation');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) { ?>
      


 <!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item" style="font-weight: bolder;">Dashboard</h3>
  <a href="donate.php" class="w3-bar-item w3-button">Donate</a>
  <a href="view.php" class="w3-bar-item w3-button">View/Search</a>
  <a href="collect.php" class="w3-bar-item w3-button">Collection</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1>Delete</h1>
</div>
<div style="">
	<form class="w3-container" action="process.delete.php" method="POST">
		<br>
		<div class="w3-row-padding">
	  	<label><b>ID</b></label>
	    <input class="w3-input w3-border" name="edid" value="<?php echo $row['id']; ?>" type="text" readonly >
	  </div>
	  <br>
	 <div class="w3-row-padding">
	  <div class="w3-half">
	    <label><b>First Name</b></label>
	    <input class="w3-input w3-border" value="<?php echo $row['fname']; ?>" type="text" name="fname" required="required" readonly>
	  </div>
	  <div class="w3-half">
	    <label><b>Last Name</b></label>
	    <input class="w3-input w3-border" value="<?php echo $row['lname']; ?>" type="text" name="lname" required="required" readonly>
	  </div>
	  <br><br><br><br>
	  <div class="w3-row-padding">
	  	<label><b>Contact NO</b></label>
	    <input class="w3-input w3-border" value="<?php echo $row['contact']; ?>" maxlength="10" minlength="10" type="tel" name="contact" required="required" readonly>
	  </div>
	  <br>
	  <div class="w3-row-padding">
	  	<label><b>Address/City</b></label>
	    <input class="w3-input w3-border" value="<?php echo $row['city']; ?>" type="text" name="city" required="required" readonly>
	  </div>
	  <br>
	  <div class="w3-row-padding">
	  	<label><b>Amount</b></label>
	    <input class="w3-input w3-border" value="<?php echo $row['amount']; ?>" type="text" name="amount" required="required" readonly>
	  </div>

	  <br>
	<div class="w3-row-padding">
		<button class="w3-btn w3-blue-grey" name="btndelete">Delete</button>
	</div>
	</div>

	</form>
</div>
</div>

</div>
      
</body>
</html>

  <?php }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
