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
    						$eintrag = "INSERT INTO nachrichten (id, erstellt, empfangen, nachricht) VALUES ('$id', NOW(), '$null', '$encrypted')" or die ();
							if(empty($nachricht))
								{
								?>
								<section class="nachricht">
									<div class="container">
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
		<div class="container">
			<div class="output-link round">
				<p>Kopiere diesen Link und sende ihn wem du möchtest.<br />Die gespeicherte Nachricht wird sofort gelöscht, nachdem sie das erste mal geöffnet wurde.</p>
				<input type="text" class="link round" onclick="this.select()" class="link" value="<? echo $link; ?>">
			</div>
		</div>
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
		<div class="container">
			<form class="round" method="post" action="/">
				<textarea class="nachricht round" name="nachricht" placeholder="<? echo $placeholder; ?>"></textarea>
				<input type="submit" name="erstellen" class="button round" value="Nachricht erstellen" />
			</form>
		</div>
	</section>
	
	<?
						}
					?>
	
	<!---Nachricht lesen
	<section class="nachricht">
		<div class="container">
			<div class="output round">
				<div class="noutput round">
					efsfsfsdf
				</div>
				<button href="" class="button round">Neue Nachricht</button>
			</div>
		</div>
	</section>
	---!>
	</div>
	
	<div class="container">
		<h2 class="headline">Verschicke sich selbstzerstörende Nachrichten anonym über einen Link!</h2>
	</div>
	
	<div class="container">
		<section class="features round">
			<article class="left round">
				<img src="img/icons/delete.png" />
				<h3>Einmal geöffnet, für immer gelöscht</h3>
				<p>Wenn eine Nachricht über ihren passenden Link geöffnet wird, dann wird sie nicht nur einfach angezeigt, sondern auch automatisch aus der Datenbank gelöscht. So ist es nicht mehr möglich diese Nachricht nachdem ersten Öffnen zu lesen, da sie nicht mehr existiert.</p>
			</article>
			
			<article class="right round">
				<img src="img/icons/encryption.png" />
				<h3>Eine starke Verschlüsselung</h3>
				<p>Um Nachrichten am besten vor fremden Einblicken zu schützen, werden diese und deine Verbindung von uns verschlüsselt. Hierfür werden Verschlüsselungstechniken verwendet, welche in den USA für staatliche Dokumente mit höchster Geheimhaltungsstufe zugelassen sind. (<a href="http://de.wikipedia.org/wiki/Advanced_Encryption_Standard" target="_blank" title="Advanced Encryption Standard">AES-256</a>)</p>
			</article>
		
			<div class="clear"></div>
			
			<article class="left round">
				<img src="img/icons/anonymity.png" />
				<h3>Anonymität ist wichtig</h3>
				<p>Da dieses Projekt für Anonymität im Internet steht, brauchst du auch keinerlei Daten von dir preisgeben, wenn du das nicht möchtest. Diese Seite funktioniert völlig ohne Anmeldung und speichert auch keine personenbezogenen Daten im Zusammenhang mit Nachrichten.</p>
			</article>
			
			<article class="right round">
				<img src="img/icons/features.png" />
				<h3>Optimal für Smartphones und Tablets</h3>
				<p>In der heutigen Zeit sind Smartphones und Tablets nicht mehr weg zu denken. Damit du auch unterwegs so sicher wie möglich schreiben kannst wird Nachricht.co ständig weiterentwickelt und für mobile Geräte optimiert.</p>
			</article>
			
			<div class="clear"></div>
		</section>
	</div>