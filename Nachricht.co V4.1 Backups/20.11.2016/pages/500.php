<?php
if(!isset($apage))
{
	exit();
}
?>
	<div class="conintro">
		<?php
		header("HTTP/1.0 500 Internal Server Error"); 
		include('pages/misc.header.php');
		?>
		
		<section class="nachricht">
		<div class="container shadow">
			<div class="output-link round">
				<h2 class="error">Fehler 500</h2>
				<p>Bitte versuche es zu einem späteren Zeitpunkt noch einmal.</p>
			</div>
		</div>
		<?php include('pages/misc.adsense.php'); ?>
		</section>
	</div>
	
	<?php include('pages/home.php'); ?>