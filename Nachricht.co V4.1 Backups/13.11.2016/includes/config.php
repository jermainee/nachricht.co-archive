<?php
header('Content-type: text/html; charset=utf-8');
date_default_timezone_set("Europe/Berlin");
$timestamp = date("d-m-Y H:i:s");

$uri = $_SERVER['REQUEST_URI'];

if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'){
	$protocol = 'https://';
}else{
	$protocol = 'http://';
}

$canonical = $protocol.$_SERVER["HTTP_HOST"].$uri;

//Ermittlung der Seite  -- echo pageswitch($page, $path);
if(isset($_GET['p']))
{
	$page = $_GET['p'];
}else{
	$page = '';
}
$path = "pages/";

//Generierung der ID und des Teilschlüssels
//$id = rand(10,999).time();
$id =  date('z').date('H').rand(10, 999).date('i').date('y');
$passwort = randomString('16');

//Format der Linkausgabe
$sitename = "https://".$_SERVER["HTTP_HOST"];//"http://127.0.0.1";
$link = $sitename.'/'.$id.'_'.$passwort;

//MySQL Konfiguration
define ( 'DB_HOST', 'localhost' );
define ( 'DB_USER', 'nachricht_co' );
define ( 'DB_PASSWORD', 'X8c6S3wpgJ33n97ZAAwpwu5pPxgBJNSx' );
define ( 'DB_NAME', 'nachricht_co' );

$verbindung = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (mysqli_connect_errno())
{
  echo "Keine Verbindung zum Server: " . mysqli_connect_error();
}

?>
