<?
define ( 'DB_HOST', 'nachricht.co.mysql' );
define ( 'DB_USER', 'nachricht_co' );
define ( 'DB_PASSWORD', '4Xv]GC&GngW5}Ys?dLBw3yFnrn8gVDzm' );
define ( 'DB_NAME', 'nachricht_co' );

$verbindung = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD)
or die ("Keine Verbindung möglich.");
mysql_select_db(DB_NAME) or die ("Die Datenbank existiert nicht.");
?>