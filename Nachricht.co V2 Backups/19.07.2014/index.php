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
	if(file_exists('contents/cont.'.$page.'.php'))
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

if($uri == '/rechtliches/')
	{
	$title = $title_datenschutz;
	$og_title = $og_title_datenschutz;
	$meta_desc = $meta_desc_datenschutz;
	}
elseif($uri == '/spenden/')
	{
	$title = $title_spenden;
	$og_title = $title_spenden;
	$meta_desc = $meta_desc_spenden;
	}
elseif($uri == '/kontakt/')
	{
	$title = $title_kontakt;
	$og_title = $title_kontakt;
	$meta_desc = $meta_desc_kontakt;
	}
elseif($uri == '/404/')
	{
	$title = $title_404;
	$og_title = $title_404;
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
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="HandheldFriendly" content="true" />
		<meta name="description" content="<? echo $meta_desc; ?>" />
		<meta name="keywords" content="<? echo $meta_keyw; ?>" />
		<meta property="og:title" content="<? echo $og_title; ?>" />
		<meta property="og:description" content="<? echo $meta_desc; ?>" />
		<meta property="og:site_name" content="<? echo $site_name; ?>"/>
		<meta property="og:url" content="<? echo $canonical; ?>" />
		<meta property="og:image" content="<? echo $og_img; ?>" />
		<meta name="webutation-site-verification" content="webutation8f2544e8c2d2354f473c00eed107c837" />
		<link rel="canonical" href="<? echo $canonical; ?>"/>
		<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
		<!--[if lte IE 8]><script src="/css/ie/html5shiv.js"></script><![endif]-->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/jquery.dropotron.min.js"></script>
		<script src="/js/skel.min.js"></script>
		<script src="/js/skel-layers.min.js"></script>
		<script src="/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="/css/skel.css" />
			<link rel="stylesheet" href="/css/style.css" />
			<link rel="stylesheet" href="/css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="/css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="/css/ie/v9.css" /><![endif]-->
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
	<?
	if(file_exists('contents/cont.'.$page.'.php'))
		{
		include('contents/cont.'.$page.'.php');
		}else{
		include('contents/cont.home.php');
		}
	?>

		<!-- CTA -->
			<section id="cta">
			
				<header>
					<h2>Nachricht.co braucht <strong>deine Hilfe</strong>!</h2>
					<p>Du möchtest dieses Projekt unterstützen und mir helfen dieses Projekt weiter zuführen?<br />
					</header>
				<footer>
					<ul class="buttons">
						<li><a href="/spenden/" class="button special">Jetzt helfen!</a></li>
						<li><a href="/kontakt/" class="button">Schreib mir!</a></li>
					</ul>
				</footer>
			
			</section>

		<!-- Footer -->
			<footer id="footer">
				
				<span class="copyright">&copy; Nachricht.co - Alle Rechte vorbehalten.</span>
			
			</footer>

	</body>
</html>