<?php

require_once('server/funcs.php');

$news = getAllNews();

foreach($news as $news)
{
	print '<div class="news">';

		if($news['news_pic']) print '<img src="img/news/'.$news['news_pic'].'" width="400px">';
		else print '<img src="img/news/logo.png" width="400px">';

		print '<h2>'.$news['news_title'].'</h2>';
		print '('.$news['news_date'].')<br><br>';
		print '<p>'.$news['news'].'</p><br><br>';
		print '<br><br><br>';

	print '</div>';

}

?>

<html>
	<head>
		<meta charset="utf-8">
		<link href="css/temp_style.css" rel="stylesheet" type="text/css">
	</head>
</html>


