<?
$uri = $_SERVER['REQUEST_URI'];
if($uri == '/contents/cont.unterstuetzen.php')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>

	<body class="right-sidebar loading">
	
			<header id="header">
				<? include('contents/inc.header.php'); ?>
			</header>
		
		<!-- Main -->
			<article id="main">

				<!-- One -->
					<section class="wrapper style4 container">
					
						<div class="row oneandhalf">
							<div class="8u">
								
								<!-- Content -->
									<div class="content">
										<header>
										<h2>Jetzt unterstützen</h2>
										<p>Nachricht.co funktioniert und finanziert sich nur durch eure Hilfe, weshalb ich dankbar für jede noch so kleine Unterstützung bin. Das gesammelte Geld hilft anfallende Kosten für Webspace, Domain und Werbemittel zu bezahlen.<br /> So kann ich dieses Projekt am Leben erhalten, immer weiter verbessern und gemeinsam mit dir für ein sichereres Internet sorgen!</p>
										</header>
										<section>
											<p><strong>Du hast mehrere Möglichkeiten, das Projekt zu unterstützen:</strong></p>
											<ol style="margin-left: 60px; padding: 0px; list-style-type:decimal;">												
												<li><a href="/unterstuetzen/#paypal">Einfach via PayPal</a></li>
												<li><a href="/unterstuetzen/#werbung">Werbung auf deiner Seite</a></li>
												<li><a href="/unterstuetzen/#bargeld">Bargeld per Post</a></li>
											</ol>
										</section>
										<section id="paypal" style="margin-top: 80px;">
											<header>
												<h3>1. Einfach mit Paypal</h3>
											</header>
											<p>Wenn du mehr als nur auf die Werbung klicken möchtest, dann kannst du mir alternativ ein Geldgeschenk per PayPal zukommen lassen. PayPal nimmt allerdings recht hohe Gebühren für den Zahlungsempfang (ca. 2% + 0,35€), sodass nur wenig von deiner Sendung übrig bleibt.</p>
											<footer>
												<ul class="buttons">
													<li><a href="<? echo $paypal_url; ?>" class="button special"><? echo $paypal_button; ?></a></li>
												</ul>
											</footer>
										</section>
										<section id="werbung" style="margin-top: 80px;">
											<header>
												<h3>2. Werbung auf deiner Seite!</h3>
											</header>
											<p>Mache aktiv auf deiner Internetseite Werbung für Nachricht.co. Mit dieser Methode unterstützt du dieses Projekt zwar nicht finanziell aber du hilfst, den Bekanntheitsgrad von Nachricht.co zu erhöhen. Auch eine wichtige Sache!</p>
											<p><strong>Textlink:</strong><br/>
												<textarea onclick="this.select()"><a href="http://nachricht.co/" target="_blank" title="Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link">Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link!</a></textarea>
											</p>
											<p><strong>468x60 Werbebanner:</strong><br/>
												<a href="http://nachricht.co/" target="_blank" class="simg"><img src="http://nachricht.co/b/01ani.gif" alt="Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link" border="0" width="468" height="60"></a>
												<textarea onclick="this.select()"><a href="http://nachricht.co/" target="_blank" title="Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link"><img src="http://nachricht.co/b/01ani.gif" alt="Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link" border="0" width="468" height="60"></a></textarea>
											</p>
										</section>
										<section id="bargeld" style="margin-top: 80px;">
											<header>
												<h3>3. Bargeld per Post</h3>
											</header>
											<p>Die letzte um Nachricht.co auf das nächste Level zu bringen, ist Bargeld per Post. Seit Juli 2014 ist es nun bei der Deutschen Post möglich, Bargeld zu verschicken. Der Service namens „Wert National“ kostet 3,95 Euro plus das Briefporto.</p>
											<footer>
												<img src="images/impressum.png" alt="" />
											</footer>
										</section>
										<section style="margin-top: 40px;">
											<header>
												<h3>Danke!</h3>
											</header>
											<p>Wenn du dich entschieden hast Nachricht.co aktiv zu unterstützen, auf welchem Weg auch immer, dann <strong>danke</strong> ich dir vielmals für <strong>deine Unterstützung, dein Vertrauen und deinen Glauben an das Projekt!</strong> <img src="/images/smileys/smile.gif" class="smiley" alt="Ein freundliches Lächeln!"></p>
										</section>
									</div>
	
							</div>
							<div class="4u">
								
								<!-- Sidebar -->
									<div class="sidebar" style="max-width: 310px;">
										<? include('contents/inc.sidebar.php'); ?>
										<section>
											<header>
												<h3>Partner</h3>
											</header>
											<a href="http://www.taiber-unternehmensberatung.de/" target="_blank" class="simg" title="Consulting - SEO Agentur - Unternehmensberatung, Suchmaschinenoptimierung Regensburg"><img src="https://nachricht.co/b/ext/roger-taiber-seo.png" alt="Consulting - SEO Agentur - Unternehmensberatung, Suchmaschinenoptimierung Regensburg" border="0" width="300" height="100"></a>
											<a href="http://imagely.eu/" target="_blank" class="simg" title="IMAGELY.eu - image hosting redefined"><img src="https://imagely.eu/banner/300x100.png" alt="IMAGELY.eu - image hosting redefined" border="0" width="300" height="100"></a>
											<a href="http://pascal-hoffmann.de/" target="_blank" class="simg"><img src="http://download.pascal-hoffmann.de/jermaine/werbung.png" alt="" border="0" width="300" height="100"></a>
											<a href="http://www.my-grafix.de/" target="_blank" class="simg"><img src="http://www.my-grafix.de/images/logo300.png" alt="" border="0" width="300" height="100"></a>
										</section>
									</div>

							</div>
						</div>					
					</section>
					
			</article>