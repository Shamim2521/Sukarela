<!DOCTYPE html>
<html>
<head>
	<title>Sukarela</title>
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<?php include 'header.php';?>
<h1 style="margin: 0px auto;text-align: center;">Become A Volunteer</h1>
<h3 style="text-align: center;">Fill up the form below:</h3>
</center>
<div class="form-style-5">
<form method="post" action="volunteer-info.php">
<fieldset>
<legend><span class="number">1</span> Personal Info</legend>
<input type="text" name="name" placeholder="Your Name *">
<input type="email" name="email" placeholder="Your Email *">
<textarea name="address" placeholder="Adress"></textarea>
 
</fieldset>
<fieldset>
<legend><span class="number">2</span> Additional Info</legend>
<textarea name="qualification" placeholder="Qualification"></textarea>
</fieldset>
<input type="submit" value="Submit" />
</form>
</div>
<?php include 'footer.php';?>
</body>
</html>