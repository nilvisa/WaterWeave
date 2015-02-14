<?php
session_start();



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WaterWeave</title>
	<!--<link href="css/reset.css" type="text/css" rel="stylesheet" />-->
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery-1.11.2.min.js"></script>
</head>
<body>
	

<html>
	<div id="formdiv">
		<h1>logga in som admin</h1>

		<form action="login.php" method="post">
			<div class="inputdiv">
				<input type="text" name="username" placeholder="Användarnamn">
			</div>
			<div class="inputdiv">
				<input type="password" size="25" name="pass" placeholder="Lösenord">
			</div>
			<div style="clear: both"></div>

			<br>
			<input type="submit" value="Logga in" class="button">
	
		</form>




</body>
</html>