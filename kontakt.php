<?php
include('header.php');

$sandra = getPerson('13');
$maria = getPerson('12');

include('server/adminprofil.php'); //För att få mail-adressen som formuläret postar till.

 
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
			<form action="http://formmail.loopia-waterweave.se" method="post" name="form">
				<input type="hidden" name="recipient" value="<?php print $yourmail; ?>">
				<input type="hidden" name="redirect" 
  					value="mailsubmit.php">
				<div class="inputdiv">
					<input type="text" name="name" placeholder="Namn">
				</div>
				<div class="inputdiv">
					<input type="text" name="email" placeholder="E-mail">
				</div>
				<div class="inputdiv">
					<input type="text" name="subject" placeholder="Ämne">
				</div>
				<div class="inputdiv">
					<textarea name="body" placeholder="Skriv din text här..." rows="5"></textarea>
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