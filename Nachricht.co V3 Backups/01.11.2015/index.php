<? 
date_default_timezone_set("Europe/Berlin");
$timestampr = date("Y-m-d H:i:s");
header('Content-type: text/html; charset=utf-8');
include('includes/inc.content.php');
$page = $_GET['a'];
$uri = $_SERVER['REQUEST_URI'];
if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
	{
	$protocol = 'https://';
	}else{
	$protocol = 'http://';
	}
$canonical = $protocol.$_SERVER["HTTP_HOST"].$uri;

if($uri != '/')
	{
	if(file_exists('pages/cont.'.$page.'.php'))
		{
		// Nichts
		}else{
		header('location: http://nachricht.co/');
		}
	}

if($uri == '/index.php')
	{
	header('location: /');
	}
	
$verify = strpos($uri, 'nachricht/');
if($verify == true)
	{
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache"); // HTTP/1.0
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	}

if($uri == '/datenschutz/')
	{
	$title = $title_datenschutz;
	$og_title = $og_title_datenschutz;
	$meta_desc = $meta_desc_datenschutz;
	}
elseif($uri == '/unterstuetzen/')
	{
	$title = $title_spenden;
	$og_title = $og_title_spenden;
	$meta_desc = $meta_desc_spenden;
	}
elseif($uri == '/faq/')
	{
	$title = $title_faq;
	$og_title = $og_title_faq;
	$meta_desc = $meta_desc_faq;
	}
elseif($uri == '/impressum/')
	{
	$title = $title_impressum;
	$og_title = $og_title_impressum;
	$meta_desc = $meta_desc_impressum;
	}
elseif($uri == '/404/')
	{
	$title = $title_404;
	$og_title = $og_title_404;
	$meta_desc = $meta_desc_404;
	}
else
	{
	$title = $title_global;
	$og_title = $title_global;
	$meta_desc = $meta_desc_global;
	}
?>

<!DOCTYPE HTML>
<html lang="de">
	<head>
		<title><? echo $title; ?></title>
		<base href="<? echo $protocol.$_SERVER["HTTP_HOST"]; ?>" /> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="<? echo $meta_desc; ?>" />
		<meta name="keywords" content="<? echo $meta_keyw; ?>" />
		<meta property="og:title" content="<? echo $og_title; ?>" />
		<meta property="og:description" content="<? echo $meta_desc; ?>" />
		<meta property="og:site_name" content="<? echo $site_name; ?>"/>
		<meta property="og:url" content="<? echo $canonical; ?>" />
		<meta property="og:image" content="<? echo $og_img; ?>" />
		<meta name="webutation-site-verification" content="webutation8f2544e8c2d2354f473c00eed107c837" />
		<link type="text/css" rel="stylesheet" media="screen" href="/css/style.css" />
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
				
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
		
		<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
		<script type="text/javascript">
    		window.cookieconsent_options = {"message":"Durch Verwendung dieser Webseite erkl??rst du dich damit einverstanden, dass Nachricht.co Cookies verwendet, um die Funktionalit??t und Leistung der Seite zu verbessern und dir Werbung f??r andere Webseiten anzuzeigen.","dismiss":"OK","learnMore":"Mehr erfahren","link":null,"theme":"dark-floating"};
		</script>

		<script async type="text/javascript" src="//s3.amazonaws.com/cc.silktide.com/cookieconsent.latest.min.js"></script>
		<!-- End Cookie Consent plugin -->

	</head>
	
	<div class="notification"><? echo $notify; ?> <a href="https://nachricht.co/unterstuetzen/">Jetzt unterst??tzen!</a></div>
	
	<?
	if(file_exists('pages/cont.'.$page.'.php'))
		{
		include('pages/cont.'.$page.'.php');
		}else{
		include('pages/cont.home.php');
		}
	?>
	
	<section class="conintro spacee">
	<div class="container">
		<section class="content">
			<section class="bigbox round shadow">
				<h3 class="first">Schritt 1: Nachricht erstellen</h3>
				<p>Tippe die gew??nschte Nachricht oben auf der Seite ein und klicke auf den "Nachricht erstellen"-Button.</p>
			
				<h3>Schritt 2: Link verschicken</h3>
				<p>Kopiere den Link, welcher dir nun angezeigt wird und schicke ihn dem Gespr??chspartner, welcher die Nachricht empfangen soll.</p>
								
				<h3>Schritt 3: Nachricht lesen</h3>
				<p class="last">Nun klickt dein Gespr??chspartner auf den Link und kann die Nachricht lesen. Die Nachricht wird automatisch beim ??ffnen gel??scht.</p>
			</section>
		</section>
	</div>
	</section>
	
	<footer class="footer">
		<div class="container">
			<div class="logo left"></div>
			<nav class="right">
				<a href="/unterstuetzen/" title="<? echo $title_spenden; ?>">Unterst??tzen</a>
				<a href="/faq/" title="<? echo $title_faq; ?>">FAQ</a>
				<a href="/datenschutz/" title="<? echo $title_datenschutz; ?>">Datenschutz</a>
				<a href="/impressum/" title="<? echo $title_impressum; ?>">Impressum</a>
			</nav>
			<div class="clear"></div>
		</div>
	</footer>
	</body>
</html>