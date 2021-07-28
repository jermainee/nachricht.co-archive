<?
$uri = $_SERVER['REQUEST_URI'];
if($uri !== '/' AND $uri !== '/home/')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
	<div class="conintro">
		<? include('pages/misc.header.php'); ?>
	
	
	
	<?
						if(isset($_POST['erstellen']))
							{
							require_once('includes/inc.mysql.php');
							include('includes/inc.encryption.php');
							$null = "";
    						$eintrag = "INSERT INTO nachrichten (id, erstellt, empfangen, nachricht) VALUES ('$id', '$timestampr', '$null', '$encrypted')" or die ();
							if(empty($nachricht))
								{
								?>
								<section class="nachricht">
									<div class="container shadow">
										<div class="output-link round">
											<p><? echo $err1; ?></p>
										</div>
									</div>
								</section>
								<?
								}else{
									$eintragen = mysql_query($eintrag);
									if($eintragen == true)
										{
										$link = 'https://nachricht.co/'.$id.'_'.$passwort;
										mysql_query("UPDATE counter SET nachrichten= nachrichten +1 WHERE cid= 'counter'");
										?>
										<section class="nachricht">
		<div class="container shadow">
			<div class="output-link round">
				<p>Kopiere diesen Link und sende ihn wem du möchtest.<br />Die erstellte Nachricht wird sofort gelöscht, nachdem sie das erste Mal geöffnet wurde.</p>
				<input type="text" class="link round" onclick="this.select()" class="link" value="<? echo $link; ?>" autofocus>
			</div>
		</div>
		<? include('pages/misc.adsense.php'); ?>
	</section>
								<?
										}else{
								?>
								<section class="nachricht">
									<div class="container">
										<div class="output-link round">
											<p><? echo $err2; ?></p>
										</div>
									</div>
								</section>
								<?
										}
								}
								}else{
					?>
	
	<section class="nachricht">
		<div class="container shadow">
			<form class="round" method="post" action="/">
				<textarea class="nachricht round" name="nachricht" placeholder="<? echo $placeholder; ?>" autofocus required></textarea>
				<input type="submit" name="erstellen" class="button round" value="Nachricht erstellen" />
			</form>
		</div>
		<? include('pages/misc.adsense.php'); ?>
	</section>
	
	<?
						}
					?>
	</div>
	
	<div class="container">
		<h2 class="headline">Verschicke sich selbstzerstörende Nachrichten anonym über einen Link!</h2>
	</div>
	
	<div class="container">
		<section class="features round shadow">
			<article class="left round">
				<img src="img/icons/delete.png" alt="Einmal geöffnet, für immer gelöscht" />
				<h3>Einmal geöffnet, für immer gelöscht</h3>
				<p>Wenn eine Nachricht über ihren passenden Link geöffnet wird, dann wird sie nicht nur einfach angezeigt, sondern auch automatisch aus der Datenbank gelöscht. So ist es nicht mehr möglich diese Nachricht nach dem ersten Öffnen zu lesen, da sie nicht mehr existiert.</p>
			</article>
			
			<article class="right round">
				<img src="img/icons/encryption.png" alt="Eine starke Verschlüsselung" />
				<h3>Eine starke Verschlüsselung</h3>
				<p>Um Nachrichten am besten vor fremden Einblicken zu schützen, werden diese und deine Verbindung von uns verschlüsselt. Hierfür werden <a href="https://nachricht.co/faq/#wie-werden-meine-daten-gespeichert" title="Wie werden meine Daten gespeichert? (FAQ)">Verschlüsselungstechniken</a> verwendet, welche in den USA für staatliche Dokumente mit höchster Geheimhaltungsstufe zugelassen sind.</p>
			</article>
		
			<div class="clear"></div>
			
			<article class="left round">
				<img src="img/icons/anonymity.png" alt="Anonymität ist wichtig" />
				<h3>Anonymität ist wichtig</h3>
				<p>Da dieses Projekt für Anonymität im Internet steht, brauchst du auch keinerlei Daten von dir preisgeben, wenn du das nicht möchtest. Diese Seite funktioniert völlig ohne Anmeldung und speichert auch keine personenbezogenen Daten im Zusammenhang mit Nachrichten.</p>
			</article>
			
			<article class="right round">
				<img src="img/icons/features.png" alt="Optimal für Smartphones und Tablets" />
				<h3>Optimal für Smartphones und Tablets</h3>
				<p>In der heutigen Zeit sind Smartphones und Tablets nicht mehr weg zu denken. Damit du auch unterwegs so sicher wie möglich schreiben kannst wird Nachricht.co ständig weiterentwickelt und für mobile Geräte optimiert.</p>
			</article>
			
			<div class="clear"></div>
		</section>
	</div>