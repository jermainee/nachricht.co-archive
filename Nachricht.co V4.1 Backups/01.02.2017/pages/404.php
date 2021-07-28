<?php
if(!isset($apage))
{
	exit();
}
?>
	<div class="conintro">
		<?php
		header("HTTP/1.0 404 Not Found"); 
		include('pages/misc.header.php');
		?>
		
		<section class="nachricht">
		<div class="container shadow">
			<div class="output-link round">
				<h2 class="error">Seite nicht gefunden! - 404</h2>
				<p>Die von dir gesuchte Seite konnte leider nicht gefunden werden.</p>
			</div>
		</div>
		<?php include('pages/misc.adsense.php'); ?>
		</section>
	</div>
	<?php include('pages/home.php'); ?>