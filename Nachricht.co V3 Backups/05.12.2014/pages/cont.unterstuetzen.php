<?
$uri = $_SERVER['REQUEST_URI'];
if($uri != '/unterstuetzen/')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
	<div class="conintro">
		<? include('pages/misc.header.php'); ?>
	</div>
	
	<div class="container">
		<h2 class="headline">Jetzt mithelfen!</h2>
	</div>
	
	<div class="container">
		<section class="content">
			<section class="bigbox side left round">
				
				<h2>Jetzt unterstützen</h2>
				<p>Nachricht.co funktioniert und finanziert sich nur durch eure Hilfe, weshalb ich dankbar für jede noch so kleine Unterstützung bin. Das gesammelte Geld hilft anfallende Kosten für Webspace, Domain und Werbemittel zu bezahlen. So kann ich dieses Projekt am Leben erhalten, immer weiter verbessern und gemeinsam mit dir für ein sichereres Internet sorgen!</p>				
				
				<p>Du hast mehrere Möglichkeiten, das Projekt zu unterstützen:
				<ol style="margin-left: 30px; font-size: 15px; list-style-type:decimal;">												
					<li><a href="/unterstuetzen/#adify">Werbung auf deiner Seite</a></li>
					<li><a href="/unterstuetzen/#paypal">Einfach via PayPal</a></li>
					<li><a href="/unterstuetzen/#bitcoin">Anonym per Bitcoin</a></li>
				</ol></p>
				
				<article id="adify">
					<h3>1. Werbung auf deiner Seite!</h3>
					<p>Mache aktiv auf deiner Internetseite Werbung für Nachricht.co. Mit dieser Methode unterstützt du dieses Projekt zwar nicht finanziell aber du hilfst, den Bekanntheitsgrad von Nachricht.co zu erhöhen. Auch eine wichtige Sache!</p>
					<p><strong>Textlink:</strong><br>
					<textarea onclick="this.select()">&lt;a href="http://nachricht.co/" target="_blank" title="Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link"&gt;Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link!&lt;/a&gt;</textarea>
					<p><strong>468x60 Werbebanner:</strong><br>
					<a href="http://nachricht.co/" target="_blank" class="simg"><img src="https://nachricht.co/b/01ani.gif" alt="Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link" border="0" height="60" width="468"></a><br />
					<textarea onclick="this.select()">&lt;a href="http://nachricht.co/" target="_blank" title="Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link"&gt;&lt;img src="http://nachricht.co/b/01ani.gif" alt="Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link" border="0" width="468" height="60"&gt;&lt;/a&gt;</textarea>
					</p>
				</article>
				
				<article id="paypal">
					<h3>2. Einfach mit Paypal</h3>
					<p>Wenn du mehr als nur auf die Werbung klicken möchtest, dann kannst du mir alternativ ein Geldgeschenk per PayPal zukommen lassen. PayPal nimmt allerdings recht hohe Gebühren für den Zahlungsempfang (ca. 2% + 0,35€), sodass nur wenig von deiner Sendung übrig bleibt.</p>				
					
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="EGDHJC336SVZG">
						<input type="image" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
						<img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
					</form>

				</article>
					
				<article id="bitcoin">
					<h3>3. Anonym per Bitcoin</h3>
					<p>Falls du Nachricht.co anonym unterstützen möchtest, dann kannst du dies gerne via Bitcoins tun. Hier ist das Wallet:</p>
					Bitcoin: <a href="bitcoin:1Ja4wFU8BZRtkKp5mZ5WSoLA5AnxX8LEPs">1Ja4wFU8BZRtkKp5mZ5WSoLA5AnxX8LEPs</a>
				</article>
			</section>
			
			<aside class="sidebar right">
				<h3>Partner</h3>
				<a href="http://pascal-hoffmann.de/" target="_blank" class="simg"><img src="img/partner/ph-solutions.png" class="round" alt="sf" /></a>
				<a href="http://www.taiber-unternehmensberatung.de/" target="_blank" class="simg" title="Consulting - SEO Agentur - Unternehmensberatung, Suchmaschinenoptimierung Regensburg"><img src="img/partner/roger-taiber-seo.png" class="round" alt="sf"></a>
			</aside>
			<div class="clear"></div>
		</section>
	</div>