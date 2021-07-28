<?php
$zufallsTexte[] = "Hi James! Ich wollte dich nur kurz fragen ob du ...";
$zufallsTexte[] = "Sag mal, wie bekomme ich am besten ...";
$zufallsTexte[] = "Hey! Kannst du mir erklären wie ...";
$zufallsTexte[] = "Wer war eigentlich der Typ von dem du ...";
$zufallsTexte[] = "Hier, meine Adresse ist ...";
$zufallsIndex =  rand(0,sizeof($zufallsTexte)-1);
$placeholder = $zufallsTexte[$zufallsIndex];

//$notifyTexte[] = "Dir gefällt Nachricht.co?";
//$notifyTexte[] = "Wir brauchen dich!";
$notifyTexte[] = "Wir haben ein paar Fragen an dich!";
$notifyIndex =  rand(0,sizeof($notifyTexte)-1);
$notify = $notifyTexte[$notifyIndex];
//$notifyButton = "Jetzt unterstützen!";
//$notifyURL = "/unterstuetzen/";
$notifyButton = "zur Umfrage";
$notifyURL = "https://goo.gl/forms/FZEBPFohHk0SF0JE2";


$err1 = "<p>Du musst eine Nachricht eingeben um einen Link zu erstellen.</p>";
$err2 = "<b>Ein Fehler ist aufgetreten:</b><p>Nachricht konnte aufgrund eines unbekannten Fehlers nicht gespeichert werden. Versuch's lieber später nochmal...</p>";
$err3 = "<b>Nachricht wurde nicht gefunden!</b><p>Entweder ist der eingegebene Link fehlerhaft oder diese Nachricht wurde bereits gelesen.</p>";
$err404 = "<h2>Seite nicht gefunden!</h2><p>Die von dir gesuchte Seite existiert leider nicht auf diesem Server.<br />Dumm gelaufen, was? :p</p>";

$site_name = "Nachricht.co";
$slogan = "Die verschlüsselte Einweg-Nachricht";
$meta_keyw = "selbstzerstörende nachricht, selbstzerstörende nachrichten, einweg nachricht, einweg nachrichten, anonyme nachricht, link nachricht, nachricht per link, verschlüsselte nachricht";

$og_title= "Verschicke sich selbstzerstörende Nachrichten anonym über einen Link!";
$og_img = "http://nachricht.co/img/preview/nachricht-co.jpg";
?>
