<?
$uri = $_SERVER['REQUEST_URI'];
if($uri == '/contents/cont.404.php')
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
					
				<!-- One -->
					<section class="wrapper style4 special container small">
					
						<!-- Content -->
							<div class="content">
								<section>
									<header>
										<h3>404 <br />Hey, was suchst du?</h3>
									</header>
									<p><strong>Diese Seite wurde leider nicht gefunden.</strong><br />Kontaktiere uns falls es ein Problem geben sollte!</p>
									<footer>
										<ul class="buttons">
											<li><a href="/kontakt/" class="button small">Fehler melden</a></li>
										</ul>
									</footer>
								</section>
							</div>
							
					</section>
				
			</article>