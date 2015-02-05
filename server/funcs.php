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
						dbAdd("INSERT INTO waterweave.users (f_name, l_name, email, tel, user_pic, title, story)
							VALUES('$f_name', '$l_name', '$email', '$tel', '$pic_name', '$title', '$story')");
					}
				else
				{
					print "Bilden var inte i ett korrekt bildformatformat...";
				}
			}
			else
			{
				dbAdd("INSERT INTO waterweave.users (f_name, l_name, email, tel, title, story)
							VALUES('$f_name', '$l_name', '$email', '$tel', '$title', '$story')");

				print "Du har nu lagt till ".$f_name;
			}
		}
	}
}

function getAll()
{
	return dbArray("SELECT * FROM waterweave.users
		ORDER BY user_id DESC");
}

function getPerson($f_name)
{
	return dbRow("SELECT * FROM waterweave.users
		WHERE f_name = '$f_name'");
}

function updatePerson()
{
	if(isset($_POST['updatePerson']))
	{
		$user_id = $_POST['user_id'];
		$f_name = filter_var($_POST['f_name'], FILTER_SANITIZE_SPECIAL_CHARS);
		$l_name = filter_var($_POST['l_name'], FILTER_SANITIZE_SPECIAL_CHARS);
		$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
		$tel = filter_var($_POST['tel'], FILTER_SANITIZE_SPECIAL_CHARS);
		$title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
		$story = filter_var($_POST['story'], FILTER_SANITIZE_SPECIAL_CHARS);
		$img = $_FILES['user_pic'];
		$pic_name = $img['name'];
		$pic = checkIMG($img, 'pers');
	
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
						dbAdd("UPDATE waterweave.users 
							SET f_name = '$f_name', l_name = '$l_name',
							email = '$email', tel = '$tel', 
							user_pic = '$pic_name', title = '$title', story = '$story'
							WHERE user_id = '$user_id'");
					}
				else
				{
					print "Bilden var inte i ett korrekt bildformatformat...";
				}
			}
			else
			{
				dbAdd("UPDATE waterweave.users 
					SET f_name = '$f_name', l_name = '$l_name',
					email = '$email', tel = '$tel', 
					title = '$title', story = '$story'
					WHERE user_id = '$user_id'");

				print $f_name."s info har uppdaterats!";
			}
		}
	}
}

function addNews()
{
	if(isset($_POST['addNews']))
	{
		$news_title = filter_var($_POST['news_title'], FILTER_SANITIZE_SPECIAL_CHARS);
		$news = filter_var($_POST['news'], FILTER_SANITIZE_SPECIAL_CHARS);
		$eng_sum = filter_var($_POST['eng_sum'], FILTER_SANITIZE_SPECIAL_CHARS);
		$news_date = filter_var($_POST['news_date'], FILTER_SANITIZE_SPECIAL_CHARS);
		$img = $_FILES['news_pic'];
		$pic_name = $img['name'];
		$pic = checkIMG($img, 'news');

		if($news_title == "" || $news == "" || $eng_sum == "" || $news_date == "")
		{
			print "Du glömnde fylla i ett eller flera fält.";
		}
		else
		{
			if($pic_name)
			{
				if($pic)
					{
						dbAdd("INSERT INTO waterweave.news (news_title, news, eng_sum, news_date, news_pic)
							VALUES('$news_title', '$news', '$eng_sum', '$news_date', '$pic_name')");
					}
				else
				{
					print "Bilden var inte i ett korrekt bildformatformat...";
				}
			}
			else
			{
				dbAdd("INSERT INTO waterweave.news (news_title, news, eng_sum, news_date)
							VALUES('$news_title', '$news', '$eng_sum', '$news_date')");

				print "Du har nu lagt till nyheten ".$news_title;
			}
		}
	}
}

function getAllNews()
{
	return dbArray("SELECT * FROM waterweave.news
		ORDER BY news_date DESC");
}


function updateNews()
{
	if(isset($_POST['updateNews']))
	{
		$news_id = $_POST['news_id'];
		$news_title = filter_var($_POST['news_title'], FILTER_SANITIZE_SPECIAL_CHARS);
		$news = filter_var($_POST['news'], FILTER_SANITIZE_SPECIAL_CHARS);
		$eng_sum = filter_var($_POST['eng_sum'], FILTER_SANITIZE_SPECIAL_CHARS);
		$news_date = filter_var($_POST['news_date'], FILTER_SANITIZE_SPECIAL_CHARS);
		$img = $_FILES['news_pic'];
		$pic_name = $img['name'];
		$pic = checkIMG($img, 'news');

		if($news_title == "" || $news == "" || $eng_sum == "" || $news_date == "")
		{
			print "Du glömnde fylla i ett eller flera fält.";
		}
		else
		{
			if($pic_name)
			{
				if($pic)
					{
						dbAdd("UPDATE waterweave.news
							SET news_title = '$news_title', news = '$news',
							eng_sum = '$eng_sum', news_date = '$news_date',
							news_pic = '$pic_name'
							WHERE news_id = '$news_id'");
					}
				else
				{
					print "Bilden var inte i ett korrekt bildformatformat...";
				}
			}
			else
			{
				dbAdd("UPDATE waterweave.news
							SET news_title = '$news_title', news = '$news',
							eng_sum = '$eng_sum', news_date = '$news_date'
							WHERE news_id = '$news_id'");

				print "Du har updaterat nyheten ".$news_title;
			}
		}
	}
}