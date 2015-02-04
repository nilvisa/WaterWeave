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

function updatePerson($user_id)
{
	if(isset($_POST[$user_id]))
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