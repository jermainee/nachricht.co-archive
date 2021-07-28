<?php
if (!empty($_GET['lang'])) {
	if ($_GET['lang'] === 'en') {
		require('languages/en_lang.php');
		setcookie('website_language', 'en', time() + 60 * 60 * 24 * 90);
	} else {
		require('languages/de_lang.php');
		setcookie('website_language', 'de', time() + 60 * 60 * 24 * 90);
	}
} else {
	if (!empty($_COOKIE['website_language']) && $_COOKIE['website_language'] === 'en') {
		require('languages/en_lang.php');
	} else {
		require('languages/de_lang.php');
	}
}

$randomIndex =  rand(0,sizeof($textContents['messagePlaceholders'])-1);
$placeholder = $textContents['messagePlaceholders'][$randomIndex];

$err1 = "<p>Du musst eine Nachricht eingeben um einen Link zu erstellen.</p>";
$err2 = "<b>Ein Fehler ist aufgetreten:</b><p>Nachricht konnte aufgrund eines unbekannten Fehlers nicht gespeichert werden. Versuch's lieber später nochmal...</p>";
$err3 = "<b>Nachricht wurde nicht gefunden!</b><p>Entweder ist der eingegebene Link fehlerhaft oder diese Nachricht wurde bereits gelesen.</p>";
$err404 = "<h2>Seite nicht gefunden!</h2><p>Die von dir gesuchte Seite existiert leider nicht auf diesem Server.<br />Dumm gelaufen, was? :p</p>";

$site_name = "Nachricht.co";
$slogan = "Die verschlüsselte Einweg-Nachricht";
$meta_keyw = "selbstzerstörende nachricht, selbstzerstörende nachrichten, einweg nachricht, einweg nachrichten, anonyme nachricht, link nachricht, nachricht per link, verschlüsselte nachricht";

$og_title= "Verschicke sich selbstzerstörende Nachrichten anonym über einen Link!";
$og_img = "http://nachricht.co/img/preview/nachricht-co.jpg";
