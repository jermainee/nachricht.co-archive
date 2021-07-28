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
<div id="nachricht" class="shadow">
	
	<?
	$eintrag = "INSERT INTO nachrichten (id, date, nachricht) VALUES ('$id', NOW(), '$encrypted')" or die ();
	if(empty($nachricht))
		{
		?>
			<div class="error"><? echo $err1; ?></div>
		<?
		}else{
		$eintragen = mysql_query($eintrag);
			if($eintragen == true)
			{
			echo $text1;
			$link = 'https://nachricht.co/'.$id.'-'.$passwort;
			echo '<input id="copy" type="text" class="link" value="'.$link.'">';
			mysql_query("UPDATE counter SET nachrichten= nachrichten +1 WHERE cid= 'counter'");
			}else{
			?>
			<div class="error"><? echo $err2; ?></div>
			<?
			}
		}
	?>
</div>
<div class="button"><a href="/"><? echo $btn2; ?></a></div>