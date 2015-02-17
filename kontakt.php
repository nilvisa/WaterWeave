<?php
include('header.php');

$sandra = getPerson('13');
$maria = getPerson('12');

include('server/adminprofil.php'); //För att få mail-adressen som formuläret postar till.

//följande kod är tagen från denna sida: http://www.formget.com/send-an-email-on-form-submission-using-php/
$errormsg = "";
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
$errormsg = "Fyll i alla fält..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
$errormsg = "Avsändarens e-mail är ogiltig";
}
else{
$subject = $_POST['sub'];
$message = $_POST['msg'];
$headers = 'From:'. $email . "\r\n"; // Sender's Email
$headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail($yourmail, $subject, $message, $headers);
$errormsg = "Ditt meddelande är skickat! Tack för din feedback";
}
}
}
 
?>

	<div id="main">
		<div id="headerimg"><img src="img/head/6_h.png"></div>

		<h1>kontakt</h1>
		<div class="kontakt2col">
			
			<br>
			<h3>adress</h3>
			<p>Vera Sandbergsallé 8</br>412 96 Göteborg</p>
			<br><br>

			<h3>sandra melin</h3>
			<p><?php print $sandra['tel']; ?></br>sandra@waterweave.se</p>
			<br><br>

			<h3>maria knutsson</h3>
			<p><?php print $maria['tel']; ?></br>maria@waterweave.se</p>
		</div>
		<div class="kontakt2col">
			<img src="img/14_s-png.png">
		</div>

		<div class="clearfix"></div>

		
		<div id="kontaktform">
			<p><?php print $errormsg; ?></p>
			<form action="kontakt.php" method="post" name="form">
				<div class="inputdiv">
					<input type="text" name="vname" placeholder="Namn">
				</div>
				<div class="inputdiv">
					<input type="text" name="vemail" placeholder="E-mail">
				</div>
				<div class="inputdiv">
					<input type="text" name="sub" placeholder="Ämne">
				</div>
				<div class="inputdiv">
					<textarea name="msg" placeholder="Skriv din text här..." rows="5"></textarea>
				</div>
				<div style="clear: both"></div>
				<br>
				<input type="submit" value="skicka" class="button" name="submit">
			</form>
		</div>

	</div>
</div>

<div class="wrap vit">
		<div id="main2"></div>
	</div>



<?php
include('footer.php');
?>