<?
$zufallsTexte[] = "Hi James! Ich wollte dich nur kurz fragen ob du ...";
$zufallsTexte[] = "Sag mal, wie bekomme ich am besten ...";
$zufallsTexte[] = "Hey! Kannst du mir erklären wie ...";
$zufallsTexte[] = "Wer war eigentlich der Typ von dem du ...";

$zufallsIndex =  rand(0,sizeof($zufallsTexte)-1);
$placeholder = $zufallsTexte[$zufallsIndex];

$text1 = "<p>Kopiere diesen Link und sende ihn wem du möchtest.<br />Die gespeicherte Nachricht wird sofort gelöscht, nachdem sie das erste mal geöffnet wurde.</p>";

$err1 = "<b>Da ist wohl was schief gelaufen?!</b><p>Du musst eine Nachricht eingeben um einen Link zu erstellen.<br />Versuch's nochmal! ;-)</p>";
$err2 = "<b>Da ist wohl was schief gelaufen?!</b><p>Nachricht konnte aufgrund eines unbekannten Fehlers nicht gespeichert werden. Versuch's lieber später nochmal...</p>";
$err3 = "<b>Nachricht wurde nicht gefunden!</b><p>Entweder ist der eingegebene Link fehlerhaft oder diese Nachricht wurde bereits gelesen.</p>";
$err404 = "<h2>Seite nicht gefunden!</h2><p>Die von dir gesuchte Seite existiert leider nicht auf diesem Server.<br />Dumm gelaufen, was? :p</p>";

$btn = "Nachricht erstellen";

$site_name = "Nachricht.co";
$slogan = "Verschicke sich selbstzerstörende Nachrichten anonym über einen Link";
$title_global = "Nachricht.co - Verschicke sich selbstzerstörende Nachrichten anonym über einen Link";
$meta_desc_global = "Verschicke völlig anonym und verschlüsselt eine Nachricht über einen Link. Die Nachricht wird sich nach dem ersten Öffnen selbstzerstören.";
$meta_keyw = "nachrichtco, verschicke, selbstzerstörende, nachricht, nachrichten, anonym, link, verschlüsselt";

$og_title= "Verschicke sich selbstzerstörende Nachrichten anonym über einen Link!";
$og_img = "http://nachricht.co/images/nachricht.co.png";

$title_datenschutz = "Rechtliches";
$og_title_datenschutz = "Hier kannst du genaueres über Datenschutz und Richtlinien von Nachricht.co erfahren.";
$meta_desc_datenschutz = "Hier kannst du genaueres über Datenschutz und Richtlinien von Nachricht.co erfahren.";

$title_spenden = "Spenden für Nachricht.co";
$og_title_spenden = "Unterstütze jetzt Nachricht.co mit einer Spende!";
$meta_desc_spenden = "Mit deiner Spende kann ich dieses Projekt am Leben erhalten, immer weiter verbessern und gemeinsam mit dir für ein sichereres Internet sorgen!";


$title_kontakt = "Kontakt";
$og_title_kontakt = "Schreib uns!";
$meta_desc_kontakt = "Du hast Fragen, Ideen oder einen Bug gefunden? Schreib uns, wir sind für dich da!";

$title_404 = "Seite nicht gefunden!";
$og_title_404 = "";
$meta_desc_404 = "";

//Navigation
$nav1 = "Nachricht erstellen";
$nav1_url = "/";

$nav2 = "Rechtliches";
$nav2_url = "/rechtliches/";

$nav3 = "Kontakt";
$nav3_url = "/kontakt/";

$paypal_button = "via PayPal spenden";
$paypal_url = "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EGDHJC336SVZG";
?>