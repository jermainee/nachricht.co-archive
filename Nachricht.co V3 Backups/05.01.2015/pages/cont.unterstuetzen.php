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
		<h2 class="headline">Hilf dem Datenschutz auf die Sprünge!</h2>
	</div>
	
	<div class="container">
		<section class="content">
			<section class="bigbox side left round">
				
				<h2>Unterstützen</h2>
				<p>Nachricht.co funktioniert nur dank seiner Benutzer und wird durch die Hilfe seiner Benutzer finanziert, weshalb du nirgends auf dieser Seite nervige Werbebanner oder ähnliches finden wirst. Doch es fallen natürlich auch Kosten für mich als Betreiber an, wie zum Beispiel für den Server, die Weiterentwicklung und für Werbung. Um diese Kosten decken zu können und das Projekt am Leben zu erhalten brauche ich deine Hilfe:</p>

				<p>Du hast mehrere Möglichkeiten, das Projekt zu unterstützen:</p>
				<ol>												
					<li><a href="/unterstuetzen/#paypal" rel="nofollow" title="Einfach mit PayPal">Einfach mit PayPal</a></li>
					<li><a href="/unterstuetzen/#bitcoin" rel="nofollow" title="Anonym mit Bitcoins">Anonym mit Bitcoins</a></li>
					<li><a href="/unterstuetzen/#adify" rel="nofollow" title="Werbung auf deiner Webseite">Werbung auf deiner Webseite</a></li>
				</ol>
								
				<article id="paypal">
					<h3>1. Einfach mit Paypal</h3>
					<p>Du kannst dem Projekt ganz einfach über PayPal finanzielle Unterstützung zukommen lassen, allerdings nimmt PayPal recht hohe Gebühren für den Zahlungsempfang (ca. 2% + 0,35€), sodass nur wenig von deiner Sendung übrig bleibt.</p>				
					
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="EGDHJC336SVZG">
						<input type="image" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
						<img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
					</form>

				</article>
					
				<article id="bitcoin">
					<h3>2. Anonym mit Bitcoins</h3>
					<p>Falls du anonym helfen möchtest, dann kannst du dies gerne mit Bitcoins tun. Hier ist das Wallet:<br />
					Bitcoin: <a href="bitcoin:1Ja4wFU8BZRtkKp5mZ5WSoLA5AnxX8LEPs">1Ja4wFU8BZRtkKp5mZ5WSoLA5AnxX8LEPs</a></p>
				</article>
				
				<article id="adify">
					<h3>3. Werbung auf deiner Webseite</h3>
					<p>Binde Werbung für Nachricht.co auf deiner Internetseite ein und hilf so, noch mehr Menschen zu erreichen. Dieser Weg ist zwar keine finanzielle Unterstützung, aber mindestens genauso wichtig! :)</p>
					<p><strong>Textlink:</strong><br>
					<textarea onclick="this.select()" class="round">&lt;a href="http://nachricht.co/" title="Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link"&gt;Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link!&lt;/a&gt;</textarea>
					<p><strong>468x60 Werbebanner:</strong><br>
					<a href="http://nachricht.co/" target="_blank" class="simg"><img src="https://nachricht.co/b/01ani.gif" alt="Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link" border="0" class="showad"></a><br />
					<textarea onclick="this.select()" class="round">&lt;a href="http://nachricht.co/" title="Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link"&gt;&lt;img src="http://nachricht.co/b/01ani.gif" alt="Nachricht.co - Verschicke sich selbstzerstörende Nachrichten per Link" border="0" width="468" height="60"&gt;&lt;/a&gt;</textarea>
					</p>
				</article>
			</section>
			<? include('pages/misc.aside.php'); ?>
			<div class="clear"></div>
		</section>
	</div>