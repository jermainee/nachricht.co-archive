<?
$uri = $_SERVER['REQUEST_URI'];
header("HTTP/1.0 404 Not Found");
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
										<h3>404 <br />Hey, was suchst du? </h3>
									</header>
									<p><strong>Diese Seite wurde leider nicht gefunden.</strong><br /> Kontaktiere mich falls es ein Problem geben sollte!</p>
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