<?php

include('header.php');

$news = getAllNews();

print '<div id="headerimg"><img src="img/head/5_h.png"></div>';
?>


<html>
<br><br><br>
	
	<div id="nyhet">
		<?php		
		if(isset($_GET['news']))
		{
			$news_id = ($_GET['news']);

				$nyhet = getNews($news_id);

				if($nyhet['news_pic'])
				{
					print '<img src="img/news/'.$nyhet['news_pic'].'">';			
				}
				
				print mb_strtolower('<h1>'.$nyhet['news_title'].'</h1>', 'UTF-8');
				print '<p>('.$nyhet['news_date'].')</p><br><br>';
				print '<p>'.$nyhet['news'].'</p><br>';
				print '<br><br>';
				
				print '<div class="blue_bar"></div>';
		}
	print '</div>';

	print '<div id="container">';


foreach($news as $news)
{
	print '<div class="item">';
		print '<div class="wrap">';

		if($news['news_pic'])
		{
			print '<a href="news.php?news='.$news['news_id'].'"><img src="img/news/'.$news['news_pic'].'"></a>';			
		}
		else
		{
			print '<a href="news.php?news='.$news['news_id'].'"><img src="img/news/logo.png"></a>';
		}

		print '</div>';
		print '<div class="arrow-down"></div>';		 

		if(strlen($news['news']) > 100)
		{
			$sumNews = substr($news['news'], 0, 100).'...';
			print '<p>'.$sumNews.' <a href="news.php?news='.$news['news_id'].'">läs mer</a></p>';
		}
		else
		{
			print '<p>'.$news['news'].'</p>';
		}

		print '<div class="blue_bar"></div>';

	print '</div>';


	
}




print '</div></body></html>';

include('footer.php');

?>

<script src="js/jquery-1.11.2.min.js"></script>
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
