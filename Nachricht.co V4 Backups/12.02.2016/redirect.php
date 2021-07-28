<?php
require('includes/functions.php');

$id1 = $_GET['id'];
$pass1 = $_GET['pass'];

if(!empty($id1) AND !empty($pass1))
{
	header('location: http://'.$_SERVER["HTTP_HOST"].'/n/'.$id1.'_'.$pass1);
	header('HTTP/1.1 301 Moved Permanently');
}else{
	header('location: http://'.$_SERVER["HTTP_HOST"]);
	header('HTTP/1.1 301 Moved Permanently');
}
?>