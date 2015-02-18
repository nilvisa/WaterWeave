<?php

include('header.php');

$news = getAllNews();

?>


<html>
	<div id="main">

		<div id="headerimg"><img src="img/head/5_h.png"></div>

		<h1>nyheter</h1>

		<div id="nyhet">	

<div id="container">

<div class="item">
	<div class="wrap pil hvr-bubble-float-bottom">
		<a href=""><img src="img/news/Vinnare%20Aff%C3%A4rsplan.jpg"></a>			
	</div>	
	
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. est accusantium. 
	<a href="news.php?news='.$news['news_id'].'">läs mer</a></p>

	<div class="border"></div>
</div>

<div class="item">
	<div class="wrap pil hvr-wobble-bottom">
		<a href=""><img src="img/news/Vinnare%20Aff%C3%A4rsplan.jpg"></a>			
	</div>	
	
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. est accusantium. 
	<a href="news.php?news='.$news['news_id'].'">läs mer</a></p>

	<div class="border"></div>
</div>

<div class="item hvr-bubble-float-bottom">
	<div class="wrap pil">
		<a href=""><img src="img/news/Vinnare%20Aff%C3%A4rsplan.jpg"></a>			
	</div>	
	
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. est accusantium. 
	<a href="news.php?news='.$news['news_id'].'">läs mer</a></p>

	<div class="border"></div>
</div>

<div class="item">
	<div class="wrap pil hvr-bob">
		<a href=""><img src="img/news/Vinnare%20Aff%C3%A4rsplan.jpg"></a>			
	</div>	
	
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. est accusantium. 
	<a href="news.php?news='.$news['news_id'].'">läs mer</a></p>

	<div class="border"></div>
</div>

<div class="item">
	<div class="wrap pil hvr-grow">
		<a href=""><img src="img/news/Vinnare%20Aff%C3%A4rsplan.jpg"></a>			
	</div>	
	
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. est accusantium. 
	<a href="news.php?news='.$news['news_id'].'">läs mer</a></p>

	<div class="border"></div>
</div>

<div class="item">
	<div class="wrap pil fade">
		<a href=""><img src="img/news/Vinnare%20Aff%C3%A4rsplan.jpg"></a>			
	</div>	
	
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. est accusantium. 
	<a href="news.php?news='.$news['news_id'].'">läs mer</a></p>

	<div class="border"></div>
</div>

<div class="item">
	<!-- <div class="border" style="top: 0px; height: 30px"> -->
	<div class="wrap pil hvr-sink">
		<a href=""><img src="img/news/Vinnare%20Aff%C3%A4rsplan.jpg"></a>			
	</div>	
	
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. est accusantium. 
	<a href="news.php?news='.$news['news_id'].'">läs mer</a></p>

	<div class="border"></div>
</div>

<div class="item">
	<div class="wrap pil hvr-shrink">
		<a href=""><img src="img/news/Vinnare%20Aff%C3%A4rsplan.jpg"></a>			
	</div>	
	
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. est accusantium. 
	<a href="news.php?news='.$news['news_id'].'">läs mer</a></p>

	<div class="border"></div>
</div>

<div class="item">
	<div class="wrap pil hvr-bubble-float-bottom">
		<a href=""><img src="img/news/Vinnare%20Aff%C3%A4rsplan.jpg"></a>			
	</div>	
	
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. est accusantium. 
	<a href="news.php?news='.$news['news_id'].'">läs mer</a></p>

	<div class="border"></div>
</div>


</div></div></body></html>


<script src="js/masonry.pkgd.js"></script>
<script scr="js/imagesloaded.pkgd.min.js"></script>

<script>
// masonryscript
$(window).load(function(){
	var $container = $('#container').masonry();
});

// väntar in bilderna
var $container = $('#container').masonry();
$container.imagesLoaded( function() {
  $container.masonry();
});
</script>
