

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
	<script src="js/hamburger.js"></script>

	<!--Using Media Queries, if the viewport is smaller than 700px use another stylesheet-->
    <link rel="stylesheet" type="text/css" media="all" href="css/hamburger.css"/>
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

<div id="border"></div>

<!--Hamburger-kod tagen från: https://www.internetkultur.at/simple-hamburger-drop-down-menu-with-css-and-jquery/-->
<!--Den har hamburger.css och hamburger.js länkad till sig-->
<!--Här börjar hamburgar-ikonen-->
<div class="mobile-nav">
    <div class="menu-btn" id="menu-btn">
        <div></div>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!--Här börjar hamburgar menyn-->
    <div class="responsive-menu">
        <ul>
            <li><a href="waterweave.php">waterweave</a></li>
            <li><a href="tekniken.php">tekniken</a></li>
            <li><a href="team.php">teamet</a></li>
            <li><a href="news.php">nyheter</a></li>
            <li><a href="kontakt.php">kontakt</a></li>
        </ul>
    </div>
</div>
<!--Här slutar hamburger-koden-->

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





