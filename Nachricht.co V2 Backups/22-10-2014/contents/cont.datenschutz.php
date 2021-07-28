<?
$uri = $_SERVER['REQUEST_URI'];
if($uri != '/datenschutz/')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
		<body class="no-sidebar loading">
	
			<header id="header">
				<? include('contents/inc.header.php'); ?>
			</header>
		
			<article id="main">

					<section class="wrapper style4 container">
					
							<div class="content">
								<header>
									<h2>Datenschutzerklärung</h2>
								</header>
								<section>
									<p><strong>Der Service</strong><br /> Nachricht.co ist ein Internetservice, welcher seinen Benutzern ermöglicht verschlüsselte Nachrichten, über einzigartige URLs (Links), über das Internet zu verschicken. Jede Nachricht wird nach ihrem ersten Öffnen mittels der URL (,des Links) aus unserer Datenbank gelöscht.
									<br /> Nachricht.co stellt keine Mittel zur Übertragung des Links zur Verfügung. Die Übertragung liegt in alleiniger Hand des Nachricht.co-Benutzers und dessen Verantwortung.
									<br /> Je nach Kommunikationskanal Ihrer Wahl (z.B. E-Mail, Fax, SMS, Telefon, Instant Messaging), kann es ein gewisses Risiko geben, dass Dritte Ihre Kommunikation abzufangen und Kenntnis von einem Nachricht.co-Link erhalten.</p>
									
									<p><strong>Verarbeitung der Daten</strong><br /> Die vom Benutzer eingegebene Nachricht, auf Nachricht.co, wird mit einem zufällig generiertem Passwort verschlüsselt (<a href="http://de.wikipedia.org/wiki/Advanced_Encryption_Standard">AES-256</a>) und in eine Datenbank geschrieben. Das Passwort wird nirgends gespeichert, da dieses zur Entschlüsselung der Nachricht dient und ausschließlich mit dem Link (der URL) übermittelt wird.
									<br /> Nachrichten können nur mit zugehörigem Link (/URL) entschlüsselt werden, da dieser das nötige Passwort enthält. Daher ist selbst Nachricht.co als Betreiber nicht in der Lage Nachrichten unverschlüsselt lesen zu können.
									<br /> Wenn eine Nachricht mittels des Links geöffnet wird, wird sie gleichzeitig vollständig aus der Datenbank von Nachricht.co gelöscht und kann nicht wieder aufgerufen werden.</p>
									
									<p><strong>Datenschutz</strong><br />Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder eMail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben.
									<br /> Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.
									<br /> Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten durch Dritte zur Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit ausdrücklich widersprochen. Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.</p>
									
									<p><strong>Datenschutzerklärung für die Nutzung von Google Analytics</strong><br /> Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. ("Google"). Google Analytics verwendet sog. "Cookies", Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert. Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite wird Ihre IP-Adresse von Google jedoch innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum zuvor gekürzt.
									<br /> Nur in Ausnahmefällen wird die volle IP-Adresse an einen Server von Google in den USA übertragen und dort gekürzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu erbringen. Die im Rahmen von Google Analytics von Ihrem Browser übermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt.
									<br /> Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden nutzen können. Sie können darüber hinaus die Erfassung der durch das Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem sie das unter dem folgenden Link verfügbare Browser-Plugin herunterladen und installieren: <a href="http://tools.google.com/dlpage/gaoptout?hl=de">http://tools.google.com/dlpage/gaoptout?hl=de</a>.</p>
									
								</section>
								<footer>
									<p>Quellenangaben: <a rel="nofollow" href="http://www.e-recht24.de/muster-datenschutzerklaerung.html" target="_blank">eRecht24</a>, <a rel="nofollow" href="http://www.google.com/intl/de/analytics/learn/privacy.html" target="_blank">Google Analytics Bedingungen</a></p>
								</footer>
							</div>

					</section>
					
			</article>