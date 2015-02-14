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

print '<div id="formdiv">';
	print '<h1>redigera teamet</h1>';
	if(!empty($user))
	{
		foreach($user as $user)
		{
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

				<div class="inputdiv">
					<input type="hidden" name="user_id" value="'.$user['user_id'].'">
				</div>

				<div class="inputdiv">
					<input type="text" name="f_name" value="'.$user['f_name'].'">
				</div>

				<div class="inputdiv">
					<input type="text" name="l_name" value="'.$user['l_name'].'">
				</div>

				<div class="inputdiv">
					<input type="text" name="email" value="'.$user['email'].'">
				</div>

				<div class="inputdiv">
					<input type="text" name="tel" value="'.$user['tel'].'">
				</div>

				<div class="inputdiv">
					<input type="text" name="title" value="'.$user['title'].'">
				</div>
				
				<div class="inputdiv">
					<input type="text" name="place" value="'.$user['place'].'">
				</div>';

				print '<div class="inputdiv">
					<textarea name="story" rows="5" cols="22">'.$user['story'].'</textarea>
				</div>';

				print '<div class="inputdiv">';
					if($user['user_pic']){
						print '<input type="file" name="user_pic"> <img src="img/pers/'.$user['user_pic'].'" width="100px"><br>';
					}
					else{
						print '<input type="file" name="user_pic"> <img src="img/pers/profile.png" width="100px"><br>';
					}
					print '</div>';


			
					
					print '<input type="submit" name="addPerson" value="Ändra">
				</form>';

		}
	}
	else print "<p>Det finns inga personer inlaggda i databasen än!</p>";

	print '</div>';

	

