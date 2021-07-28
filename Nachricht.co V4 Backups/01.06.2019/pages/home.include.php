<?php
if(!isset($apage))
{
	exit();
}

$inform = false;
?>
	<div class="conintro">
<?php
include('../pages/misc.header.php');

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
                    <p><?= $textContents['copyText']; ?></p>
					<?php
					include('../pages/misc.adsense2.php');
					$inform = true;
					?>
                    <input id="copyLinkInput" type="text" class="link round" value="<?= $link; ?>" onClick="this.setSelectionRange(0, this.value.length)" autofoucs/>

                    <div class="sharelink-container">
                        <a class="sharelink button round" href="https://telegram.me/share/url?url=<?= $link; ?>">
                            <span class="sharetext">Telegram</span> <i class="fab fa-telegram-plane"></i>
                        </a>

                        <a class="sharelink button round" href="https://wa.me/?text=<?= $link; ?>">
                            <span class="sharetext">WhatsApp</span> <i class="fab fa-whatsapp"></i>
                        </a>

                        <a id="copyLinkTrigger" class="sharelink button round">
                            <span class="sharelink sharetext"><?= $textContents['copyLink']; ?></span> <i class="far fa-copy"></i>
                        </a>
                    </div>
                </div>

				<?php
				if($inform == false) {
					include('../pages/misc.adsense.php');
				}
				?>
            </div>
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
		<div class="container">
			<form class="round shadow" method="post" action="" autocomplete="off">
				<textarea class="nachricht round" id="nachricht" name="nachricht" placeholder="<?php echo $placeholder; ?>" autocomplete="off" autocorrect="on" autofocus required></textarea>
                <div id="emojiList" class="isHidden"></div>

                <div class="emojipw-container">
                    <input name="passphrase" class="passphrase round" type="text" placeholder="<?= $textContents['passwordPlaceholder']; ?>" autocomplete="off" autocorrect="off" spellcheck="false" />
                    <div id="emojiTrigger" class="round" title="<?= $textContents['showEmoticons']; ?>"><i class="far fa-grin-beam"></i> <span class="isHidden"><?= $textContents['showEmoticons']; ?></span></div>
                </div>

				<button type="submit" name="erstellen" class="button round"><?= $textContents['createButton']; ?></button>
			</form>

			<?php
			include('../pages/misc.adsense.php');
			?>
		</div>
	</section>
<?php
}	
?>
</div>
