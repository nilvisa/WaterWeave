

<?php include("server/funcs.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>WaterWeave</title>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	<link rel="icon" href="img/head/favicon.ico" type="image/ico" sizes="17x17">
	<script src="js/jquery-1.11.2.min.js"></script>
	<link href="css/fonts/"
</head>
<body>



<div id="header">

	<div id="headermain">
		<a href="index.php">
			<img src="img/head/logotyp_vector.png" id="logga">
		</a>
	</div>
</div>

<div id="stop">
	<div id="stopmain">
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

$(window).scroll(function () {
    var height = $('body').height();
    var scrollTop = $(window).scrollTop();

      if(scrollTop>55){
          $('#stop').css({ 'position': 'fixed', 'top': '0px', 'background': '#fff'});
    	}
      else{
         $('#stop').css({ 'position': 'absolute', 'top': '55px', 'background': 'none'});
       }
});

</script>






