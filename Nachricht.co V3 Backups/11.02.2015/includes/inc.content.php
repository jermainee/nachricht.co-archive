<?
$zufallsTexte[] = "Hi James! Ich wollte dich nur kurz fragen ob du ...";
$zufallsTexte[] = "Sag mal, wie bekomme ich am besten ...";
$zufallsTexte[] = "Hey! Kannst du mir erklären wie ...";
$zufallsTexte[] = "Wer war eigentlich der Typ von dem du ...";
$zufallsTexte[] = "Hier, meine Adresse ist ...";
$zufallsIndex =  rand(0,sizeof($zufallsTexte)-1);
$placeholder = $zufallsTexte[$zufallsIndex];

$notifyTexte[] = "Nachricht.co benötigt deine Hilfe!";
$notifyTexte[] = "Werde jetzt Unterstützer von Nachricht.co!";
$notifyTexte[] = "Investiere in den Schutz deiner Daten!";
$notifyIndex =  rand(0,sizeof($notifyTexte)-1);
$notify = $notifyTexte[$notifyIndex];

$err1 = "<b>Da ist wohl was schief gelaufen?!</b><p>Du musst eine Nachricht eingeben um einen Link zu erstellen.<br />Versuch's nochmal! ;-)</p>";
$err2 = "<b>Da ist wohl was schief gelaufen?!</b><p>Nachricht konnte aufgrund eines unbekannten Fehlers nicht gespeichert werden. Versuch's lieber später nochmal...</p>";
$err3 = "<b>Nachricht wurde nicht gefunden!</b><p>Entweder ist der eingegebene Link fehlerhaft oder diese Nachricht wurde bereits gelesen.</p>";
$err404 = "<h2>Seite nicht gefunden!</h2><p>Die von dir gesuchte Seite existiert leider nicht auf diesem Server.<br />Dumm gelaufen, was? :p</p>";


$site_name = "Nachricht.co";
$slogan = "Die verschlüsselte Einweg-Nachricht"; //Verschicke sich selbstzerstörende Nachrichten anonym über einen Link
$title_global = $site_name." - ".$slogan;
$meta_desc_global = "Verschicke völlig anonym und verschlüsselt eine sich selbstzerstörende Nachricht über einen Link an deinen Gesprächspartner. Die Einweg-Nachricht wird nach dem ersten Öffnen gelöscht.";
$meta_keyw = "selbstzerstörende nachricht, selbstzerstörende nachrichten, einweg nachricht, einweg nachrichten, anonyme nachricht, link nachricht, nachricht per link, verschlüsselte nachricht";

$og_title= "Verschicke sich selbstzerstörende Nachrichten anonym über einen Link!";
$og_img = "http://nachricht.co/images/nachricht-co.jpg";

$title_datenschutz = "Datenschutzerklärung";
$og_title_datenschutz = "Datenschutz bei Nachricht.co";
$meta_desc_datenschutz = "Hier kannst du genaueres über den Datenschutz von Nachricht.co erfahren.";

$title_spenden = "Jetzt unterstützen";
$og_title_spenden = "Unterstütze jetzt Nachricht.co für ein sichereres Internet!";
$meta_desc_spenden = "Mit deiner Hilfe kann ich dieses Projekt am Leben erhalten, immer weiter verbessern und gemeinsam mit dir für ein sichereres Internet sorgen!";

$title_faq = "Häufig gestellte Fragen";
$og_title_faq = "Häufig gestellte Fragen";
$meta_desc_faq = "Du hast Fragen zu Nachricht.co? Dann findest du hier die am häufigsten gestellen Fragen mit Antworten.";


$title_kontakt = "Kontakt";
$og_title_kontakt = "Schreib uns!";
$meta_desc_kontakt = "Du hast Fragen, Ideen oder einen Bug gefunden? Schreib uns, wir sind für dich da!";

$title_impressum = "Impressum & Disclaimer";
$og_title_impressum = "Impressum & Disclaimer";
$meta_desc_impressum = "Hier erfährst du alles über den Haftungsausschluss bei Nachricht.co";

$title_404 = "Seite nicht gefunden!";
$og_title_404 = "";
$meta_desc_404 = "";
?>