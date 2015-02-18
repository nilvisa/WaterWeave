<?php

$sandra = getPerson('13');
$maria = getPerson('12');

?>

<html>

<!-- <div id="footer_logga">
	<img src="img/head/logotyp_vector.png">
</div> -->

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
			<p><b>Sandra Melin</b></br>
			<?php print $sandra['tel']; ?> <br>

			<b>Maria Knutsson</b></br>
			<?php print $maria['tel']; ?></p>
		</div>

	</div>
</div>
<div id="tempbottom">
</div>

	
</body>
</html>

