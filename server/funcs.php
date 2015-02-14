<?php

require_once('connection.php');

function addPerson()
{
	if(isset($_POST['addPerson']))
	{
		$f_name = filter_var($_POST['f_name'], FILTER_SANITIZE_SPECIAL_CHARS);
		$l_name = filter_var($_POST['l_name'], FILTER_SANITIZE_SPECIAL_CHARS);
		$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
		$tel = filter_var($_POST['tel'], FILTER_SANITIZE_SPECIAL_CHARS);
		$title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
		$story = filter_var($_POST['story'], FILTER_SANITIZE_SPECIAL_CHARS);
		$img = $_FILES['user_pic'];
		$pic_name = $img['name'];
		$pic = checkIMG($img, 'pers');

		if(isset($_POST['update']))
		{
			$user_id = $_POST['user_id'];
			$update = $_POST['update'];
		}
	
		if($f_name == "" || $l_name == "" || $email == "" || $tel == "" || $title == "" || $story == "")
		{
			print "Du glömde att fylla i ett eller flera av fälten.";
		}
		else
		{
			if($pic_name)
			{
				if($pic)
					{
						if(isset($_POST['update']))
						{
							$place = filter_var($_POST['place'], FILTER_SANITIZE_SPECIAL_CHARS);

							dbAdd("UPDATE users 
							SET f_name = '$f_name', l_name = '$l_name',
							email = '$email', tel = '$tel', 
							user_pic = '$pic_name', title = '$title', story = '$story',
							place = '$place'
							WHERE user_id = '$user_id'");

							print $f_name."s info har uppdaterats!";
						}
						else
						{
							$lastplace = dbRow("SELECT place FROM users
								ORDER BY place DESC");

							$newplace = $lastplace['place']+1;

							dbAdd("INSERT INTO users (f_name, l_name, email, tel, user_pic, title, story, place)
							VALUES('$f_name', '$l_name', '$email', '$tel', '$pic_name', '$title', '$story', '$newplace')");
						
							print "Du har nu lagt till ".$f_name;
						}
						
					}
				else
				{
					print "Bilden var inte i ett korrekt bildformatformat...";
				}
			}
			else
			{
				if(isset($_POST['update']))
				{
					$place = filter_var($_POST['place'], FILTER_SANITIZE_SPECIAL_CHARS);

					dbAdd("UPDATE users 
					SET f_name = '$f_name', l_name = '$l_name',
					email = '$email', tel = '$tel', 
					title = '$title', story = '$story', place = '$place'
					WHERE user_id = '$user_id'");

					print $f_name."s info har uppdaterats!";
				}
				else
				{

					$lastplace = dbRow("SELECT place FROM users
						ORDER BY place DESC");

					$newplace = $lastplace['place']+1;

					dbAdd("INSERT INTO users (f_name, l_name, email, tel, title, story, place)
							VALUES('$f_name', '$l_name', '$email', '$tel', '$title', '$story', '$newplace')");

					print "Du har nu lagt till ".$f_name;
				}
				
			}
		}
	}
}

function getAll()
{
	return dbArray("SELECT * FROM users
		ORDER BY place");
}

function getPerson($id)
{
	return dbRow("SELECT * FROM users
		WHERE user_id = '$id'");
}


function addNews()
{
	if(isset($_POST['addNews']))
	{
		$news_title = $_POST['news_title'];
		$news = $_POST['news'];
		$news_date = $_POST['news_date'];
		$img = $_FILES['news_pic'];
		$pic_name = $img['name'];
		$pic = checkIMG($img, 'news');

		if(isset($_POST['update']))
		{
			$news_id = $_POST['news_id'];
			$update = $_POST['update'];
		}
	
		if($news_title == "" || $news == "" || $news_date == "")
		{
			print "Du glömnde fylla i ett eller flera fält.";
		}
		else
		{
			if(strlen($news_date) !== 10)
			{
				print "Fel datumformat! (yyyy-mm-dd)";
			}
			else
			{
				if($pic_name)
				{
					if($pic)
						{
							if(isset($_POST['update']))
							{
								dbAdd("UPDATE news
								SET news_title = '$news_title', news = '$news',
								news_date = '$news_date', news_pic = '$pic_name'
								WHERE news_id = '$news_id'");

								print 'Du har updaterat nyheten "'.$news_title.'"';
							}
							else
							{
								dbAdd("INSERT INTO news (news_title, news, news_date, news_pic)
								VALUES('$news_title', '$news', '$eng_sum', '$news_date', '$pic_name')");

								print 'Du har nu lagt till nyheten "'.$news_title.'"';
							}
						}
					else
					{
						print "Bilden var inte i ett korrekt bildformatformat...";
					}
				}
				else
				{ 
					if(isset($_POST['update']))
					{
						dbAdd("UPDATE news
							SET news_title = '$news_title', news = '$news', news_date = '$news_date'
							WHERE news_id = '$news_id'");

						print 'Du har updaterat nyheten "'.$news_title.'"';

					}
					else
					{
						dbAdd("INSERT INTO news (news_title, news, news_date)
								VALUES('$news_title', '$news', '$news_date')");

						print 'Du har nu lagt till nyheten "'.$news_title.'"';
					}
				}
			}			
		}
	}
}

function getAllNews()
{
	return dbArray("SELECT * FROM news
		ORDER BY news_date DESC");
}

function getNews($id)
{
	return dbRow("SELECT * FROM news
		WHERE news_id = '$id'");
}


function delete($table, $col_id, $col_name)
{
	if(isset($_POST['delete']))
	{
		$id = $_POST['id'];
		$name = $_POST['name'];

		dbAdd("DELETE FROM $table
			WHERE $col_id = '$id' AND $col_name = '$name'");

		print 'Du har tagit bort "'.$name.'"';
	}
}


function convertDate($date)
{
	$year = substr($date, 0, 4);

	$monthNo = substr($date, 5, 2);
	$monthArray = [
					'01' => "januari",
					'02' => "februari",
					'03' => "mars",
					'04' => "april",
					'05' => "maj",
					'06' => "juni",
					'07' => "juli",
					'08' => "augusti",
					'09' => "september",
					'10' => "oktober",
					'11' => "november",
					'12' => "december"];

	$month = $monthArray[$monthNo];

	$day = substr($date, 8, 2);
	$end = ':e';

	if($day == 1 || $day == 2 || $day == 21 || $day == 22)
	{
		$end = ':a';
	}

	if($day < 10)
	{
		$day = substr($day, 1, 1);
	}

	return $day.$end.' '.$month.' '.$year;

}






