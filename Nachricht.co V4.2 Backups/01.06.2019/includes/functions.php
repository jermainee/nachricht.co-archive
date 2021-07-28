<?php
//Ermittlung der Seite
function pageswitch( $page, $path ) {
	if ( file_exists( $path . $page . ".php" ) ) {
		switch ( $page ) {
			case "unterstuetzen":
				return array(
					"unterstuetzen",
					"Jetzt unterstützen - Nachricht.co",
					"Unterstütze jetzt Nachricht.co für ein sichereres Internet!",
					"Mit deiner Hilfe kann ich dieses Projekt am Leben erhalten, immer weiter verbessern und gemeinsam mit dir für ein sichereres Internet sorgen!"
				);
				break;

			case "faq":
				return array(
					"faq",
					"Häufig gestellte Fragen - Nachricht.co",
					"Häufig gestellte Fragen - Nachricht.co",
					"Du hast Fragen zu Nachricht.co? Dann findest du hier die am häufigsten gestellen Fragen mit Antworten."
				);
				break;

			case "datenschutz":
				return array(
					"datenschutz",
					"Datenschutzerklärung - Nachricht.co",
					"Datenschutz bei Nachricht.co",
					"Hier kannst du genaueres über den Datenschutz von Nachricht.co erfahren."
				);
				break;

			case "aes":
				return array(
					"aes",
					"Advanced Encryption Standard (AES) - Nachricht.co",
					"Advanced Encryption Standard (AES) - Nachricht.co",
					"Dieser Verschlüsselungsalgorithmus verschlüsselt und entschlüsselt Daten in Blöcken von 128 Bits mit kryptographischen Schlüsseln in einer Länge von 128 Bits, 192 Bits und 256 Bits."
				);
				break;

			case "tls":
				return array(
					"tls",
					"Transport Layer Security (TLS) - Nachricht.co",
					"Transport Layer Security (TLS) - Nachricht.co",
					"Zum Schutz persönlicher Daten bei der Datenübertragung zwischen unserem Server und deinem Gerät benutzen wir TLS (Transport Layer Security), den Nachfolger von SSL (Secure Sockets Layer)."
				);
				break;

			case "impressum":
				return array(
					"impressum",
					"Impressum - Nachricht.co",
					"Impressum & Disclaimer - Nachricht.co",
					"Hier erfährst du alles über den Haftungsausschluss bei Nachricht.co"
				);
				break;

			case "n":
				return array(
					"n",
					"Nachricht.co - Die verschlüsselte Einweg-Nachricht",
					"Nachricht.co - Die verschlüsselte Einweg-Nachricht",
					"Mit Nachricht.co kannst du völlig anonym und verschlüsselt eine sich selbstzerstörende Einweg-Nachricht per Link an deinen Gesprächspartner senden."
				);
				break;

			case "500":
				return array(
					"500",
					"Fehler 500 - Nachricht.co",
					"Fehler 500 - Nachricht.co",
					"Bitte versuche es zu einem späteren Zeitpunkt noch einmal."
				);
				break;

			case "404";
				return array(
					"404",
					"404 - Seite nicht gefunden",
					"Diese Seite konnte leidern nicht gefunden werden.",
					"Diese Seite konnte leidern nicht gefunden werden."
				);
		}
	} else if ( empty( $page ) OR ! isset( $page ) ) {
		return array(
			"home",
			"Nachricht.co - Die verschlüsselte Einweg-Nachricht",
			"Nachricht.co - Die verschlüsselte Einweg-Nachricht",
			"Mit Nachricht.co kannst du völlig anonym und verschlüsselt eine sich selbstzerstörende Einweg-Nachricht per Link an deinen Gesprächspartner senden."
		);
	} else {
		return array(
			"404",
			"404 - Seite nicht gefunden",
			"Diese Seite konnte leidern nicht gefunden werden.",
			"Diese Seite konnte leidern nicht gefunden werden."
		);
	}
}

//zufälligen Schlüssel generieren
function randomString( $length ) {
	$characters       = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen( $characters );
	$randomString     = '';
	for ( $i = 0; $i < $length; $i ++ ) {
		$randomString .= $characters[ rand( 0, $charactersLength - 1 ) ];
	}

	return $randomString;
}

//Verschlüsseln
function encrypt( $value, $passwort ) {
	$encrypt = mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $passwort ), $value, MCRYPT_MODE_CBC, md5( md5( $passwort ) ) );

	return base64_encode( $encrypt );
}

//Entschlüsseln
function decrypt( $value, $passwort ) {
	$decoded = base64_decode( $value );

	return rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $passwort ), $decoded, MCRYPT_MODE_CBC, md5( md5( $passwort ) ) ), "\0" );
}

//URL in Link umwandeln
function autolink( $str, $attributes = array() ) {
	$attrs = '';
	foreach ( $attributes as $attribute => $value ) {
		$attrs .= " {$attribute}=\"{$value}\"";
	}
	$str = ' ' . $str;
	$str = preg_replace(
		'`([^"=\'>])(((http|https|ftp)://|www.)[^\s<]+[^\s<\.)])`i',
		'$1<a href="$2" class="inlink" rel="noopener noreferrer"' . $attrs . '>$2</a>',
		$str
	);
	$str = substr( $str, 1 );
	$str = preg_replace( '`href=\"www`', 'href="http://www', $str );

	return $str;
}


//mysql_real_escape_string
function anti_sqli( $value ) {
	$value = stripslashes( $value );

	return mysqli_real_escape_string( $value );
}

//Debug zum testen ob Nachrichten korrekt gespeichert werden
function nco_debug( $message, $id, $timestamp ) {
	file_put_contents( "/var/www/nco_debug.log", "[" . $timestamp . " | " . $id . "] " . $message . "\n", FILE_APPEND );
}

//Auf Sonderzeichen prüfen
function sonderzeichen( $value ) {
	if ( preg_match( "/^[a-z0-9äöü]+$/i", $value ) ) {
		return true;
		//keine Sonderzeichen
	} else {
		return false;
		//Sonderzeichen
	}
}
