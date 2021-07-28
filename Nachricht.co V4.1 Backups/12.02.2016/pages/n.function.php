<?php
if(!isset($apage))
{
	exit();
}

$verification = false;
$wrongpw = false;


if(isset($_GET['id']) AND isset($_GET['pass']))
{
	if(sonderzeichen(is_numeric($_GET['id'])) AND sonderzeichen($_GET['pass']))
	{
		
		$id1 = $_GET['id'];
		
		if(isset($_GET['pass']))
		{
			$passwort1 = $_GET['pass'];
		}
		
		$auslesen = mysqli_query($verbindung,"SELECT id, erstellt, empfangen, nachricht, passwort FROM nachrichten WHERE id= $id1");
		while($row = mysqli_fetch_array($auslesen))
		{
			$id = $row["id"];
   			$erstellt = $row["erstellt"];
   			$empfangen = $row["empfangen"];
   			$encrypted = $row["nachricht"];
  	 		$passwd = $row["passwort"];
		}
		
		if(empty($empfangen)){
			if(!empty($encrypted))
			{
				if(!empty($passwd))
				{
					$passwd1 = sha1($_POST['passphrase']);
					if(empty($_POST['passphrase']))
					{
						$verification = false;
						
					}else if($passwd == $passwd1){
						$verification = true;
					}else{
						$verification = false;
						$wrongpw = true;
					}
				}else{
					$verification = true;
				}
			}else{
				echo "Error";
			}
		}else{
		//echo "Bereits gelesen: ".$empfangen;
		}
	}else{
		//ID oder Pass nicht gesetzt
		header("location: /");
	}
}else{
	//Sonderzeichen erkannt
	header("location: /");
}
?>
