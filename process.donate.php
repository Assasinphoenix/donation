<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'donation';

$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$conn) {
	die("Unable to connect".mysql_error());
}else{
	echo "success";
}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$amount = $_POST['amount'];

if (isset($_POST['btndonate'])) {
	# code...
	$sql = "INSERT INTO tbdonate (fname,lname,contact,city,gender,amount,ddate) VALUES('$fname','$lname','$contact','$city','$gender','$amount',NOW())";
	mysql_select_db('donation');
	$res = mysql_query($sql,$conn);
	if (!$res) {
		# code...
		echo "error".mysql_error();
	}else{
		header("Location:Thanks.php");
	}
}
 ?>
