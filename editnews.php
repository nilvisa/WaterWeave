<?php

include('adminheader.php');

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