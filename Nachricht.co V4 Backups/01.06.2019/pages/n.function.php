<?php
session_start();
$verification = false;
$wrongpw = false;
$showMessageNotFound = false;

if (isset( $_SESSION['id'] ) AND isset( $_SESSION['pass'])) {
	if (is_numeric($_SESSION['id']) AND sonderzeichen($_SESSION['pass'])) {

		$id1 = $_SESSION['id'];

		if ( isset( $_SESSION['pass'] ) ) {
			$passwort1 = $_SESSION['pass'];
		}

		$auslesen = mysqli_query( $verbindung, "SELECT id, erstellt, empfangen, nachricht, passwort FROM nachrichten WHERE id= $id1" );
		while ( $row = mysqli_fetch_array( $auslesen ) ) {
			$id        = $row["id"];
			$erstellt  = $row["erstellt"];
			$empfangen = $row["empfangen"];
			$encrypted = $row["nachricht"];
			$passwd    = $row["passwort"];
		}

		if (empty($empfangen) && !empty($encrypted)) {
			if (!empty($passwd)) {
				$passwd1 = sha1( $_POST['passphrase'] );
				if ( empty( $_POST['passphrase'] ) ) {
					$verification = false;

				} else if ($passwd == $passwd1) {
					$verification = true;
				} else {
					$verification = false;
					$wrongpw      = true;
				}
			} else {
				$verification = true;
			}
		} else {
			//echo "Bereits gelesen: ".$empfangen;
			$showMessageNotFound = true;
		}
	} else {
		//ID oder Pass nicht gesetzt
		$showMessageNotFound = true;
	}
} else {
	//Sonderzeichen erkannt
	$showMessageNotFound = true;
}