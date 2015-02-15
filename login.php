<?php


session_start();



include("server/funcs.php");

include("server/adminprofil.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$myusername = $_POST['myusername'];
	$mypassword = $_POST['mypassword'];



	if($myusername == $username && $mypassword == $password){


		$_SESSION["login"] = 1;
		header("location:adminstart.php");


	}
	else {
		echo "Fel användarnamn eller lösenord";
	}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WaterWeave</title>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery-1.11.2.min.js"></script>
</head>
<body>
	

<body>
	<div id="formdiv">
		<h1>logga in som admin</h1>

		<form action="login.php" method="post">
			<div class="inputdiv">
				<input type="text" name="myusername" placeholder="Användarnamn">
			</div>
			<div class="inputdiv">
				<input type="password" size="25" name="mypassword" placeholder="Lösenord">
			</div>
			<div style="clear: both"></div>

			<br>
			<input type="submit" value="Logga in" class="button">
	
		</form>




</body>
</html>