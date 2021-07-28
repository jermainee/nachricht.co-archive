<?
$uri = $_SERVER['REQUEST_URI'];
if($uri != '/faq/')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
	<div class="conintro">
		<? include('pages/misc.header.php'); ?>
	</div>
	
		<div class="container">
		<h2 class="headline">Häufig gestellte Fragen</h2>
	</div>
	
	<div class="container">
		<section class="content">
			<section class="bigbox side left round">
				
				<h2>FAQ</h2>

				<ul style="margin-left: 20px; font-size: 15px;">
				<li><a href="/faq/#ist-nachricht-co-kostenlos">Kann ich Nachricht.co kostenlos benutzen?</a></li>
					<li><a href="/faq/#wie-nachricht-erstellen-und-verschicken">Wie kann ich meine Nachricht verschicken?</a></li>												
					<li><a href="/faq/#wie-werden-meine-daten-gespeichert">Wie werden meine Daten gespeichert?</a></li>
					<li><a href="/faq/#werden-nachrichten-wirklich-geloescht">Werden gelesene Nachrichten wirklich gelöscht?</a></li>
					<li><a href="/faq/#nachricht-an-mehrere-empfaenger">Kann ich Nachrichten an mehrere Empfänger verschicken?</a></li>
					<li><a href="/faq/#nachricht-browser-verlauf">Ist es möglich gelesene Nachrichten mittels des Browser-Verlaufes erneut zu lesen?</a></li>
				</ul>
				
				<article id="ist-nachricht-co-kostenlos">
					<h3>Kann ich Nachricht.co kostenlos benutzen?</h3>
					<p>Ja, du kannst Nachricht.co völlig kostenlos benutzen. Wir überlassen es jedem selbst, ob er für diese Dienstleistung etwas zahlen möchte oder nicht. Wir platzieren übrigens auch keine nervige Werbung!</p>
					<p>Allerdings fallen trotzdem Kosten für Server, Weiterentwicklung und Werbung an, welche von mir als Betreiber bezahlt werden müssen. Deshalb bitten wir dich um deine finanzielle Unterstützung. <a href="/unterstuetzen/" title="Unterstütze jetzt dieses Projekt!" rel="nofollow">Mehr dazu? Klick mich!</a></p>
				</article>
				
				<article id="wie-nachricht-erstellen-und-verschicken">
					<h3>Wie erstelle und verschicke ich eine Nachricht?</h3>
					<p>Auf der Startseite von Nachricht.co findest du ein Textfeld, in dem du deine gewünschte Nachricht eintippen kannst. Mit einem Klick auf „Nachricht erstellen“ wird dir dein individueller Link angezeigt, mit dem die Nachricht gelesen werden kann. Diesen Link verschickst du an den gewünschten Gesprächspartner über den Kommunikations-Kanal deiner Wahl (SMS, Soziales Netzwerk, ...).</p>
					<p>Wenn dein Gesprächspartner den Link anklickt, wird ihm die von dir geschriebene Nachricht angezeigt und im selben Moment wird diese auch aus unserer Datenbank gelöscht. Somit ist sie nur dieses eine mal lesbar und existiert danach nicht mehr.</p>
				</article>
				
				<article id="wie-werden-meine-daten-gespeichert">
					<h3>Wie werden meine Daten gespeichert?</h3>
					<p>Mit dem Erstellen einer Nachricht wird diese automatisch von unserem Server mit einer <a href="http://de.wikipedia.org/wiki/Advanced_Encryption_Standard" title="Advanced Encryption Standard (AES)">AES-256 Verschlüsselung</a> versehen und in unserer Datenbank gespeichert. Deine Nachricht kann jetzt nur noch mit dem passenden Link gelesen werden, da dieser das erforderliche Passwort zur Entschlüsselung enthält.</p>
					<p>Dieses Verfahren hat den Vorteil, dass nur der Besitzer des Links die Möglichkeit hat die Nachricht zu lesen. Weder wir als Betreiber, noch sonstige Dritte können die Nachricht entschlüsseln oder lesen.</p>
				</article>
				
				<article id="werden-nachrichten-wirklich-geloescht">
					<h3>Werden gelesene Nachrichten wirklich gelöscht?</h3>
					<p>Ja, gelesene Nachrichten werden automatisch und ohne Verzögerung vollständig aus unserer Datenbank gelöscht und können nicht wieder aufgerufen werden.</p>
				</article>
				
				<article id="nachricht-an-mehrere-empfaenger">
					<h3>Kann ich Nachrichten an mehrere Empfänger verschicken?</h3>
					<p>Nein, das geht nicht. Um eine Nachricht an mehrere Empfänger zu verschicken, musst du für jeden Empfänger eine einzelne Nachricht erstellen und ihm den Link schicken, denn sonst wäre es keine Einweg-Nachricht mehr.</p>
				</article>
				
				<article id="nachricht-browser-verlauf">
					<h3>Ist es möglich gelesene Nachrichten mittels des Browser-Verlaufes erneut zu lesen?</h3>
					<p>Nein, denn wenn eine Nachricht schon geöffnet wurde, dann wurde diese automatisch aus unserer Datenbank gelöscht und kann somit nicht wieder gelesen werden.</p>
				</article>
			</section>
			
			<? include('pages/misc.aside.php'); ?>
			<div class="clear"></div>
		</section>
	</div>