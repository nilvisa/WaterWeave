<?php

require_once('server/funcs.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
	
	if(isset($_POST['addNews']))
	{
		addNews();
	}
	if(isset($_POST['updateNews']))
	{
		updateNews();
	}

?>

<html>
<head><meta charset="utf-8"></head>

	<form method="post" enctype="multipart/form-data">
		<input type="text" name="news_title" placeholder="Titel"><br>
		<input type="text" name="news_date" placeholder="åååå-mm-dd"><br>
		<textarea name="news" placeholder="Nyheten" rows="5" cols="22"></textarea><br>
		<textarea name="eng_sum" placeholder="Engelsk sammanfattning" rows="5" cols="22"></textarea><br>
		<input type="file" name="news_pic"> Välj en bild (valfritt)<br>
		<br><br>
		<input type="submit" name="addNews" value="Lägg till">
	</form>
	<br><br>

	<hr>

</html>

<?php
	
	$news = getAllNews();

	if(!empty($news))
	{
		foreach($news as $news)
		{
			print '<div class="edit">';
			print '<h2>Redigera "'.$news['news_title'].'"</h2>';
			print '<form method="post" enctype="multipart/form-data">';
			print '<input type="hidden" name="news_id" value="'.$news['news_id'].'">';
			print '<input type="text" name="news_title" value="'.$news['news_title'].'"><br>';
			print '<input type="text" name="news_date" value="'.$news['news_date'].'"><br>';
			print '<textarea name="news" rows="5" cols="22">'.$news['news'].'</textarea><br>';
			print '<textarea name="eng_sum" rows="5" cols="22">'.$news['eng_sum'].'</textarea><br>';

			if($news['news_pic']){
				print '<input type="file" name="news_pic"> <img src="img/news/'.$news['news_pic'].'" width="100px"><br>';
			}
			else{
				print '<input type="file" name="news_pic"> <img src="img/news/logo.png" width="100px"><br>';
			}
			
			print '<input type="submit" name="updateNews" value="Ändra">';
			print '</form><br><br></div>';

		}
	}
	else print "<p>Det finns inga nyhter att visa än!</p>";

	

?>

<html>
	<head>
		<link href="css/temp_style.css" rel="stylesheet" type="text/css">
	</head>
</html>
