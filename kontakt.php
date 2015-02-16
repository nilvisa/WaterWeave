<?php

//include('header.php');

//$sandra = getPerson('13');
//$maria = getPerson('12');



if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = $_POST['sub'];
$message = $_POST['msg'];
$headers = 'From:'. $email . "\r\n"; // Sender's Email
$headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("hundenmarvin@gmail.com", $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
}
}
 
?>



<div id="headerimg"><img src="img/head/4_h.png"></div>
<div class="wrap">
	<div id="main">
		<h1>kontakt</h1>
		<div class="kontakt2col">
			<div id="kontaktadresser">
			<h3>Adress</h3>
			<p>Vera Sandbergsallé 8</br>412 96 Göteborg</p>
			<h3>Sandra Melin</h3>
			<p><?php //print $sandra['tel']; ?></br>sandra@waterweave.se</p>
			<h3>Maria Knutsson</h3>
			<p><?php //print $maria['tel']; ?></br>maria@waterweave.se</p>
			</div>
			<img id="kontaktimg" src="img/14_s-png.png">
		</div>
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
				<textarea name="msg" placeholder="Skriv din text här..."></textarea>
			</div>
			<div style="clear: both"></div>

			<br>
			<input type="submit" value="skicka" class="button" name="submit">
	
		</form>

	</div>
</div>






<?php
//include('footer.php');

?>