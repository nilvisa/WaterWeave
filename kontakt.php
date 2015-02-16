<?php

include('header.php');

$sandra = getPerson('13');
$maria = getPerson('12');
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
			<p><?php print $sandra['tel']; ?></br>sandra@waterweave.se</p>
			<h3>Maria Knutsson</h3>
			<p><?php print $maria['tel']; ?></br>maria@waterweave.se</p>
			</div>
			<img id="kontaktimg" src="img/14_s-png.png">
		</div>
		<form action="kontakt.php" method="post">
			<div class="inputdiv">
				<input type="text" name="subject" placeholder="Ämne">
			</div>
			<div class="inputdiv">
				<input type="text" name="mail" placeholder="E-mail">
			</div>
			<div class="inputdiv">
				<input type="text" name="phone" placeholder="Telefonnummer">
			</div>
			<div class="inputdiv">
				<input type="text" name="content" placeholder="Ärende">
			</div>
			<div style="clear: both"></div>

			<br>
			<input type="submit" value="skicka" class="button">
	
		</form>

	</div>
</div>






<?php
include('footer.php');

?>