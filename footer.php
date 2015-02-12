<?php

$sandra = getPerson('13');
$maria = getPerson('12');

?>

<html>
<div id="footer">
	<div id="footermain">
		
		<div class="footertext">
			<p>WaterWeave</br>
			Vera Sandbergsallé 8</br>
			412 96 Göteborg</p>
		</div>

		<div class="footertext">
			<p>© Copyright 2015</p>
		</div>

		<div class="footertext">
			<p>Sandra Melin</br>
			<?php print $sandra['tel']; ?> <br>

			Maria Knutsson</br>
			<?php print $maria['tel']; ?></p>
		</div>

	</div>
</div>
<div id="tempbottom">
</div>

	
</body>
</html>