<?php

include('adminheader.php');

?>

<html>

	<div id="formdiv">

<?php

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		print '<div class="msg" style="width: 90%">';

		if(isset($_POST['addNews']))
		{
			addNews();
		}

		print '</div>';
	}

?>

	<h1>lägg till en ny nyhet</h1>
	<form method="post" enctype="multipart/form-data">
		
		<div class="inputdiv">
			<input type="text" name="news_title" placeholder="Titel"
			value="<?php if(isset($_POST['news_title'])){ echo htmlentities($_POST['news_title']);} ?>"><br>
		</div>

		<div class="inputdiv">
			<input type="text" name="news_date" placeholder="åååå-mm-dd"
			value="<?php if(isset($_POST['news_date'])){ echo htmlentities($_POST['news_date']);} ?>"><br>
		</div>

		<div class="inputdiv stor">
			<textarea name="news" placeholder="Nyheten" rows="5" cols="22"><?php if(isset($_POST['news'])){ echo htmlentities($_POST['news']);} ?></textarea><br>
		</div>

		<div class="inputdiv">
			<input type="file" name="news_pic">
		</div>
		
		<input type="submit" name="addNews" value="Lägg till" class="button">

		<div style="clear: both"></div>
		
		<div class="lathund">
			<h2>&lt;br&gt;</h2><p> Radbrytning</p><br>
			<h2>&lt;b&gt; text &lt;/b&gt;</h2><p> Fetstilt</p><br>
			<h2>&lt;i&gt; text &lt;/i&gt;</h2><p> Kursivt</p><br>
			<h2>&lt;a href="http://adress" target="new"&gt;länk&lt;/a&gt;</h2><p> Länk (öppnas i ny flik)</p><br>
			<h2>&lt;img src="http://bildadress" class="news_img"&gt;</h2><p> Extra bild</p><br>
			
		</div>
	
	</form>
	<br><br>

</html>

<?php
	

?>
