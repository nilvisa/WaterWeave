<?php

include('header.php');

$user = getAll();

print '<div id="main">';

print '<div id="headerimg"><img src="img/head/4_h.png"></div>';

print '<h1>teamet</h1>';

foreach($user as $user)
{
	print '<div class="team">';

		if($user['user_pic'])
		{
			print '<img src="img/pers/'.$user['user_pic'].'">';
		}
		else 
		{
			print '<img src="img/pers/profile.png">';
		}

		print mb_strtoupper('<h2>'.$user['f_name'].' '.$user['l_name'].'</h2>', 'UTF-8');
		print '<h3>'.$user['title'].'</h3>';
		print '<p>'.$user['story'].'</p>';
		
	print '</div>';
}

print '<div style="clear: both"></div>
	</div></div>';

print '	<div class="wrap vit">
		<div id="main2"></div>
	</div>';




include('footer.php');

?>
