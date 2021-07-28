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
									<p><strong>Scheinbar möchte der Server heute nicht so...</strong><br />Kontaktiere mich doch einfach und berichte mir von diesem Problem!</p>
									<footer>
										<ul class="buttons">
											<li><a href="/kontakt/" class="button small">Fehler melden</a></li>
										</ul>
									</footer>
								</section>
								<section style="margin-top: 30px; max-width: 750px;">
											<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
											<!-- Nachricht.co -->
											<ins class="adsbygoogle"
     											style="display:block"
     											data-ad-client="ca-pub-0237366692215510"
     											data-ad-slot="2952897654"
     											data-ad-format="auto"></ins>
											<script>
											(adsbygoogle = window.adsbygoogle || []).push({});
											</script>
										</section>
							</div>
							
					</section>
				
			</article>