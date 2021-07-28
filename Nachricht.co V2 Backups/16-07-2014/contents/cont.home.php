<?
$uri = $_SERVER['REQUEST_URI'];
if($uri !== '/' AND $uri !== '/home/')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
<body class="index loading">
	
		<!-- Header -->
			<header id="header" class="alt">
				<? include('contents/inc.header.php'); ?>
			</header>

		<!-- Banner -->		
			<section id="banner">
				<div class="inner">
					<?
						if(isset($_POST['erstellen']))
							{
							require_once('includes/inc.mysql.php');
							include('includes/inc.encryption.php');
							$null = "";
    						$eintrag = "INSERT INTO nachrichten (id, erstellt, empfangen, nachricht) VALUES ('$id', NOW(), '$null', '$encrypted')" or die ();
							if(empty($nachricht))
								{
								?>
								<div class="error"><p><? echo $err1; ?></p></div>
								<?
								}else{
									$eintragen = mysql_query($eintrag);
									if($eintragen == true)
										{
										echo $text1;
										$link = 'https://nachricht.co/'.$id.'_'.$passwort;
										echo '<input type="text" style="border: 1px solid #fff; width: 100%; margin-top: 20px;" class="link" value="'.$link.'">';
										mysql_query("UPDATE counter SET nachrichten= nachrichten +1 WHERE cid= 'counter'");
										}else{
								?>
								<div class="error"><? echo $err2; ?></div>
								<?
										}
								}
								}else{
					?>
					<form name="form1" method="post" action="/" >
					<textarea name="nachricht" style="border: 1px solid #fff; width: 100%; min-height: 200px; margin-bottom: 20px;" placeholder="<? echo $placeholder; ?>"></textarea>
						<ul class="buttons vertical">
							<li><input type="submit" name="erstellen" class="button fit scrolly" value="<? echo $btn; ?>" style="width: 248px" /></li>
						</ul>
					</form>
					<?
						}
					?>				
				</div>
				
			</section>
		
		<!-- Main -->
			<article id="main">
					<section class="wrapper style1 container special">
								<header>
									<h2>Und so verschickst du eine Nachricht:</h2>
								</header>
						<div class="row">
								
							<div class="4u">
							
								<section>
									<header>
										<h3>1. Nachricht erstellen</h3>
									</header>
									<p>Schreibe eine Nachricht und klicke auf "Nachricht erstellen"-Button.</p>
								</section>
							
							</div>
							<div class="4u">
							
								<section>
									<header>
										<h3>2. Link verschicken</h3>
									</header>
									<p>Nun wird ein Link angezeigt. Kopiere ihn und schicke ihn dem Empfänger zu.</p>
								</section>
							
							</div>
							<div class="4u">
							
								<section>
									<header>
										<h3>3. Nachricht lesen</h3>
									</header>
									<p>Die Nachricht wird sich nach dem ersten Öffnen selbstzerstören.</p>
								</section>
							
							</div>
						</div>
					</section>
					
				<!-- Three -->
					<section class="wrapper style3 container special">
					
						<header class="major">
							<h2>Gemacht für mehr <strong>Sicherheit</strong></h2>
						</header>
						
						<div class="row">
							<div class="6u">
							
								<section>
									<a href="#" class="image feature"><img src="images/pic01.jpg" alt="" /></a>
									<header>
										<h3>Löschung der Nachrichten</h3>
									</header>
									<p>Nach dem ersten Öffnen einer Nachricht wird sie aus unserer Datenbank gelöscht und kann nicht wiederhergestellt werden.</p>
								</section>

							</div>
							<div class="6u">
							
								<section>
									<a href="#" class="image feature"><img src="images/pic02.jpg" alt="" /></a>
									<header>
										<h3>Verschlüsselte Nachrichten</h3>
									</header>
									<p>Alle Nachrichten liegen verschlüsselt in unserer Datenbank und können nicht ohne passenden Link entschlüsselt werden, da dieser ein zufällig generiertes Passwort enthält.</p>
								</section>

							</div>
						</div>
						<div class="row">
							<div class="6u">
							
								<section>
									<a href="#" class="image feature"><img src="images/pic03.jpg" alt="" /></a><header>
									<h3>Anonymität</h3>
									</header>
									<p>Du kannst Nachricht.co völlig ohne Angaben zu deiner Person benutzen. Wir speichern keine personenbezogenen Daten von dir, in Zusammenhang mit einer Nachricht.</p>
								
									</section>

							</div>
							<div class="6u">
							
								<section>
									<a href="#" class="image feature"><img src="images/pic04.jpg" alt="" /></a>
									<header>
										<h3>Smileys und Hyperlinks</h3>
									</header>
									<p>In den Nachrichten werden automatisch Smileys wie z.B. ":D" oder ":)" erkannt und in eine Grafik umgewandelt. URLs werden außerdem automatisch in einen klickbaren Link umgewandelt.</p>
								</section>

							</div>
						</div>
					
					</section>
					
			</article>