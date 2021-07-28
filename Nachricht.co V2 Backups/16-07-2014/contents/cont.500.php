<?
$uri = $_SERVER['REQUEST_URI'];
if($uri == '/contents/cont.500.php')
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
										<h3>500 <br />Da ist was schief gelaufen!</h3>
									</header>
									<p><strong>Scheinbar möchte unser Server heute nicht so...</strong><br />Kontaktiere uns doch einfach und berichte uns von diesem Problem!</p>
									<footer>
										<ul class="buttons">
											<li><a href="/kontakt/" class="button small">Fehler melden</a></li>
										</ul>
									</footer>
								</section>
							</div>
							
					</section>
				
			</article>