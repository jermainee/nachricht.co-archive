<?
$uri = $_SERVER['REQUEST_URI'];
$verify = strpos($uri, 'nachricht/');

if($verify == false)
	{
	header('location: http://nachricht.co');
	exit();
	}

function autolink($str, $attributes=array()) {
  $attrs = '';
  foreach ($attributes as $attribute => $value) {
    $attrs .= " {$attribute}=\"{$value}\"";
  }
$str = ' ' . $str;
$str = preg_replace(
  '`([^"=\'>])(((http|https|ftp)://|www.)[^\s<]+[^\s<\.)])`i',
  '$1<a href="$2" class="inlink" '.$attrs.'>$2</a>',
  $str
);
$str = substr($str, 1);
$str = preg_replace('`href=\"www`','href="http://www',$str);
return $str;
}
?>
	<div class="conintro">
		<? include('pages/misc.header.php'); ?>
	
	<section class="nachricht">
		<div class="container">
			<div class="output round">
				<div class="noutput round">
					<?
										require_once('includes/inc.mysql.php');
$id = mysql_real_escape_string($_GET['id']);
$passwort = mysql_real_escape_string($_GET['pass']);

if (empty($id) and empty($passwort))
{
echo $err3;
}else{

$abfrage = "SELECT * FROM nachrichten WHERE id= $id";
$ergebnis = mysql_query($abfrage) or die ();
while($row = mysql_fetch_object($ergebnis))
   {
   $id = "$row->id";
   $erstellt = "$row->erstellt";
   $empfangen = "$row->empfangen";
   $encrypted = "$row->nachricht";
   }
if (empty($encrypted))
	{
	if(!empty($empfangen)){
	?>
		<b>Nachricht wurde bereits gelesen!</b><p>Diese Nachricht wurde bereits gelesen und gelöscht.<br />Gelesen: <? echo $empfangen; ?></p>
	<?
		}else{
	?>
			<div class="error"><? echo $err3; ?></div>
	<?
	}} else {
	$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($passwort), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($passwort))), "\0");
	$htmln = htmlspecialchars($decrypted);
	$htmln = str_replace(array("\\r\\n"),"<br/>", $htmln);
	$htmln = str_replace(':)', '<img src="/images/smileys/smile.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-)', '<img src="/images/smileys/smile.gif" class="smiley">', $htmln);
	$htmln = str_replace(':(', '<img src="/images/smileys/sad.gif" class="smiley"class="smiley">', $htmln);
	$htmln = str_replace(':-(', '<img src="/images/smileys/sad.gif" class="smiley">', $htmln);
	$htmln = str_replace(';)', '<img src="/images/smileys/wink.gif" class="smiley">', $htmln);
	$htmln = str_replace(';-)', '<img src="/images/smileys/wink.gif" class="smiley">', $htmln);
	$htmln = str_replace(':D', '<img src="/images/smileys/laugh.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-D', '<img src="/images/smileys/laugh.gif" class="smiley">', $htmln);
	$htmln = str_replace(':P', '<img src="/images/smileys/tongue.gif" class="smiley">', $htmln);
	$htmln = str_replace(':p', '<img src="/images/smileys/tongue.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-p', '<img src="/images/smileys/tongue.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-P', '<img src="/images/smileys/tongue.gif" class="smiley">', $htmln);
	$htmln = str_replace(':bomb:', '<img src="/images/smileys/bomb.gif" class="smiley">', $htmln);
	$htmln = str_replace(':fie:', '<img src="/images/smileys/fie.gif" class="smiley">', $htmln);
	echo "<p>".autolink($htmln,array("target"=>"_blank"))."</p>";
	
	//$loeschen = "DELETE FROM nachrichten WHERE id= $id";
	$loeschen = "UPDATE nachrichten SET nachricht= '', empfangen= NOW() WHERE id= $id";
	$loesch = mysql_query($loeschen) or die ();
		}
	}
	
?>
				</div>
				<button onclick="window.location.href='/'" class="button round">Neue Nachricht</button>
			</div>
		</div>
	</section>
	
	</div>
	
	<div class="container">
		<h2 class="headline">Verschicke sich selbstzerstörende Nachrichten anonym über einen Link!</h2>
	</div>
	
	<div class="container">
		<section class="features round shadow">
			<article class="left round">
				<img src="img/icons/delete.png" alt="Einmal geöffnet, für immer gelöscht" />
				<h3>Einmal geöffnet, für immer gelöscht</h3>
				<p>Wenn eine Nachricht über ihren passenden Link geöffnet wird, dann wird sie nicht nur einfach angezeigt, sondern auch automatisch aus der Datenbank gelöscht. So ist es nicht mehr möglich diese Nachricht nachdem ersten Öffnen zu lesen, da sie nicht mehr existiert.</p>
			</article>
			
			<article class="right round">
				<img src="img/icons/encryption.png" alt="Eine starke Verschlüsselung" />
				<h3>Eine starke Verschlüsselung</h3>
				<p>Um Nachrichten am besten vor fremden Einblicken zu schützen, werden diese und deine Verbindung von uns verschlüsselt. Hierfür werden <a href="https://nachricht.co/faq/#wie-werden-meine-daten-gespeichert" title="Wie werden meine Daten gespeichert? (FAQ)">Verschlüsselungstechniken</a> verwendet, welche in den USA für staatliche Dokumente mit höchster Geheimhaltungsstufe zugelassen sind.</p>
			</article>
		
			<div class="clear"></div>
			
			<article class="left round">
				<img src="img/icons/anonymity.png" alt="Anonymität ist wichtig" />
				<h3>Anonymität ist wichtig</h3>
				<p>Da dieses Projekt für Anonymität im Internet steht, brauchst du auch keinerlei Daten von dir preisgeben, wenn du das nicht möchtest. Diese Seite funktioniert völlig ohne Anmeldung und speichert auch keine personenbezogenen Daten im Zusammenhang mit Nachrichten.</p>
			</article>
			
			<article class="right round">
				<img src="img/icons/features.png" alt="Optimal für Smartphones und Tablets" />
				<h3>Optimal für Smartphones und Tablets</h3>
				<p>In der heutigen Zeit sind Smartphones und Tablets nicht mehr weg zu denken. Damit du auch unterwegs so sicher wie möglich schreiben kannst wird Nachricht.co ständig weiterentwickelt und für mobile Geräte optimiert.</p>
			</article>
			
			<div class="clear"></div>
		</section>
	</div>