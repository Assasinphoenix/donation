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

if (isset($_POST['btndelete'])) {
	$editid = $_POST['edid'];
	# code...
	$sql = "DELETE FROM tbdonate WHERE id = '$editid'";
	mysql_select_db('donation');
	$res = mysql_query($sql,$conn);
	if (!$res) {
		# code...
		echo "error".mysql_error();
	}else{
		header("Location:deletesuccess.php");
	}
}
 ?>
