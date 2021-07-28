<?
define ( 'DB_HOST', 'nachricht.co.mysql' );
define ( 'DB_USER', 'nachricht_co' );
define ( 'DB_PASSWORD', '{$cf37]kJq~+y)6]$h&!sR2,uL53EW;f' );
define ( 'DB_NAME', 'nachricht_co' );

$verbindung = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD)
or die ("Keine Verbindung möglich. Benutzername oder Passwort sind falsch");
mysql_select_db(DB_NAME) or die ("Die Datenbank existiert nicht.");
?>