

<?php 
$ttl = 60 * 60; //TimeToLive - för sessionen. 60*60 alltså en timma.
session_set_cookie_params($ttl);
session_start();

if($_SESSION["login"] !== "1") {
	header("Location: login.php");
    exit;
}
else{
	setcookie(session_name(), session_id(), time() + $ttl);
	//Login-sessionen får leva i en timma efter att en sida laddas.
	//Såvida det inte är Chrome som tycks strunta i detta totalt.
}

include("server/funcs.php");



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WaterWeave - Admin</title>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery-1.11.2.min.js"></script>
</head>
<body>

<div id="header">
	<div id="headermain">
		<a href="index.php">
			<img src="img/head/logotyp_vector.png" id="logga">
		</a>
		<nav>
			<ul>
				<li><a href="addnews.php">ny nyhet</a></li>
				<li><a href="editnews.php">redigera nyheter</a></li>
				<li> | </li>
				<li><a href="adduser.php">ny i teamet</a></li>
				<li><a href="edituser.php">redigera teamet</a></li>
				<li> | </li>
				<li><a href="logout.php">logga ut</a></li>
			</ul>
		</nav>
	</div>
	<div id="border"></div>
</div>

<script>

$(document).ready(function() {
    $("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("currentLink");
        }
    });
});

</script>




