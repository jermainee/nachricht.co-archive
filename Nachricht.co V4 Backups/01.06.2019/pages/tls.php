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
		<h2 class="headline">Welche Technologien benutzen wir?</h2>
	</div>
	
	<div class="container">
		<section class="content">
			<section class="bigbox sidebox round shadow">
				<h2>Transport Layer Security (TLS)</h2>
				<p>Zum Schutz persönlicher Daten bei der Datenübertragung zwischen unserem Server und deinem Gerät benutzen wir <a href="https://de.wikipedia.org/wiki/Transport_Layer_Security" title="Transport Layer Security
" target="_blank">TLS (Transport Layer Security)</a>, den Nachfolger von SSL (Secure Sockets Layer). Dieses Protokoll stellt sicher, dass kein unbefugter Dritter die Kommunikation abhören oder manipulieren kann.</p>

				<p>TLS besteht aus den Ebenen TLS Record Protocol und TLS Handshake Protocol. Für die Sicherung der Verbindung, durch Methoden wie dem Data Encryption Standard (DES), ist das TLS Record Protocol zuständig. Während dessen ist das TLS Handshake Protocol für die Authentifizierung von Server und Client, sowie den Austausch kryptographischer Schlüssel vor der Dateiübertragung zuständig.</p>

				<p>Das TLS Protokoll basiert auf dem SSL 3.0 Protokoll von Netscape, ist allerdings mit SSL nicht interoperabel. Daher enthält das TLS Protokoll eine Funktion, mit der die Verbindung im Notfall auf SSL 3.0 zurückgestuft werden kann. Nahezu alle aktuellen Browser unterstützen TLS.</p>
			</section>
			<?php include('../pages/sidebar.php'); ?>
		</section>
	</div>
