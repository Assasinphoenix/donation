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
  <h1>Donate</h1>
</div>

<div style="">
	<form class="w3-container" action="process.donate.php" method="POST">
		<br>
	 <div class="w3-row-padding">
	  <div class="w3-half">
	    <label><b>First Name</b></label>
	    <input class="w3-input w3-border" type="text" name="fname" required="required">
	  </div>
	  <div class="w3-half">
	    <label><b>Last Name</b></label>
	    <input class="w3-input w3-border" type="text" name="lname" required="required">
	  </div>
	  <br><br><br><br>
	  <div class="w3-row-padding">
	  	<label><b>Contact NO</b></label>
	    <input class="w3-input w3-border" maxlength="10" minlength="10" type="tel" name="contact" required="required">
	  </div>
	  <br>
	  <div class="w3-row-padding">
	  	<label><b>Address/City</b></label>
	    <input class="w3-input w3-border" type="text" name="city" required="required">
	  </div>
	  <br>
	  <div class="w3-row-padding">
	  	<label><b>Gender</b></label>
	  	<br>
	    <input class="w3-radio" type="radio" name="gender" value="male" checked>
		<label>Male</label>

		<input class="w3-radio" type="radio" name="gender" value="female">
		<label>Female</label>

		<input class="w3-radio" type="radio" name="gender" value="other">
		<label>Other</label>
	  </div>
	  <br>
	  <div class="w3-row-padding">
	  	<label><b>Amount</b></label>
	    <input class="w3-input w3-border" type="text" name="amount" required="required">
	  </div>

	  <br>
	<div class="w3-row-padding">
		<button class="w3-btn w3-blue-grey" name="btndonate">Donate</button>
	</div>
	</div>

	</form>
</div>
</div>

</div>
      
</body>
</html>