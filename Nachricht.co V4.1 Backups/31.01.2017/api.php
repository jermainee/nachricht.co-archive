<?php
/* 

Nachricht.co API
von Jermaine J. Ernst

Version 1.0

*/

header('Content-Type: application/json');
header("X-Robots-Tag: noindex,nofollow");

// API-Key

$apikey = "Br3EN3NYagNGAwtS";
$secret = "6BR6FJgK89Vz9m8H3AbyDauTf4uq3vRY";

// ENDE


// Importieren der Funktionen
require('includes/functions.php');
require_once('includes/config.php');

// Übergabe der Parameter
foreach ($_POST as $key => $value) {
    switch ($key) {
        case 'cmd': // write oder read
            $cmd = $value;
            break;
        case 'nachricht': // Inhalt der Nachricht
            $nachricht = htmlspecialchars($value);
            break;
        case 'passphrase': // Vom Benutzer festgelegtes Passwort für Nachricht
            $passphrase = htmlspecialchars($value);
            break;
        case 'id': // ID der Nachricht
            $id1 = htmlspecialchars($value);
            break;
        case 'pass': // Passwort zum entschlüsseln der Nachricht
            $pass = htmlspecialchars($value);
            break;
        case 'apikey': // API-Schlüssel
            $apikey1 = $value;
            break;
        case 'secret': // Secret-Schlüssel
            $secret1 = $value;
            break;
        default:
            break;
    }
}

// Überprüfung der API-Schlüssel
if($apikey == $apikey1 AND $secret == $secret1)
{
    
    // Überprüfung des Befehls
    if($cmd == "write" AND !empty($nachricht))
    {

        // Ist die Nachricht leer?
        if(!empty($nachricht))
        {
            
            // Passwort für die Nachricht vom Benutzer festgelegt?
            if(!empty($passphrase))
            {
                $userpass = sha1($_POST['passphrase']);
            }
            
            // Verschlüsselung und Speicherung der Nachricht
            $encry = encrypt($nachricht, $passwort);
            $eintragen = "INSERT INTO nachrichten VALUES ('$id', '$timestamp', '', '$encry', '$userpass')";
            $verbindung->query($eintragen);
            
            $array = array(
                'status' => "write",
                'id' => $id,
                'pass' => $passwort
                );
            
        }else{
            
            // Nachricht ist leer
            $array = array(
                'status' => "no message"
                );
        }
        
    }else if($cmd == "read")
    {        
        // Auslesen aus der Datenbank
        $auslesen = mysqli_query($verbindung,"SELECT id, erstellt, empfangen, nachricht, passwort FROM nachrichten WHERE id= $id1");
		while($row = mysqli_fetch_array($auslesen))
		{
			$id2 = $row["id"];
   			$erstellt = $row["erstellt"];
   			$empfangen = $row["empfangen"];
   			$encrypted = $row["nachricht"];
  	 		$passwd = $row["passwort"];
		}
        
        // Überprüfung ob Nachricht bereits gelesen / gelöscht wurde
        if(empty($empfangen) AND !empty($encrypted)){ // 
            
            // Überprüfung auf Passwort
            if(!empty($passwd))
            {
				if(empty($passphrase))
				{
                    // Kein Passwort angegeben
                    $verification = false;
                    
					$array = array(
                        'status' => "no pwd"
                        );
					
				}else if($passwd == $passphrase){
                    
                    // Richtiges Passwort
					$verification = true;
                    
				}else{
                    
                    // Falsches Passwort
                    $verification = false;
                    
					$array = array(
                        'status' => "wrong pwd"
                        );
				}
            }else{
                $verification = true;
            }
            
            // Ausgabe der Nachricht
            if($verification = true)
            {
                $decrypted = htmlspecialchars(decrypt($encrypted, $pass)); // Entschlüsselung
                
                // Ausgabe der entschlüsselten Nachricht 
                $array = array(
                    'status' => "read",
                    'message' => $decrypted
                    );

				mysqli_query($verbindung,"UPDATE nachrichten SET nachricht= '', empfangen= '$timestamp' WHERE id= $id1"); // Löschung der Nachricht
            }
            
		}else{
            
            // Nachricht bereits gelesen
            $array = array(
                'status' => "deleted",
                'timestamp' => $empfangen
                );
		}
        
    }else{
        
        // Kein Befehl
        $array = array(
            'status' => "no cmd"
            );
    }
    
}else{
    
    // Inaktiv, da falsche oder keine Schlüssel angegeben wurden
    $array = array(
        'status' => "inactive"
        );
}

// Ausgabe
echo json_encode($array);

// Logdatei schreiben
$logdatei=fopen("/var/log/nco-api.log","a");
fputs($logdatei,
    date("d.m.Y, H:i:s",time()) .
    ", " . $_SERVER['REMOTE_ADDR'] .
    ", " . $_SERVER['REQUEST_METHOD'] .
    ", " . $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'] .
    ", " . $_SERVER['HTTP_USER_AGENT'] .
    ", " . $_SERVER['HTTP_REFERER'] ."\n"
    );
fclose($logdatei);
?>