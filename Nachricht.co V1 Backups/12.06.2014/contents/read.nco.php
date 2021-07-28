<?
$uri = $_SERVER['REQUEST_URI'];
$verify = strpos($uri, 'read/');

if($verify == false)
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
<div id="content">
	<div id="nachricht">
<?
require_once('include/inc.mysql.php');
$id = mysql_real_escape_string($_GET['id']);
$passwort = mysql_real_escape_string($_GET['pass']);

if (empty($id) and empty($passwort))
{
echo $err3;
}

$abfrage = "SELECT * FROM nachrichten WHERE id= $id";
$ergebnis = mysql_query($abfrage) or die ();
while($row = mysql_fetch_object($ergebnis))
   {
   $id = "$row->id";
   $iv = "$row->hash";
   $encrypted = "$row->nachricht";
   }
if (empty($encrypted))
	{
	echo $err3;
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
	$htmln = str_replace(':D', '<img src="/img/smileys/laugh.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-D', '<img src="/img/smileys/laugh.gif" class="smiley">', $htmln);
	$htmln = str_replace(':P', '<img src="/img/smileys/tongue.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-p', '<img src="/img/smileys/tongue.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-P', '<img src="/img/smileys/tongue.gif" class="smiley">', $htmln);
	$htmln = str_replace(':bomb:', '<img src="/img/smileys/bomb.gif" class="smiley">', $htmln);
	$htmln = str_replace(':fie:', '<img src="/img/smileys/fie.gif" class="smiley">', $htmln);
	echo $htmln;
	
	$loeschen = "DELETE FROM nachrichten WHERE id= $id";
	$loesch = mysql_query($loeschen) or die ();
	}
?>
	
	</div>
	<div class="button"><a href="/new.html"><? echo $btn2; ?></a></div>
</div>

