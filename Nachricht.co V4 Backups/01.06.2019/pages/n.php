<?php
if ( ! isset( $apage ) ) {
	exit();
}

$inform = false;
?>
<div class="conintro">
	<?php include( '../pages/misc.header.php' ); ?>

    <section class="nachricht">
        <div class="container shadow">
			<?php
			include( '../pages/misc.adsenseTop.php' );

			if ( ! isset( $_POST['jsdf'] ) AND empty( $empfangen ) AND ! isset( $_POST['passphrase'] ) AND $verification == true ) {
				?>
                <div class="output-link round">
                    <p>Die Nachricht kann nur ein Mal geöffnet werden und zerstört sich danach selbst!</p>
					<?php
					include( '../pages/misc.adsense2.php' );
					$inform = true;
					?>
                    <form action="" method="POST" class="passphrase-form">
                        <button type="submit" name="jsdf" class="button round">Nachricht öffnen</button>
                    </form>
                </div>
				<?php
			}
			?>

			<?php
			if ( $verification == true AND isset( $_POST['jsdf'] ) OR $verification == true AND isset( $_POST['passphrase'] ) ) {
				?>

                <div class="output round">
                    <div class="noutput round">
						<?php
						echo autolink( htmlspecialchars( decrypt( $encrypted, $passwort1 ) ) );
						mysqli_query( $verbindung, "UPDATE nachrichten SET nachricht= '', empfangen= '$timestamp' WHERE id= $id1" );
						session_destroy();
						?>
                    </div>

                    <button onclick="window.location.href='/'" class="button round">Neue Nachricht</button>
                </div>

				<?php
			}

			if (!empty($passwd) && empty($empfangen) && !$verification) {
				?>
                <div class="output-link round">
					<?php
					if ( $wrongpw == true ) {
						echo "<p>Das Passwort war inkorrekt.</p>";
					} else {
						echo "<p>Diese Nachricht wurde mit einem Passwort geschützt.</p>";
					}
					?>

					<?php
					include( '../pages/misc.adsense2.php' );
					$inform = true;
					?>
                    <form action="" method="POST" class="passphrase-form">
                        <input type="text" name="passphrase" class="passwd round" placeholder="Passwort eingeben ..." autocomplete="off" autofocus required>
                        <button type="submit" class="button round">Bestätigen</button>
                    </form>
                </div>
                </form>
				<?php
			}

			if ($showMessageNotFound || $empfangen == "Nicht gelesen") {
				?>
                <div class="output round">
                    <div class="output-link round">
                        <p>Die von dir gesuchte Nachricht konnte leider nicht gefunden werden.</p>
                    </div>

                    <?php include( '../pages/misc.adsense2.php' ); ?>

                    <button onclick="window.location.href='/'" class="button round">Neue Nachricht</button>
                </div>
				<?php
			}
		?>
        </div>
    </section>
</div>

<?php include( '../pages/home-contents.php' ); ?>
