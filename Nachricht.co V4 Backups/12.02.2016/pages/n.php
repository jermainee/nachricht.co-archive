<?php
if(!isset($apage))
{
	exit();
}
?>
	<div class="conintro">
		<?php include('pages/misc.header.php'); ?>
	
	<section class="nachricht">
		<div class="container shadow">
					<?php
					
				if($verification == true)
				{
				?>
				<div class="output round">
				<div class="noutput round">
				<?php
					echo smileys(autolink(htmlspecialchars(decrypt($encrypted, $passwort1))));
					mysqli_query($verbindung,"UPDATE nachrichten SET nachricht= '', empfangen= '$timestamp' WHERE id= $id1");
					//mysql_query("UPDATE counter SET empfangen= empfangen +1") or die();
				
				?>
				</div>
				<button onclick="window.location.href='/'" class="button round">Neue Nachricht</button>
				</div>
				<?php
				}else if(empty($empfangen)){
					?>
					<div class="output-link round">
			<?php
				if($wrongpw == true)
				{
					echo "<p>Das Passwort war inkorrekt.</p>";
				}else{
					echo "<p>Diese Nachricht wurde mit einem Passwort geschützt.</p>";
				}
			?>
				<form action="" method="POST" class="passphrase-form">
					<input type="text" name="passphrase" class="passwd round" placeholder="Passwort eingeben ..." autocomplete="off" autofocus required>
					<button type="submit" class="button round">Bestätigen</button>
				</form>
			</div>
				</form>
					<?php
				}
				
				if(!empty($empfangen))
				{
				?>
				<div class="output round">
				<div class="noutput round">
				<?php
					echo "<b>Nachricht wurde bereits gelesen!</b><p>Diese Nachricht wurde bereits gelesen und gelöscht.<br />Gelesen: ".$empfangen."</p>";
				?>
				</div>
				<button onclick="window.location.href='/'" class="button round">Neue Nachricht</button>
			</div>
				<?php
				}
					
					?>
				
		</div>
		<?php include('pages/misc.adsense.php'); ?>
	</section>
	</div>
	
	<?php include('pages/home.php'); ?>