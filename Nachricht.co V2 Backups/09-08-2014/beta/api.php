<?
//$tokenvars = time().rand(100-999);
//$tokengen = md5($tokenvars);
//echo $tokengen;

$token = "d8e938a5f9572fe9a8c95eb02d96442fne";

	if($token == $_POST['token'])
		{
		require_once('../includes/inc.mysql.php');
		include('../includes/inc.encryption.php');
	
		$null = "";
   		$eintrag = "INSERT INTO nachrichten (id, erstellt, empfangen, nachricht) VALUES ('$id', NOW(), '$null', '$encrypted')" or die ();
		if(empty($nachricht))
			{
			echo "Nachricht ist leer";
			}else{
			$eintragen = mysql_query($eintrag);
			if($eintragen == true)
				{
				echo $text1;
				$link = 'https://nachricht.co/'.$id.'_'.$passwort;
				echo $link;
				mysql_query("UPDATE counter SET nachrichten= nachrichten +1 WHERE cid= 'counter'");
				}else{
				echo "Fehler beim Schreiben in die Datenbank";
				}
			}
		}else{
		echo "Kein Zugriff";
		}
?>
