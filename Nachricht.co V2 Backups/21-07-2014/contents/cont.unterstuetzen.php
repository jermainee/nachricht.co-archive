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
												<li><a href="/spenden/#werbung">Klick auf die Werbung</a></li>
												<li><a href="/spenden/#paypal">Einfach via PayPal</a></li>
												<li><a href="/spenden/#bargeld">Bargeld per Post</a></li>
											</ol>
										</section>
										<section id="werbung" style="margin-top: 80px;">
											<header>
												<h3>1. Ein Klick auf die Werbung</h3>
											</header>
											<p>Schon ein kleiner Klick auf die bei uns eingeblendete Werbung, kann wahre Wunder bewirken. Es tut niemandem weh, kostet dich nichts und ist die einfachste Methode dieses Projekt zu unterstützen!</p>
											<div style="max-width: 680px; margin: 0px 0px 30px 0px; padding: 0px;">
											<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
											<!-- Nachricht.co -->
											<ins class="adsbygoogle"
     											style="display:block"
     											data-ad-client="ca-pub-0237366692215510"
     											data-ad-slot="2952897654"
     											data-ad-format="auto"></ins>
											<script>
											(adsbygoogle = window.adsbygoogle || []).push({});
											</script>
											</div>
											<footer>
												<p><strong>Es wird keine Werbung angezeigt?</strong><br />Überprüfe ob du einen AdBlocker aktiviert hast und deaktiviere ihn für diese Seite!</p>
											</footer>
										</section>
										<section id="paypal" style="margin-top: 80px;">
											<header>
												<h3>2. Einfach mit Paypal</h3>
											</header>
											<p>Wenn du mehr als nur auf die Werbung klicken möchtest, dann kannst du mir alternativ ein Geldgeschenk per PayPal zukommen lassen. PayPal nimmt allerdings recht hohe Gebühren für den Zahlungsempfang (ca. 2% + 0,35€), sodass nur wenig von deiner Sendung übrig bleibt.</p>
											<footer>
												<ul class="buttons">
													<li><a href="<? echo $paypal_url; ?>" class="button special"><? echo $paypal_button; ?></a></li>
												</ul>
											</footer>
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
											<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
											<!-- Nachricht.co -->
											<ins class="adsbygoogle"
     											style="display:block"
     											data-ad-client="ca-pub-0237366692215510"
     											data-ad-slot="2952897654"
     											data-ad-format="auto"></ins>
											<script>
											(adsbygoogle = window.adsbygoogle || []).push({});
											</script>
										</section>
									</div>

							</div>
						</div>					
					</section>
					
			</article>