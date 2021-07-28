<?php
if(!isset($apage))
{
	exit();
}
?>
	<div class="conintro">
		<?php include('../pages/misc.header.php'); ?>
	</div>
	
		<div class="container">
		<h2 class="headline">Häufig gestellte Fragen</h2>
	</div>
	
	<div class="container">
		<section class="content">
			<section class="bigbox sidebox mspace round shadow">
				
				<h2>FAQ</h2>

				<ol style="margin-left: 20px; font-size: 15px;">
				<li><a href="/faq/#ist-nachricht-co-kostenlos">Kann ich Nachricht.co kostenlos benutzen?</a></li>
					<li><a href="/faq/#wie-nachricht-erstellen-und-verschicken">Wie kann ich meine Nachricht verschicken?</a></li>												
					<li><a href="/faq/#wie-werden-die-nachrichten-gespeichert">Wie werden die Nachrichten gespeichert?</a></li>
					<li><a href="/faq/#werden-nachrichten-wirklich-geloescht">Werden gelesene Nachrichten wirklich gelöscht?</a></li>
					<li><a href="/faq/#was-wenn-nachricht-nicht-geoeffnet-wird">Was ist wenn eine Nachricht nicht geöffnet wird?</a></li>
					<li><a href="/faq/#nachricht-an-mehrere-empfaenger">Kann ich Nachrichten an mehrere Empfänger verschicken?</a></li>
					<li><a href="/faq/#nachricht-browser-verlauf">Ist es möglich gelesene Nachrichten mittels des Browser-Verlaufes erneut zu lesen?</a></li>
				</ol>
				
				<article id="ist-nachricht-co-kostenlos">
					<h3>1. Kann ich Nachricht.co kostenlos benutzen?</h3>
					<p>Ja, grundsätzlich kannst du Nachricht.co völlig kostenfrei benutzen.<br />
					Allerdings fallen Kosten für Server, Weiterentwicklung und Instandhaltung usw. an, die wir als Betreiber zahlen müssen. Wenn dir unser Projekt also gefällt, wie wäre es mit einer finanziellen Unterstützung? Selbst kleine Summen reichen um Nachricht.co auf lange Sicher noch besser werden zu lassen! <a href="/unterstuetzen/" title="Nachricht.co jetzt unterstützen" rel="nofollow">Jetzt unterstützen!</a></p>
				</article>
				
				<article id="wie-nachricht-erstellen-und-verschicken">
					<h3>2. Wie erstelle und verschicke ich eine Nachricht?</h3>
					<p>Um eine Nachricht zu verschicken musst du in das Textfeld auf https://nachricht.co die gewünschte Nachricht eintippen und anschließend auf ‚Nachricht erstellen’ klicken.</p>
					<p>Daraufhin wird dir ein Link ausgegeben, welchen du dem gewünschtem Gesprächspartner senden kannst. Dein Gesprächspartner kann jetzt auf den Link klicken und die Nachricht ein einziges Mal lesen, da sie sich daraufhin selbst zerstört.</p>
				</article>
				
				<article id="wie-werden-die-nachrichten-gespeichert">
					<h3>3. Wie werden die Nachrichten gespeichert?</h3>
					<p>Alle Nachrichten werden mittels des <a href="/aes/" title="Advanced Encryption Standart (AES)">Advanced Encryption Standart (kurz AES)</a> und einem individuell generiertem, 256 Bit langem Schlüssel verschlüsselt und anschließend auf unserem Server gespeichert. Dieser Verschlüsselungsalgorithmus ist weiterverbreitet, gilt als einer der sichersten und ist für staatliche Dokumente mit höchster Geheimaltungsstufe zugelassen.</p>
					<p>Die jeweiligen Schlüssel werden nicht gespeichert und lediglich in codierter Form im erstellten Link an den Benutzer übergeben. Dieses Verfahren ermöglicht, dass nur der Besitzer des Links die Nachricht entschlüsseln kann.</p>
					<p>Die Verbindung zwischen dir und unserem Server wird übrigens auch von uns Verschlüsselt und ist somit gegen Abhören und Manipulationen geschützt. Hierfür verwenden wir das <a href="/tls/" title="Transport Layer Security">Transport Layer Security Protocol - kurz TLS.</a></p>
				</article>
				
				<article id="werden-nachrichten-wirklich-geloescht">
					<h3>4. Werden gelesene Nachrichten wirklich gelöscht?</h3>
					<p>Ja. Jede geöffnete Nachricht wird automatisch, ohne Verzögerung und restlos gelöscht. Gelöschte Nachrichten können nicht wiederhergestellt werden.</p>
				</article>
				
				<article id="was-wenn-nachricht-nicht-geoeffnet-wird">
					<h3>5. Was ist wenn eine Nachricht nicht geöffnet wird?</h3>
					<p>Falls eine Nachricht innerhalb von 24 Stunden nicht geöffnet wird, wir diese automatisch und restlos von uns gelöscht. Die Nachricht kann nicht wiederhergestellt werden.</p>
				</article>
				
				<article id="nachricht-an-mehrere-empfaenger">
					<h3>6. Kann ich Nachrichten an mehrere Empfänger verschicken?</h3>
					<p>Nein. Da jede Nachricht nur einmal geöffnet werden kann und sich darauf hin selbst zerstört, musst du für jeden Empfänger eine eigene Nachricht erstellen und ihm den Link schicken. So funktioniert die Einweg-Nachricht.</p>
				</article>
				
				<article id="nachricht-browser-verlauf">
					<h3>7. Ist es möglich gelesene Nachrichten mittels des Browser-Verlaufes erneut zu lesen?</h3>
					<p>Nein. Bereits gelesene Nachrichten können nicht im Browserverlauf erneut geöffnet und gelesen werden.</p>
				</article>
			</section>
			<?php include('../pages/sidebar.php'); ?>
		</section>
	</div>
