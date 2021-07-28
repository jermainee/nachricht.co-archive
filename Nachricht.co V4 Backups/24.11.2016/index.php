<?php
require('includes/functions.php');
require('includes/contents.php');
require_once('includes/config.php');
$pageinfo = pageswitch($page,$path);
$apage = $pageinfo[0];
$title = $pageinfo[1];
$og_title = $pageinfo[2];
$meta_desc = $pageinfo[3];

if($apage == "n")
{
	include('pages/n.function.php');
	include('includes/botgate.php'); //UserAgent ausschließen
}

//Cachen von Nachrichten verhindern
if($apage == "n" OR $apage == "passphrase" OR isset($_POST['erstellen']))
{
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
}
?>
<!doctype html>
<html lang="de">
	<head>
		<title><?php echo $title; ?></title>
		<base href="<?php echo $protocol.$_SERVER["HTTP_HOST"]; ?>" /> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="<?php echo $meta_desc; ?>" />
		<meta name="keywords" content="<?php echo $meta_keyw; ?>" />
		<meta property="og:title" content="<?php echo $og_title; ?>" />
		<meta property="og:description" content="<?php echo $meta_desc; ?>" />
		<meta property="og:site_name" content="<?php echo $site_name; ?>"/>
		<meta property="og:url" content="<?php echo $canonical; ?>" />
		<meta property="og:image" content="<?php echo $og_img; ?>" />
		<meta name="webutation-site-verification" content="webutation8f2544e8c2d2354f473c00eed107c837" />
		<link type="text/css" rel="stylesheet" media="screen" href="/css/xstyle.css" />
		<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
		
		<script async type="text/javascript">
			function insert(str) {
   			var TextArea = document.getElementById('nachricht');
   			var val = TextArea.value;
   			var before = val.substring(0, TextArea.selectionStart);
   			var after = val.substring(TextArea.selectionEnd, val.length);
  			TextArea.value = before + str + after;
			}
		</script>
				
		<script type="text/javascript">// < ![CDATA[
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-39078917-4']);
		_gaq.push(['_gat._anonymizeIp']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		// ]]>
		</script>
		
		<script type="application/ld+json">
		{
 		"@context" : "http://schema.org",
		"@type" : "Website",
		"name" : "Nachricht.co",
		"url" : "https://nachricht.co",
		"sameAs" : [
		    "https://twitter.com/nachrichtco",
		    "https://www.facebook.com/nachricht.co"
 		]
		}
		</script> 

	<script>
            window.cookieconsent_options = {
                learnMore: 'More info',
                link: 'https://nachricht.co/datenschutz/'
            };
        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>

	</head>
	<body>
	<div class="notification shadow"><?php echo $notify; ?> <a href="/unterstuetzen/" class="round">Jetzt unterstützen!</a></div>

	<?php
		if($apage == "home")
		{
			include('pages/home.include.php');
		}
		include($path.$apage.".php");
	?>
	
	<section class="conintro spacee">
	<div class="container">
		<section class="content">
			<section class="bigbox howto round shadow">
				<h3 class="first">Schritt 1: Nachricht erstellen</h3>
				<p>Tippe die gewünschte Nachricht in das Textfeld oben auf der Seite ein und klicke auf 'Nachricht erstellen'.</p>
			
				<h3>Schritt 2: Link verschicken</h3>
				<p>Kopiere den Link, der dir daraufhin angezeigt wird und verschicke ihn an den gewünschten Gesprächspartner - z.B. via Facebook oder WhatsApp.</p>
								
				<h3>Schritt 3: Nachricht lesen</h3>
				<p class="last">Nun klickt der Gesprächspartner auf den Link und kann die Nachricht ein einziges Mal lesen, da diese sich daraufhin selbst zerstört.</p>
			</section>
		</section>
	</div>
	
	
	<footer class="footer">
		<div class="container">
			<nav class="footer">
				<ul>
					<li class="round"><a href="/unterstuetzen/" title="<? echo $title_spenden; ?>">Unterstützen</a></li>
					<li class="round"><a href="/faq/" title="<? echo $title_faq; ?>">Häufig gestellte Fragen</a></li>
					<li class="round"><a href="/datenschutz/" title="<? echo $title_datenschutz; ?>">Datenschutz</a></li>
					<li class="round"><a href="/impressum/" title="<? echo $title_impressum; ?>">Impressum</a></li>
				</ul>
			</nav>
			<div class="copyright">2014 - <?php echo date('Y'); ?> &copy;  <a href="https://nachricht.co/" title="Nachricht.co">Nachricht.co</a> &middot; Alle Rechte vorbehalten.</div>
			<div class="clear"></div>
		</div>
	</footer>
	</section>
	</body>
</html>
