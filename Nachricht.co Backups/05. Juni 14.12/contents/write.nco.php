<?
$uri = $_SERVER['REQUEST_URI'];
if($uri != '/write.html')
	{
	header('location: http://nachricht.co');
	exit();
	}
require_once('include/inc.mysql.php');

$id = rand(234,927).time();
$passwort = rand(100,999).time();
$nachricht = mysql_real_escape_string($_POST['nachricht']);
$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($passwort), $nachricht, MCRYPT_MODE_CBC, md5(md5($passwort))));
?>

<div id="content" class="shadow">
	<div id="nachricht">
	
	<?
	$eintrag = "INSERT INTO nachrichten (id, hash, nachricht) VALUES ('$id', '$iv', '$encrypted')" or die ();
	if(empty($nachricht))
		{
		echo "Nachricht konnte nicht gespeichert werden. (312)<br />";
		}else{
		$eintragen = mysql_query($eintrag);
		if($eintragen == true)
		{
		echo $text3;
		$link = 'https://nachricht.co/'.$id.'-'.$passwort;
		echo '<input id="copy" type="text" class="link" value="'.$link.'">';
		mysql_query("UPDATE counter SET nachrichten= nachrichten +1 WHERE cid= 'counter'");
		}else{
		echo "Nachricht konnte nicht gespeichert werden. (418)";
		}
		}
		
	
	?>
	</div>
	<div class="button"><a href="/new.html">Neue Nachricht</a></div>
</div>