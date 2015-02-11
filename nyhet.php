<?php

if(isset($_GET['news']))
{
	$news_id = ($_GET['news'])

		$news = getNews($news_id);

		if($news['news_pic'])
		{
			print '<img src="img/news/'.$news['news_pic'].'">';			
		}
		else
		{
			print '<img src="img/news/logo.png">';
		}		 

		print '<h2>'.$news['news_title'].'</h2>';
		print '('.$news['news_date'].')<br><br>';
		print '<p>'.$news['news'].'</p><br>';
		print '<br><br>';
		
		print '<div class="blue_bar"></div>';
}
