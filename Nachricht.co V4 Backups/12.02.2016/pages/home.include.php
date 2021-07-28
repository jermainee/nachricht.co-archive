<?php
if(!isset($apage))
{
	exit();
}
?>
	<div class="conintro">
		<?php include('pages/misc.header.php'); ?>
	
<?php
//In Datenbank schreiben
if(isset($_POST['erstellen']))
	{
	if(!empty($_POST['nachricht']))
	{	
		if(!empty($_POST['passphrase']))
		{
			$userpass = sha1($_POST['passphrase']);
		}
		
		$nachricht = $_POST['nachricht'];
		$encry = encrypt($nachricht, $passwort);
		$eintragen = "INSERT INTO nachrichten VALUES ('$id', '$timestamp', '', '$encry', '$userpass')";
		$verbindung->query($eintragen);
?>
		<section class="nachricht">
		<div class="container shadow">
			<div class="output-link round">
				<p>Kopiere diesen Link und sende ihn wem du möchtest.<br />Die erstellte Nachricht wird sofort gelöscht, nachdem sie das erste Mal geöffnet wurde.</p>
				<input type="text" class="link round" onclick="this.select()" class="link" value="<?php echo $link; ?>" autofoucs>
				<button onclick="window.location.href='/'" class="button round">Neue Nachricht</button>
			</div>
		</div>
		<?php include('pages/misc.adsense.php'); ?>
	</section>
		<?php
	}else{
		//echo "Es wurde keine Nachricht eingegeben.";
		?>
								<section class="nachricht">
									<div class="container shadow">
										<div class="output-link round">
											<p><?php echo $err1; ?></p>
										</div>
									</div>
								</section>
		<?php
	}
}

// Textarea ausgeben
if(!isset($_POST['erstellen']) and !isset($_GET['id']) and !isset($_GET['pass'])){
?>
	
	<section class="nachricht">
		<div class="container shadow">
			<form class="round" method="post" action="" autocomplete="off">
				<textarea class="nachricht round" id="nachricht" name="nachricht" placeholder="<?php echo $placeholder; ?>" autocomplete="off" autocorrect="on" autofocus required></textarea>
				<div class="emoticons">
					<img src="/img/emoji/1f642.png" class="smiley" onclick="insert(':)');" />
					<img src="/img/emoji/1f609.png" class="smiley" onclick="insert(';)');" />
					<img src="/img/emoji/1f603.png" class="smiley" onclick="insert(':D');" />
					<img src="/img/emoji/1f61b.png" class="smiley" onclick="insert(':P');" />
					<img src="/img/emoji/1f618.png" class="smiley" onclick="insert(':*');" />
					<img src="/img/emoji/1f632.png" class="smiley" onclick="insert(':o');" />
					<img src="/img/emoji/1f910.png" class="smiley" onclick="insert(':x');" />
					<img src="/img/emoji/1f615.png" class="smiley" onclick="insert(':s');" />
					<img src="/img/emoji/1f911.png" class="smiley" onclick="insert('(rich)');" />
					<img src="/img/emoji/1f611.png" class="smiley" onclick="insert(':|');" />
					<img src="/img/emoji/1f641.png" class="smiley" onclick="insert(':(');" />
					<img src="/img/emoji/1f622.png" class="smiley" onclick="insert('(sad)');" />
					<img src="/img/emoji/1f549.png" class="smiley" onclick="insert('(aum)');" />
					<img src="/img/emoji/1f595-1f3fc.png" class="smiley" onclick="insert('(fuckyou)');" />
					<img src="/img/emoji/1f44d-1f3fb.png" class="smiley" onclick="insert('(y)');" />
					<img src="/img/emoji/1f44e-1f3fb.png" class="smiley" onclick="insert('(n)');" />
					<img src="/img/emoji/1f4a9.png" class="smiley" onclick="insert('(poop)');" />
				</div>
				<input name="passphrase" class="passphrase round" type="text" placeholder="Passwort (optional)" autocomplete="off" autocorrect="off" spellcheck="false" />
				<button type="submit" name="erstellen" class="button round">Nachricht erstellen</button>
			</form>
		</div>
		<?php include('pages/misc.adsense.php'); ?>
	</section>
<?php
}	
?>

	</div>
