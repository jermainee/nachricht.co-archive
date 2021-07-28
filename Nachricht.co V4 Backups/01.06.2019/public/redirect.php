<?php
session_start();

require('../includes/functions.php');

$id1 = $_GET['id'];
$pass1 = $_GET['pass'];

if(!empty($id1) AND !empty($pass1))
{
	$_SESSION['id'] = $id1;
	$_SESSION['pass'] = $pass1;
	header('location: https://'.$_SERVER["HTTP_HOST"].'/n/');
	header('HTTP/1.1 301 Moved Permanently');
}else{
	header('location: https://'.$_SERVER["HTTP_HOST"]);
	header('HTTP/1.1 301 Moved Permanently');
}