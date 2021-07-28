<?
$uri = $_SERVER['REQUEST_URI'];
if($uri == '/includes/inc.encryption.php')
	{
	header('location: http://nachricht.co');
	exit();
	}
$id = rand(234,927).time();
$passwort = rand(100,999).time();
$nachricht = mysql_real_escape_string($_POST['nachricht']);
$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($passwort), $nachricht, MCRYPT_MODE_CBC, md5(md5($passwort))));
?>