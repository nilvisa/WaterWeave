<?php

$sandra = getPerson('13');
$maria = getPerson('12');

?>

<html>

<div id="footer_logga">
	<img src="img/head/droppe.png">
</div>

<div id="footer">
	<div id="footermain">
		
		<div class="footertext left">
			<p><b>WaterWeave</br></b>
			Vera Sandbergsallé 8</br>
			412 96 Göteborg</p>
		</div>

		<div class="footertext">
			<p>© Copyright 2015</p>
		</div>

		<div class="footertext right">
			<b><p>Kontakt</b></br>
			info@waterweave.se <br>
			<?php print $maria['tel']; ?></p>
		</div>

	</div>
</div>
<div id="tempbottom">
</div>

	
</body>
</html>

