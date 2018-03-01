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
  <h1>View/Search</h1>
</div>
<br>
<div class="w3-container">
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
</div>
<br>
<div class="w3-container">
<table class="w3-table-all" id="myTable">
    <thead>
      <tr class="w3-red">
      	<th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Contact</th>
        <th>Address/City</th>
        <th>Gender</th>
        <th>Amount</th>
        <th>Date</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM tbdonate';
   mysql_select_db('donation');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) { ?>
   <tr>
   		<td><?php echo $row['id'] ?></td>
   		<td><?php echo $row['fname'] ?></td>
   		<td><?php echo $row['lname'] ?></td>
   		<td><?php echo $row['contact'] ?></td>
   		<td><?php echo $row['city'] ?></td>
   		<td><?php echo $row['gender'] ?></td>
   		<td><?php echo $row['amount'] ?></td>
   		<td><?php echo $row['ddate'] ?></td>
   		<td><a href="edit.php?editid=<?php echo $row['id']; ?>">Edit</a></td>
   		<td><a href="delete.php?did=<?php echo $row['id']; ?>">Delete</a></td>
   </tr>
      
  <?php }
   
   mysql_close($conn);
?>
  </table>
</div>

</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
  
</body>
</html>