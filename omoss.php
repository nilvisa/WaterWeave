<?php

require_once('server/funcs.php');

$user = getAll();

foreach($user as $user)
{
	print '<div class="pers">';

		if($user['user_pic']) print '<img src="img/pers/'.$user['user_pic'].'" width="200px" align="left">';
		else print '<img src="img/pers/profile.png" width="200px" align="left">';

		print '<h2>'.$user['f_name'].' '.$user['l_name'].'</h2>';
		print '('.$user['title'].')<br><br>';
		print '<p>'.$user['story'].'</p><br><br>';
		print '<i>kontakt: '.$user['email'].'/'.$user['tel'].'</i><br><br><br><br><br>';

	print '</div>';

}

?>

<html>
	<head>
		<link href="css/temp_style.css" rel="stylesheet" type="text/css">
	</head>
</html>