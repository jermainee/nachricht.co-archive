<?
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
		header('location: http://nachricht.co/404/');
		}
	}

if($uri == '/index.php')
	{
	header('location: /');
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
		<meta name="HandheldFriendly" content="true" />
		<meta name="description" content="<? echo $meta_desc; ?>" />
		<meta name="keywords" content="<? echo $meta_keyw; ?>" />
		<meta property="og:title" content="<? echo $og_title; ?>" />
		<meta property="og:description" content="<? echo $meta_desc; ?>" />
		<meta property="og:site_name" content="<? echo $site_name; ?>"/>
		<meta property="og:url" content="<? echo $canonical; ?>" />
		<meta property="og:image" content="<? echo $og_img; ?>" />
		<meta name="webutation-site-verification" content="webutation8f2544e8c2d2354f473c00eed107c837" />
		<link type="text/css" rel="stylesheet" media="screen" href="/css/style.css" />
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
		
	</head>
	
	<div class="notification green">Nachricht.co benötigt deine Hilfe! <a href="https://nachricht.co/unterstuetzen/">Mehr erfahren ...</a></div>
	
	<?
	if(file_exists('pages/cont.'.$page.'.php'))
		{
		include('pages/cont.'.$page.'.php');
		}else{
		include('pages/cont.home.php');
		}
	?>
	
	<section class="conintro" style="margin-top: 20px; padding: 20px 0px 20px 0px;">
	<div class="container">
		<section class="content">
			<section class="bigbox round">
				<h3 style="margin-top: 0px;">Schritt 1: Nachricht erstellen</h3>
				<p>Tippe die gewünschte Nachricht oben auf der Seite ein und klicke auf den "Nachricht erstellen"-Button.</p>
			
				<h3>Schritt 2: Link verschicken</h3>
				<p>Kopiere den Link, welcher dir nun angezeigt wird und schicke ihn dem Gesprächspartner, welcher die Nachricht empfangen soll.</p>
								
				<h3>Schritt 3: Nachricht lesen</h3>
				<p>Nun klickt dein Gesprächspartner auf den Link und kann die Nachricht lesen. Die Nachricht wird automatisch beim Öffnen gelöscht.</p>
			</section>
		</section>
	</div>
	</section>
	
	<footer class="footer">
		<div class="container">
			<div class="logo left"></div>
			<nav class="right">
				<a href="mailto:info@nachricht.co">info@nachricht.co</a>
				<a href="/datenschutz/">Datenschutz</a>
				<a href="/impressum/">Impressum</a>
			</nav>
			<div class="clear"></div>
		</div>
	</footer>

	</body>
</html>