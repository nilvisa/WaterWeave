<?php include_once("header.php"); 

$sandra = getPerson('13');
$maria = getPerson('12');

include('server/adminprofil.php'); //För att få mail-adressen som formuläret postar till.

?>

<div class="stor_wrap vit">
	<img src="img/head/1_h2.png" id="imgflow">
</div>

<div class="headline">
	<p>Smarta textilier för<br>
	ett rent dagvatten</p>
</div>


<div id="main">
	<div class="arrow-down"></div>

<br>
	<div id="vision">
		<h1>vår vision</h1>
		<p>WaterWeave vill göra skillnad för miljön och öka tillgången på rent dagvatten. WaterWeave gör detta genom att utveckla smarta textilier för dagvattenrening. Genom att kombinera biomassa med textil möjliggör tekniken effektivt upptag av tungmetalljoner i vatten.</p>
	</div>

	<div class="start_col">
		<img src="img/1_s.png">
		<div class="coltext">
			<h2>waterweave</h2><br>
			<p>WaterWeave är ett Göteborgsbaserat<br> start-up som utvecklar ett textilbaserad<br> vattenreningssystem för rening av<br> dagvatten.</p>
		</div>	
		<div class="linkwrapper">
			<a href="waterweave.php" class="button">Läs mer</a>
		</div>		
	</div>

	<div class="start_col">
		<img src="img/2_s.png">
		<div class="coltext">
			<h2>tekniken</h2><br>
			<p>WaterWeave arbetar med att ta fram ett<br> textilbaserat vattenreningssystem som<br> bygger på biologisk rening, en ide som<br> ursprungligen kommer från<br> Textilhögskolan i Borås.</p>
		</div>
		<div class="linkwrapper">
			<a href="tekniken.php" class="button">Läs mer</a>
		</div>
	</div>

	<div class="clearfix"></div>

	<div id="start_kontakt">

		<h2>kontakt</h2>

			<br>
			
			<h3>adress</h3>
			<p>Vera Sandbergsallé 8</br>412 96 Göteborg</p>
			<br><br>

			<h3>sandra melin</h3>
			<p><?php print $sandra['tel']; ?></br>sandra@waterweave.se</p>
			<br><br>

			<h3>maria knutsson</h3>
			<p><?php print $maria['tel']; ?></br>maria@waterweave.se</p>

		
<br><br>

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



<?php include_once("footer.php");?>