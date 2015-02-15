<?php

include('adminheader.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if($_POST['logout'] == true){

		$_SESSION['login'] = "0";
		session_destroy();
		header("location:login.php");
		exit;


	}

}





?>

<html>

<div style="margin-top:100px;">
	<div id="formdiv">
		<h1>logga ut</h1>

		<form action="logout.php" method="post">
			
			<input type="submit" value="Logga ut" name="logout" class="button">
	
		</form>
</div>
</html>