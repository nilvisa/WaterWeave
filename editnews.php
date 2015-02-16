<?php

include('adminheader.php');

print '<div id="edit_wrapper">';

if($_SERVER["REQUEST_METHOD"] == "POST")
{

	print '<div class="msg" style="width: 300px; margin-left: 30px">';

	if(isset($_POST['addNews']))
	{
		addNews();
	}

	if(isset($_POST['delete']))
	{
		delete('news', 'news_id', 'news_title');
	}

	print '</div><div style="clear: both"></div>';
}




	print '<h1>redigera nyheter</h1>';


$news = getAllNews();

	if(!empty($news))
	{
		foreach($news as $news)
		{
			print '<div class="edit">';

				print mb_strtolower('<h2>"'.$news['news_title'].'"</h2>', 'UTF-8');

				print'<form method="post" enctype="multipart/form-data">
					<input type="hidden" name="update" value="update">
					<input type="hidden" name="news_id" value="'.$news['news_id'].'">
					<input type="text" name="news_title" value="'.$news['news_title'].'"><br>
					<input type="text" name="news_date" value="'.$news['news_date'].'"><br>
					<textarea name="news" rows="10" cols="22">'.$news['news'].'</textarea><br>';

					if($news['news_pic'])
					{
						print '<div class="inputdiv file">
							<input type="file" name="news_pic"> <img src="img/news/'.$news['news_pic'].'" width="100px"><br>
							</div>';
					}
					else
					{
						print '<div class="inputdiv file">
							<input type="file" name="news_pic"> <img src="img/news/logo.png" width="100px"><br>
							</div>';
					}
					
					print '<div id="knappar"><div class="knapp">
						<form method="post">
							<input type="hidden" name="id" value="'.$news['news_id'].'">
							<input type="hidden" name="name" value="'.$news['news_title'].'">
							<input type="submit" name="delete" value="Radera" class="button del_button">
						</form>
					</div>';

					print '<div class="knapp">
						<input type="submit" name="addNews" value="Ändra" class="button">
						</div>
					</form> </div>';
			print '</div>';
		}
	}
	else print "<p>Det finns inga nyhter att visa än!</p>";

print '</div></div>';

?>