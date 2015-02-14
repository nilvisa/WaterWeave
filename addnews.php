<?php

require_once('server/funcs.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST['addNews']))
	{
		addNews();
	}
	if(isset($_POST['delete']))
	{
		delete('waterweave.news', 'news_id', 'news_title');
	}
}

?>

<html>
<head>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
</head>

	<form method="post" enctype="multipart/form-data">

		<input type="text" name="news_title" placeholder="Titel"
		value="<?php if(isset($_POST['news_title'])){ echo htmlentities($_POST['news_title']);} ?>"><br>

		<input type="text" name="news_date" placeholder="åååå-mm-dd"
		value="<?php if(isset($_POST['news_date'])){ echo htmlentities($_POST['news_date']);} ?>"><br>

		<textarea name="news" placeholder="Nyheten" rows="5" cols="22"><?php if(isset($_POST['news'])){ echo htmlentities($_POST['news']);} ?></textarea><br>

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
				print '<div class="delete">';
					print '<form method="post">
						<input type="hidden" name="id" value="'.$news['news_id'].'">
						<input type="hidden" name="name" value="'.$news['news_title'].'">
						<input type="submit" name="delete" value="Radera">
					</form>';
				print '</div>';

				print mb_strtolower('<h2>Redigera "'.$news['news_title'].'"</h2>', 'UTF-8');

				print'<form method="post" enctype="multipart/form-data">
					<input type="hidden" name="update" value="update">
					<input type="hidden" name="news_id" value="'.$news['news_id'].'">
					<input type="text" name="news_title" value="'.$news['news_title'].'"><br>
					<input type="text" name="news_date" value="'.$news['news_date'].'"><br>
					<textarea name="news" rows="5" cols="22">'.$news['news'].'</textarea><br>';

					if($news['news_pic'])
					{
						print '<input type="file" name="news_pic"> <img src="img/news/'.$news['news_pic'].'" width="100px"><br>';
					}
					else
					{
						print '<input type="file" name="news_pic"> <img src="img/news/logo.png" width="100px"><br>';
					}
					
					print '<input type="submit" name="addNews" value="Ändra">
				</form>';
			print '</div>';
		}
	}
	else print "<p>Det finns inga nyhter att visa än!</p>";

	

?>
