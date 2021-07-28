<?php
if(!isset($apage))
{
	exit();
}

$inform = false;
?>
	<div class="conintro">
		<?php include('pages/misc.header.php'); ?>
	
	<section class="nachricht">
		<div class="container shadow">
			
			<?php
				
			
				if(!isset($_POST['jsdf']) AND empty($empfangen) AND !isset($_POST['passphrase']) AND $verification == true)
				{
				?>
					<div class="output-link round">
						<p>Die Nachricht kann nur ein Mal geöffnet werden und zerstört sich danach selbst!</p>
				        <?php
                            include('pages/misc.adsense2.php');
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
				if($verification == true AND isset($_POST['jsdf']) OR $verification == true AND isset($_POST['passphrase']))
				{
			?>
				
			<div class="output round">
				<div class="noutput round">
					<?php
						echo smileys(autolink(htmlspecialchars(decrypt($encrypted, $passwort1))));
						mysqli_query($verbindung,"UPDATE nachrichten SET nachricht= '', empfangen= '$timestamp' WHERE id= $id1");
						session_destroy();
					?>
				</div>
				
				<button onclick="window.location.href='/'" class="button round">Neue Nachricht</button>
			</div>
				
				
			<?php
				}
				
				
				if(empty($empfangen) AND $verification == false){
			?>
				<div class="output-link round">
			
			
			<?php
				if($wrongpw == true)
				{
					echo "<p>Das Passwort war inkorrekt.</p>";
				}else{
					echo "<p>Diese Nachricht wurde mit einem Passwort geschützt.</p>";
				}
			?>
                    
                    <?php
                            include('pages/misc.adsense2.php');
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
				
				if(!empty($empfangen) AND $empfangen != "Nicht gelesen")
				{
				?>
				<div class="output round">
				<div class="noutput round">
				<?php
					echo "<b>Nachricht wurde bereits gelesen!</b><p>Diese Nachricht wurde bereits gelesen und gelöscht.<br />Gelesen: ".$empfangen."</p>";
					session_destroy();
				?>
				</div>
				<button onclick="window.location.href='/'" class="button round">Neue Nachricht</button>
			</div>
				<?php
				}else if($empfangen == "Nicht gelesen")
				{
?>
                                <div class="output round">
                                <div class="noutput round">
                                <?php
                                        echo "<b>Nachricht wurde automatisch gelöscht!</b><p>Diese Nachricht wurde nicht geöffnet und nach 24 Stunden automatisch gelöscht.</p>";
                               		session_destroy();
				 ?>
                                </div>
                                <button onclick="window.location.href='/'" class="button round">Neue Nachricht</button>
                        </div>
                                <?php
     				}
					
					?>
				
		</div>
		<?php 
        if($inform == false)
        {
            include('pages/misc.adsense.php');
        }
        ?>
	</section>
	</div>
	
	<?php include('pages/home.php'); ?>
