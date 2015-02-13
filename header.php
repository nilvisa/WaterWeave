

<?php include("server/funcs.php"); ?>


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

<div id="header">
	<div id="headermain">
		<a href="index.php">
			<img src="img/head/logotyp_vector.png" id="logga">
		</a>
		<nav>
			<ul>
				<li><a href="waterweave.php">waterweave</a></li>
				<li><a href="tekniken.php">tekniken</a></li>
				<li><a href="team.php">teamet</a></li>
				<li><a href="news.php">nyheter</a></li>
				<li><a href="kontakt.php">kontakt</a></li>
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




