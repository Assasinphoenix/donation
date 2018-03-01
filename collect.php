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
  <h1>Collection</h1>
</div>
<br>
<div class="w3-container">
<table class="w3-table-all w3-centered" style="width: 50%;" align="center">
	<tr class="w3-red">
		<th>Date </th>
		<th>Total Amount </th>
	</tr>
	<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT SUM(amount) as tamt ,ddate  FROM tbdonate GROUP BY ddate';
   mysql_select_db('donation');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) { ?>
   <tr>
   		<td><?php echo $row['ddate'] ?></td>
   		<td><?php echo $row['tamt'] ?></td>
   </tr>
      
  <?php }
   
   mysql_close($conn);
?>
</table>
</div>

</div>
      
</body>
</html>