<?php

include('adminheader.php');


?>

<html>
	<div id="formdiv">
		<h1>lägg till en ny i teamet</h1>

		<form method="post" enctype="multipart/form-data">
			<div class="inputdiv">
				<input type="text" name="f_name" placeholder="Förnamn" 
				value="<?php if(isset($_POST['f_name'])){ echo htmlentities($_POST['f_name']);} ?>">
			</div>
			<div class="inputdiv">
				<input type="text" name="l_name" placeholder="Efternamn"
				value="<?php if(isset($_POST['l_name'])){ echo htmlentities($_POST['l_name']);} ?>">
			</div>
			<div class="inputdiv">
				<input type="text" name="email" placeholder="E-mail"
				value="<?php if(isset($_POST['email'])){ echo htmlentities($_POST['email']);} ?>">
			</div>
			<div class="inputdiv">
				<input type="text" name="tel" placeholder="Telefonnummer"
				value="<?php if(isset($_POST['tel'])){ echo htmlentities($_POST['tel']);} ?>">
			</div>
			<div class="inputdiv">
				<input type="text" name="title" placeholder="Titel"
				value="<?php if(isset($_POST['title'])){ echo htmlentities($_POST['title']);} ?>">
			</div>
			<div class="inputdiv file">
				<input type="file" name="user_pic" value="Välj en bild (valfritt)">	<br>
			</div>
			<div class="inputdiv">
				<textarea name="story" placeholder="Beskrivning" rows="5" cols="22"><?php if(isset($_POST['story'])){ echo htmlentities($_POST['story']);} ?></textarea><br>
			</div>
			<?php

				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if(isset($_POST['addPerson']))
					{
						print '<div class="msg">';
						print addPerson();
						print '</div>';
					}
				}
	
			?>

			<div style="clear: both"></div>

				<br>
				<input type="submit" name="addPerson" value="Lägg till" class="button">
		
		</form>
	</div>

</html>