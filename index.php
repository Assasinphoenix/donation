<?php /* login page */ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="width: 50%; margin-left: auto;margin-right: auto; margin-top: 10%;">
<!-- login -->
<div class="w3-container w3-teal" style="text-align: center;">
  <h2>Login</h2>
</div>

<form class="w3-container" action="login.php">
	<br>
  <label class="w3-text-teal"><b>Username</b></label>
  <input class="w3-input w3-border w3-light-grey" name="username" type="text" placeholder="Username......" required="required">
  <br>
  <label class="w3-text-teal"><b>Password</b></label>
  <input class="w3-input w3-border w3-light-grey" name="password" type="password" placeholder="Password......" required="required">
  <br>
  <button class="w3-btn w3-blue-grey" name="btnlogin">Login</button>
</form>
</body>
</html>