<?php

include('header.php');

$news = getAllNews();

?>


<html>
	
		<div id="headerimg"><img src="img/head/5_h.png"></div>
		<div id="main">
		<h1>nyheter</h1>

		<div id="nyhet">

		<?php		
		if(isset($_GET['news']))
		{
			$news_id = ($_GET['news']);

				$nyhet = getNews($news_id);

				if($nyhet['news_pic'])
				{
					print '<div class="news_img"><img src="img/news/'.$nyhet['news_pic'].'"></div>';			
				}
				
				print mb_strtolower('<h1>'.$nyhet['news_title'].'</h1>', 'UTF-8');
				print '<p>'.$nyhet['news'].'</p>';
				print '<div class="datum">'.convertDate($nyhet['news_date']).'</div>';
				
				print '<div class="border"></div>';
		}
	print '</div>';

	print '<div id="container">';


foreach($news as $news)
{
	print '<div class="item">';
		print '<div class="wrap pil">';

		if($news['news_pic'])
		{
			print '<a href="news.php?news='.$news['news_id'].'"><img src="img/news/'.$news['news_pic'].'"></a>';			
		}
		else
		{
			print '<a href="news.php?news='.$news['news_id'].'"><img src="img/news/logo.png"></a>';
		}

		print '</div>';

		
		if(strlen($news['news']) > 110)
		{
			$sumNews = mb_substr($news['news'], 0, 110, 'UTF-8').'...';
			print '<p>'.$sumNews.' <a href="news.php?news='.$news['news_id'].'">läs mer</a></p>';
		}
		else
		{
			print '<p>'.$news['news'].'</p>';
		}

		print '<div class="border"></div>';

	print '</div>';


	
}

print '</div></div></div>

</body></html>';

include('footer.php');

?>

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
