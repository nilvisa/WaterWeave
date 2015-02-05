<?php

require_once('server/funcs.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
	
	if(isset($_POST['addPerson']))
	{
		addPerson();
	}
	if(isset($_POST['updatePerson']))
	{
		updatePerson();
	}

?>

<html>
<head>
	<meta charset="utf-8">
	<link href="css/temp_style.css" rel="stylesheet" type="text/css">
</head>


	<form method="post" enctype="multipart/form-data">
		<input type="text" name="f_name" placeholder="Förnamn"><br>
		<input type="text" name="l_name" placeholder="Efternamn"><br>
		<input type="text" name="email" placeholder="E-mail"><br>
		<input type="text" name="tel" placeholder="Telefonnummer"><br>
		<input type="text" name="title" placeholder="Titel"><br>
		<textarea name="story" placeholder="Beskrivning" rows="5" cols="22"></textarea><br>
		<input type="file" name="user_pic"> Välj en bild (valfritt)<br>
		<br><br>
		<input type="submit" name="addPerson" value="Lägg till">
	</form>
	<br><br>

	<hr>

</html>

<?php
	
	$user = getAll();

	if(!empty($user))
	{
		foreach($user as $user)
		{
			print '<div class="edit">';
			print '<h2>Redigera '.$user['f_name'].'</h2>';
			print '<form method="post" enctype="multipart/form-data" action="adduser.php">';
			print '<input type="hidden" name="user_id" value="'.$user['user_id'].'">';
			print '<input type="text" name="f_name" value="'.$user['f_name'].'"><br>';
			print '<input type="text" name="l_name" value="'.$user['l_name'].'"><br>';
			print '<input type="text" name="email" value="'.$user['email'].'"><br>';
			print '<input type="text" name="tel" value="'.$user['tel'].'"><br>';
			print '<input type="text" name="title" value="'.$user['title'].'"><br>';
			print '<textarea name="story" rows="5" cols="22">'.$user['story'].'</textarea><br>';

			if($user['user_pic']){
				print '<input type="file" name="user_pic"> <img src="img/pers/'.$user['user_pic'].'" width="100px"><br>';
			}
			else{
				print '<input type="file" name="user_pic"> <img src="img/pers/profile.png" width="100px"><br>';
			}
			
			print '<input type="submit" name="updatePerson" value="Ändra">';
			print '</form><br><br></div>';

		}
	}
	else print "<p>Det finns inga personer inlaggda i databasen än!</p>";

	


