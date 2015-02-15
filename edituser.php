<?php

include('adminheader.php');


print '<div id="formdiv">';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	print '<div class="msg" style="width: 90%">';

	if(isset($_POST['addPerson']))
	{
		addPerson();
	}
	if(isset($_POST['delete']))
	{
		delete('users', 'user_id', 'f_name');
	}

	print '</div><div style="clear: both"></div>';

}

$user = getAll();

	print '<h1>redigera teamet</h1>';
	if(!empty($user))
	{
		foreach($user as $user)
		{
			print '<div class="block">';

				print '<div class="delete">';
					print '<form method="post">
						<input type="hidden" name="id" value="'.$user['user_id'].'">
						<input type="hidden" name="name" value="'.$user['f_name'].'">
						<input type="submit" name="delete" value="Radera" class="button del_button">
					</form>';
				print '</div>';

				print '<h2>redigera '.mb_strtolower($user['f_name'], 'UTF-8').'</h2>';

				print '<form method="post" enctype="multipart/form-data" action="edituser.php">
					<input type="hidden" name="update" value="update">
					<input type="hidden" name="user_id" value="'.$user['user_id'].'">

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

				<div class="inputdiv place">
					 <h2>placering <input type="text" name="place" value="'.$user['place'].'"></h2>
				</div>
';

				print '<div class="inputdiv">
					<textarea name="story" rows="7" cols="22">'.$user['story'].'</textarea>
				</div>';

				print '<div class="inputdiv file">';
					if($user['user_pic']){
						print '<input type="file" name="user_pic"> <img src="img/pers/'.$user['user_pic'].'" width="100px"><br>';
					}
					else{
						print '<input type="file" name="user_pic"> <img src="img/pers/profile.png" width="100px"><br>';
					}
					print '</div>';

					print '<div style="clear: both"></div>';
			
					
					print '<input type="submit" name="addPerson" value="Ändra" class="button">
				</form>';


			print '<br><br><br><br></div>';
		}
	}
	else 
	{
		print "<p>Det finns inga personer inlaggda i databasen än!</p>";
	}

	print '</div>';

	

