<?
$uri = $_SERVER['REQUEST_URI'];
if($uri != '/kontakt/')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
<body class="contact loading">
	
		<!-- Header -->
			<header id="header">
				<? include('contents/inc.header.php'); ?>
			</header>
		
		<!-- Main -->
			<article id="main">

				<header class="special container">
					<span class="icon fa-envelope"></span>
					<h2>Schreib uns!</h2>
					<p>Du hast Fragen, Ideen oder einen Bug gefunden?<br />Schreib uns, wir sind für dich da!</p>
				</header>
					
				<!-- One -->
					<section class="wrapper style4 special container small">
					
						<!-- Content -->
							<div class="content">
							<p><strong>Das Kontaktformular ist derzeit außer Betrieb!</strong><br />Bitte schreibe uns eine E-Mail an info@nachricht.co</p>
							<?
							if(isset($_POST['abschicken']))
								{
								echo "<p><strong>Es ist ein Fehler aufgetreten!</strong></p>";
								}
							?>
								<form method="post" action="/kontakt/">
									<div class="row half no-collapse-1">
										<div class="6u">
											<input type="text" name="name" placeholder="Dein Name" />
										</div>
										<div class="6u">
											<input type="text" name="email" placeholder="Deine E-Mail" />
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<input type="text" name="subject" placeholder="Worum geht es?" />
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<textarea name="message" placeholder="Hier kommt deine Frage, Idee oder Meldung rein ..." rows="7"></textarea>
										</div>
									</div>
									<div class="row">
										<div class="12u">
											<ul class="buttons">
												<li><input type="submit" name="abschicken" href="#" class="button special" value="Abschicken"></li>
											</ul>
										</div>
									</div>
								</form>
							</div>
							
					</section>
				
			</article>