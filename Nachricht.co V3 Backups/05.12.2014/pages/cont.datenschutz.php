<?
$uri = $_SERVER['REQUEST_URI'];
if($uri != '/datenschutz/')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
	<div class="conintro">
		<? include('pages/misc.header.php'); ?>
	</div>
	
	<div class="container">
		<h2 class="headline">Anonymität & Datenschutz</h2>
	</div>
	
	<div class="container">
		<section class="content">
			<section class="bigbox round">
				<h2>Datenschutzerklärung</h2>
				<p>Nachricht.co ist eine Dienstleistung, welche es seinen Nutzern ermöglicht verschlüsselte Textnachrichten über einzigartige URLs (Links) zu übermitteln. Diese digitalen Textnachrichten werden nach dem ersten Öffnen automatisch aus unserer Datenbank gelöscht und sind nicht wiederherstellbar.</p>
				
				<h3>Verarbeitung von Daten</h3>
				<p>Die vom Benutzer eingegebene Textnachricht wird durch unseren Server, mit einem individuell generiertem Passwort, mit einer Verschlüsselung (<a href="http://de.wikipedia.org/wiki/Advanced_Encryption_Standard">AES-256</a>) versehen und in unserer Datenbank gespeichert. Das Passwort wird nicht gespeichert und nur per Link übermittelt um jeden Zugriff durch Dritte oder Hacker zu unterbinden. Nachrichten können nur mit zugehörigem Link entschlüsselt und gelesen werden.</p>
							
				<h3>Datenschutzerklärung für diese Internetseite</h3>
				<p>Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder eMail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben.</p>
				<p> Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.</p>
				<p>Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten durch Dritte zur Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit ausdrücklich widersprochen. Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.</p>

				<h3>Datenschutzerklärung für die Nutzung von Google Analytics</h3>
				<p>Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. ("Google"). Google Analytics verwendet sog. "Cookies", Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert. Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite wird Ihre IP-Adresse von Google jedoch innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum zuvor gekürzt.</p>
				<p>Nur in Ausnahmefällen wird die volle IP-Adresse an einen Server von Google in den USA übertragen und dort gekürzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu erbringen. Die im Rahmen von Google Analytics von Ihrem Browser übermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt.</p>
				<p>Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden nutzen können. Sie können darüber hinaus die Erfassung der durch das Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem sie das unter dem folgenden Link verfügbare Browser-Plugin herunterladen und installieren: <a href="http://tools.google.com/dlpage/gaoptout?hl=de">http://tools.google.com/dlpage/gaoptout?hl=de</a>.</p>
				
				<p>Quellenangaben: <a rel="nofollow" href="http://www.e-recht24.de/muster-datenschutzerklaerung.html" target="_blank">eRecht24</a>, <a rel="nofollow" href="http://www.google.com/intl/de/analytics/learn/privacy.html" target="_blank">Google Analytics Bedingungen</a></p>
			</section>
		</section>
	</div>