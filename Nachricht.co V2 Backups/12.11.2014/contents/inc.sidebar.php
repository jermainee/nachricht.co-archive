<?
$uri = $_SERVER['REQUEST_URI'];
if($uri == '/contents/inc.sidebar.php')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
										
										<section>
										<div id="paypal-widget">
		<div class="widget-paypal-top">Unterstützung für Nachricht.co</div>
		<div class="widget-paypal-step"><span>?</span>Warum unterstützen?</div>
		<p>Um die <span>Unabhängigkeit von Nachricht.co</span> zu schützen, gibt es <span>keine Werbung</span> und das Projekt wird durch <span>eure Hilfe</span> von durchschnittlich 5 € finanziert. Das gesammelte Geld wird für <span>anfallende Kosten wie Server, Domain und Weiterentwicklung</span> genutzt. <span>Sei doch auch ein Helfer, du unterstützt den Datenschutz!</span></p>
		
		<div class="widget-paypal-step"><span>€</span>Betrag auswählen</div>
		<form name="_xclick" action="https://www.paypal.com/de/cgi-bin/webscr" method="post" target="_blank" class="paypal-widget">
			<input type="hidden" name="business" value="info@nachricht.co" />
			<input type="hidden" name="cmd" value="_donations" />
			<input type="hidden" name="currency_code" value="EUR" />
			<input type="hidden" name="item_name" value="Unterst&uuml;tzung f&uuml;r Nachricht.co" />
			<input type="hidden" name="item_number" value="Donation" />
			<input type="number" id="enter-amount" name="amount" min="1" step="0.50" value="5.50" />
			<!---<input type="radio" id="amount1" name="amount" value="2.50">
				<label for="amount1">2,50 €</label>
			<input type="radio" id="amount2" name="amount" value="5" checked>
				<label for="amount2">5,00 €</label>
    		<input type="radio" id="amount3" name="amount" value="10">
       			<label for="amount3">10,00 €</label>
    		<input type="radio" id="amount4" name="amount" value="15">
       			<label for="amount4">15,00 €</label>---!>
			<input type="image" src="/paypal-widget/img/button.png" name="submit" value="Unterstützen" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
		</form>
		<img src="/paypal-widget/img/payments.png" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal." />
	</div>
	</section>