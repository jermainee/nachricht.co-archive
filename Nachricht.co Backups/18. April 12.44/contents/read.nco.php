<div id="content">
	<div id="nachricht">
<?
require_once('include/inc.mysql.php');

$id = mysql_real_escape_string($_GET['id']);
$passwort = mysql_real_escape_string($_GET['pass']);

if (empty($id) and empty($passwort))
{
echo "Datei existiert nicht.";
}

$abfrage = "SELECT * FROM nachrichten WHERE id= $id";
$ergebnis = mysql_query($abfrage);
while($row = mysql_fetch_object($ergebnis))
   {
   $id = "$row->id";
   $iv = "$row->hash";
   $encrypted = "$row->nachricht";
   }
if (empty($encrypted))
	{
	echo "Datei existiert nicht.";
	} else {
	$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($passwort), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($passwort))), "\0");
	$htmln = htmlspecialchars($decrypted);
	$htmln = str_replace(array("\\r\\n"),"<br/>", $htmln);
	$htmln = str_replace(':)', '<img src="/img/smileys/smile.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-)', '<img src="/img/smileys/smile.gif" class="smiley">', $htmln);
	$htmln = str_replace(':(', '<img src="/img/smileys/sad.gif" class="smiley"class="smiley">', $htmln);
	$htmln = str_replace(':-(', '<img src="/img/smileys/sad.gif" class="smiley">', $htmln);
	$htmln = str_replace(';)', '<img src="/img/smileys/wink.gif" class="smiley">', $htmln);
	$htmln = str_replace(';-)', '<img src="/img/smileys/wink.gif" class="smiley">', $htmln);
	$htmln = str_replace(':D', '<img src="/img/smileys/grin.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-D', '<img src="/img/smileys/grin.gif" class="smiley">', $htmln);
	$htmln = str_replace(':o', '<img src="/img/smileys/surprised.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-o', '<img src="/img/smileys/surprised.gif" class="smiley">', $htmln);
	$htmln = str_replace(':O', '<img src="/img/smileys/surprised.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-O', '<img src="/img/smileys/surprised.gif" class="smiley">', $htmln);
	$htmln = str_replace(':S', '<img src="/img/smileys/confused.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-S', '<img src="/img/smileys/confused.gif" class="smiley">', $htmln);
	$htmln = str_replace(':p', '<img src="/img/smileys/razz.gif" class="smiley">', $htmln);
	$htmln = str_replace(':P', '<img src="/img/smileys/razz.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-p', '<img src="/img/smileys/razz.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-P', '<img src="/img/smileys/razz.gif" class="smiley">', $htmln);
	$htmln = str_replace('8)', '<img src="/img/smileys/cool.gif" class="smiley">', $htmln);
	$htmln = str_replace('8-)', '<img src="/img/smileys/cool.gif" class="smiley">', $htmln);
	echo $htmln;
	
	$loeschen = "DELETE FROM nachrichten WHERE id= $id";
	$loesch = mysql_query($loeschen);
	}
?>
	
	</div>
	<div class="button"><a href="/new.html">Neue Nachricht</a></div>
</div>

