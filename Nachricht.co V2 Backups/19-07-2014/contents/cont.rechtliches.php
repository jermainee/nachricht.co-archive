<?
$uri = $_SERVER['REQUEST_URI'];
if($uri != '/rechtliches/')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
<body class="left-sidebar loading">
	
		<!-- Header -->
			<header id="header">
				<? include('contents/inc.header.php'); ?>
			</header>
		
		<!-- Main -->
			<article id="main">
			
				<!-- One -->
					<section class="wrapper style4 container">
					
						<div class="row oneandhalf">
							<div class="4u">
								
								<!-- Sidebar -->
									<div class="sidebar">
										<section>
											<header>
												<h3>Impressum</h3>
											</header>
											<p><strong>Angaben gemäß § 5 TMG:</strong></p>
											<img src="images/impressum.png">
											<footer>
												<ul class="buttons">
													<li><a href="/kontakt/" class="button small">Kontaktformular</a></li>
												</ul>
											</footer>
										</section>
										<section>
											<p>Webdesign von <a href="http://html5up.net">HTML5UP</a></p>
											<p>Icons von <a href="http://iconleak.com">Iconleak</a></p>
										</section>
									</div>

							</div>
							<div class="8u skel-cell-important">
								
								<!-- Content -->
									<div class="content">
										<section>
											<header>
												<h3>Rechtliches</h3>
											</header>
											
											<p>Bei Nachricht.co wird der Datenschutz sehr ernst genommen, da wir es uns zur Aufgabe gemacht haben, diesen zu bewahren. Diese Richtlinien beschreiben die Maßnahmen, welche von Nachricht.co ergriffen werden, um die Privatsphäre unserer Nutzer zu schützen.</p>
											<p><strong>§1 Der Service</strong><br/>Nachricht.co ist ein Internetservice, welcher seinen Benutzern ermöglicht verschlüsselte Nachrichten über einzigartige (HTTPS) Links über das Internet zu verschicken. Jede Nachricht wird nach ihrem ersten Öffnen mittels des Links aus unserer Datenbank gelöscht.</p>
											<p>Nachricht.co stellt keine Mittel zur Übertragung des Links zur Verfügung. Die Übertragung liegt in alleiniger Hand des Nachricht.co-Benutzers und dessen Verantwortung.</p>
											<p>Je nach Kommunikationskanal Ihrer Wahl (z.B. E-Mail, Fax, SMS, Telefon, Instant Messaging), kann es ein gewisses Risiko geben, dass Dritte Ihre Kommunikation abzufangen und Kenntnis von einem Nachricht.co-Link erhalten.</p>
											<p><strong>§2 Verarbeitung der Daten</strong><br/>Die vom Benutzer eingegebene Nachricht auf Nachricht.co wird mit einem zufällig generiertem Passwort verschlüsselt (<a href="http://de.wikipedia.org/wiki/Advanced_Encryption_Standard">AES-256</a>) und in unsere Datenbank geschrieben. Das Passwort wird nirgends gespeichert, da dieses zur Entschlüsselung der Nachricht dient und ausschließlich mit dem Link übermittelt wird.</p>
											<p>Nachrichten können nur mit zugehörigem Link entschlüsselt werden, da dieser das nötige Passwort enthält. Daher ist selbst Nachricht.co als Betreiber nicht in der Lage Nachrichten unverschlüsselt lesen zu können.</p>
											<p>Wenn eine Nachricht mittels des Links geöffnet wird, wird sie gleichzeitig vollständig aus der Datenbank von Nachricht.co gelöscht und kann nicht wieder aufgerufen werden.</p>
											<p><strong>§3 Personenbezogene Daten</strong><br />Nachricht.co verlangt keine personenbezogenen Daten wie zum Beispiel Namen, Anschriften oder Geburtsdaten von seinen Nutzern.</p>
											<p><strong>§4 Disclaimer</strong><br />Nachricht.co hat keinerlei Einfluss auf die Inhalte von Nachrichten und distanziert sich daher von Diesen und übernimmt keine Verantwortung.</p>
											<p>Nachricht.co enthält Verlinkungen zu Webseiten anderer Diensteanbieter. Da auf deren Inhalte kein Einfluss besteht, wird hierfür auch keine Haftung übernommen. Für die Inhalte fremder Seiten ist ausschließlich deren Betreiber haftbar. Ohne konkrete Anhaltspunkte einer möglichen späteren Rechtsverletzung auf den verlinkten Seiten ist eine fortwährende Überprüfung fremder Seiten nicht zumutbar. Die Links auf die jeweiligen Seiten werden jedoch unverzüglich entfernt werden, sollten spätere Rechtsverletzungen auf den verlinkten Seiten bekannt werden.</p>
											<p><strong>§5 Datenschutzerklärung für die Nutzung von Google Analytics</strong><br />Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. ("Google"). Google Analytics verwendet sog. "Cookies", Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglicht. Die durch den Cookie erzeugten Informationen über Ihre Benutzung diese Website (anonymisierte IP-Adresse) wird an einen Server von Google in den USA übertragen und dort gespeichert.</p>
											<p>Google wird diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten für die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google diese Informationen gegebenenfalls an Dritte übertragen, sofern dies gesetzlich vorgeschrieben oder soweit Dritte diese Daten im Auftrag von Google verarbeiten. Google wird in keinem Fall Ihre IP-Adresse mit anderen Daten der Google Inc. in Verbindung bringen.</p>
											<p>Sie können die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website voll umfänglich nutzen können. Durch die Nutzung dieser Website erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden.</p>
											<p><strong>§6 Gültigkeit der Datenschutzerklärung</strong><br />Diese Richtlinien können sich von Zeit zu Zeit ändern. Wir erwarten, dass diese Änderungen gering sind. Ungeachtet dessen werden wir alle Änderungen der Politik auf dieser Seite veröffentlichen.</p>
										</section>
									</div>
	
							</div>
						</div>					
					</section>
					
			</article>