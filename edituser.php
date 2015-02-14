<?php

include('adminheader.php');

	if($_SERVER["REQUEST_METHOD"] == "POST")
	
	if(isset($_POST['addPerson']))
	{
		addPerson();
	}
	if(isset($_POST['delete']))
	{
		delete('waterweave.users', 'user_id', 'f_name');
	}

	$user = getAll();

	if(!empty($user))
	{
		foreach($user as $user)
		{
			print '<div class="edit">';
				print '<div class="delete">';
					print '<form method="post">
						<input type="hidden" name="id" value="'.$user['user_id'].'">
						<input type="hidden" name="name" value="'.$user['f_name'].'">
						<input type="submit" name="delete" value="Radera">
					</form>';
				print '</div>';

				print '<h2>Redigera '.$user['f_name'].'</h2>';

				print '<form method="post" enctype="multipart/form-data" action="adduser.php">
					<input type="hidden" name="update" value="update">
					<input type="hidden" name="user_id" value="'.$user['user_id'].'">
					<input type="text" name="f_name" value="'.$user['f_name'].'"><br>
					<input type="text" name="l_name" value="'.$user['l_name'].'"><br>
					<input type="text" name="email" value="'.$user['email'].'"><br>
					<input type="text" name="tel" value="'.$user['tel'].'"><br>
					<input type="text" name="title" value="'.$user['title'].'"><br>
					<textarea name="story" rows="5" cols="22">'.$user['story'].'</textarea><br>
					<input type="text" name="place" value="'.$user['place'].'"><br>';

					if($user['user_pic']){
						print '<input type="file" name="user_pic"> <img src="img/pers/'.$user['user_pic'].'" width="100px"><br>';
					}
					else{
						print '<input type="file" name="user_pic"> <img src="img/pers/profile.png" width="100px"><br>';
					}
					
					print '<input type="submit" name="addPerson" value="Ändra">
				</form>';
			print '</div>';

		}
	}
	else print "<p>Det finns inga personer inlaggda i databasen än!</p>";

	

