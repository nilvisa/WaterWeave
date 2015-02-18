<?php

$sandra = getPerson('13');
$maria = getPerson('12');

?>

<html>

<div id="footer">
	<div id="footermain">
		
		<div class="footertext left">
			<p><b>WaterWeave</br></b>
			Vera Sandbergsallé 8</br>
			412 96 Göteborg</p>
		</div>

		<div class="footertext">
			<p><b>© Copyright 2015</b></p>
		</div>

		<div class="footertext right">
			<p><b>Kontakt</b></br>
			info@waterweave.se <br>
			<?php print $maria['tel']; ?></p>
		</div>

	</div>
</div>
<div id="tempbottom">
</div>

	
</body>
</html>

