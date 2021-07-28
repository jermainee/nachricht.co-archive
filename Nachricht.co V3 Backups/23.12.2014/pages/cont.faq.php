<?
$uri = $_SERVER['REQUEST_URI'];
if($uri != '/faq/')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
	<div class="conintro">
		<? include('pages/misc.header.php'); ?>
	</div>
	
		<div class="container">
		<h2 class="headline">Häufig gestellte Fragen</h2>
	</div>
	
	<div class="container">
		<section class="content">
			<section class="bigbox side left round">
				
				<h2>FAQ</h2>

				<ul style="margin-left: 20px; font-size: 15px;">												
					<li><a href="/faq/#nachricht-wirklich-anonym">Ist Nachricht.co wirklich anonym?</a></li>
					<li><a href="/faq/#wie-nachricht-verschicken">Wie kann ich meine Nachricht verschicken?</a></li>
					<li><a href="/faq/#nachricht-an-mehrere-empfaenger">Kann ich Nachrichten an mehrere Empfänger verschicken?</a></li>
					<li><a href="/faq/#nachricht-browser-verlauf">Ist es möglich eine kürzlich gelesene Nachricht mittels des Browser-Verlaufes erneut zu lesen?</a></li>
				</ul>
				
				<article id="nachricht-wirklich-anonym">
					<h3>Ist Nachricht.co wirklich sicher und anonym?</h3>
					<p>Nachricht.co wird stetig weiterentwickelt um einen möglichst sicheren und anonymen Dienst zu ermöglichen. Mehr dazu kannst du in der Datenschutzerklärung erfahren.</p>
				</article>
				
				<article id="wie-nachricht-verschicken">
					<h3>Wie kann ich meine Nachricht verschicken?</h3>
					<p>Nach dem Erstellen einer Nachricht erhältst du einen Link, welchen du per Copy & Paste in eine Email, Chat-Nachricht o.Ä. einfügen kannst.</p>
				</article>
				
				<article id="nachricht-an-mehrere-empfaenger">
					<h3>Kann ich Nachrichten an mehrere Empfänger verschicken?</h3>
					<p>Nein, das geht nicht. Um eine Nachricht an mehrere Empfänger zu verschicken, musst du für jeden Empfänger eine einzelne Nachricht erstellen und ihm den Link schicken, denn sonst wäre es keine Einweg-Nachricht mehr.</p>
				</article>
				
				<article id="nachricht-browser-verlauf">
					<h3>Ist es möglich eine kürzlich gelesene Nachricht mittels des Browser-Verlaufes erneut zu lesen?</h3>
					<p>Jede Nachricht zerstört sich nach dem ersten Öffnen selbst. Es gibt keine Möglichkeit eine Nachricht erneut zu lesen.</p>
				</article>
			</section>
			
			<? include('pages/misc.aside.php'); ?>
			<div class="clear"></div>
		</section>
	</div>