<?
$uri = $_SERVER['REQUEST_URI'];
header("HTTP/1.0 500 Internal Server Error");
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
									<p><strong>Scheinbar möchte der Server heute nicht so...</strong><br /> Kontaktiere mich doch einfach und berichte mir von diesem Problem!</p>
									<footer>
										<ul class="buttons">
											<li><a href="/kontakt/" class="button small">Fehler melden</a></li>
										</ul>
									</footer>
								</section>
							</div>
							
					</section>
				
			</article>