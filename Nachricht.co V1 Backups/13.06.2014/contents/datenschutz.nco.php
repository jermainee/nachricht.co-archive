<?
$uri = $_SERVER['REQUEST_URI'];
if($uri != '/datenschutz.html')
	{
	header('location: http://nachricht.co');
	exit();
	}
require_once('include/inc.mysql.php');

$id = rand(234,927).time();
$passwort = rand(100,999).time();
$nachricht = mysql_real_escape_string($_POST['nachricht']);
$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($passwort), $nachricht, MCRYPT_MODE_CBC, md5(md5($passwort))));
$date = date("Y-m-d H:i:s");
?>

<div id="content">
	<div id="datenschutz">
		<h2>Datenschutzerklärung</h2>
		<p>Bei Nachricht.co wird der Datenschutz sehr ernst genommen, da der Hauptzweck dieser Seite ist, ihn zu bewahren. Diese Richtlinien beschreiben die Maßnahmen, welche von Nachricht.co ergriffen werden um die Privatsphäre unserer Nutzer zu schützen.</p>
		<h3>§1 Der Service</h3>
		<p>Nachricht.co ist ein Internetservice, welcher seinen Benutzern ermöglich verschlüsselte Nachrichten über einzigartige (HTTPS) Links über das Internet zu verschicken. Jede Nachricht wird nach ihrem ersten Öffnen mittels des Links restlos aus unsrer Datenbank gelöscht und kann somit nicht wiederhergestellt werden.</p>
		<p>Nachricht.co stellt keine Mittel zur Übertragung des Links zur Verfügung. Die Übertragung liegt in alleiniger Hand des Nachricht.co-Benutzers und dessen Verantwortung.</p>
		<p>Je nach Kommunikationskanal Ihrer Wahl (z.B. E-Mail, Fax, SMS, Telefon, Instant Messaging), kann es ein gewisses Risiko geben, dass Dritte Ihre Kommunikation abzufangen und Kenntnis von einem Nachricht.co-Link erhalten.</p>
		<h3>§2 Verarbeitung der Daten</h3>
		<p>Die vom Benutzer eingegebene Nachricht auf Nachricht.co wird mit einem zufällig generiertem Passwort Verschlüsselt (<a href="http://de.wikipedia.org/wiki/Advanced_Encryption_Standard" rel="nofollow" target="_blank">AES-256</a>) und in unsere Datenbank geschrieben. Das Passwort wird nirgends gespeichert, da dieses zur Entschlüsselung der Nachricht dient und ausschließlich mit dem Link übermittelt wird.</p>
		<p>Nachrichten können nur mit zugehörigem Link entschlüsselt werden, da dieser das nötige Passwort enthält. Dies ermöglicht, dass niemand die Nachrichten lesen kann. Weder Nachricht.co als Betreiber noch andere Dritte.</p>
		<p>Wenn eine Nachricht mittels des Links geöffnet bzw. gelesen wurde, wird sie vollständig aus der Datenbank von Nachricht.co gelöscht und kann nicht wiederhergestellt werden.</p>
		<h3>§3 Personenbezogene Daten</h3>
		<p>Nachricht.co speichert weder personenbezogene Daten als solche, noch im Zusammenhang mit Nachrichten.</p>
		<h3>§4 Disclaimer</h3>
		<p>Nachricht.co hat keinerlei Einfluss auf die Inhalte von Nachrichten und distanziert sich daher von diesen und übernimmt keine Verantwortung.</p>
		<h3>§5 Gültigkeit dieser Datenschutzerklärung</h3>
		<p>Bitte beachten Sie, dass sich diese Datenschutzerklärung von Zeit zu Zeit ändern kann. Wir erwarten, dass diese Änderungen gering sind. Ungeachtet dessen werden wir alle Änderungen der Politik auf dieser Seite veröffentlichen.</p>
		<h3>§6 Kontaktinformationen</h3>
		<p>Wenn Sie Fragen zu dieser Datenschutzerklärung oder andere Bedenken in Bezug auf Nachricht.co haben, dann können sie sich mit den folgenden Kontaktinformationen mit uns in Verbindung setzen.</p>
		<p>Ansprechpartner: Jermaine J. Ernst<br />E-Mail: <a href="mailto:info@nachricht.co">info@nachricht.co</a></p>
	</div>
</div>