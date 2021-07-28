<? 
include('include/inc.content.php');
$page = $_GET['a'];
$uri = $_SERVER['REQUEST_URI'];
if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
	{
	$protocol = 'https://';
	}else{
	$protocol = 'http://';
	}
$canonical = $protocol.$_SERVER["HTTP_HOST"] .$uri;
if($uri != '/')
	{
	if(file_exists('contents/'.$page.'.nco.php'))
		{
		// Nichts
		}else{
		header('location: http://nachricht.co/404.html');
		}
	}
if($uri == '/read.html' OR $uri == '/new.html' OR $uri == '/index.php')
	{
	header('location: http://nachricht.co');
	exit();
	}
if($uri == '/datenschutz.html')
	{
	$title = $title_datenschutz;
	$og_title = $og_title_datenschutz;
	$meta_desc = $meta_desc_datenschutz;
	}else{
	$title = $title_global;
	$og_title = $title_global;
	$meta_desc = $meta_desc_global;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html lang="de">
<head>
<title><? echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no" />
<meta name="description" content="<? echo $meta_desc; ?>" />
<?
if($uri == '/index.php' OR $uri == '/' OR $uri == '/new.html' OR $uri == '/datenschutz.html')
	{
?>
<meta name="keywords" content="<? echo $meta_keyw; ?>" />
<meta property="og:title" content="<? echo $og_title; ?>" />
<meta property="og:description" content="<? echo $meta_desc; ?>" />
<?
	}
?>
<meta property="og:site_name" content="<? echo $site_name; ?>"/>
<meta property="og:url" content="<? echo $canonical; ?>" />
<meta property="og:image" content="<? echo $og_img; ?>" />
<meta name="webutation-site-verification" content="webutation8f2544e8c2d2354f473c00eed107c837" />
<meta name="google-translate-customization" content="9a246bc4bcb03431-7f1324674cb5acc0-g8719a12668614484-c" />
<link rel="canonical" href="<? echo $canonical; ?>"/>
<link rel="stylesheet" type="text/css" media="all" href="/style.css" />
<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
<script type="text/javascript">
function insert(tag) {
document.new.nachricht.value += tag+"";
document.new.nachricht.focus();
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
</head>
<body>
<div id="header" class="shadow">
	<div class="left"><a href="https://nachricht.co/"><h1>nachricht.co</h1></a></div>
	<div class="right">
		<div id="google_translate_element"></div>
			<script type="text/javascript">
				function googleTranslateElementInit() {
  					new google.translate.TranslateElement({pageLanguage: 'de', includedLanguages: 'ar,bg,bs,da,de,en,fr,hr,it,nl,no,pl,ro,ru,sq,sr,sv,tr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true, gaTrack: true, gaId: 'UA-39078917-4'}, 'google_translate_element');
					}
			</script>
			<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	</div>
	<div class="clear"></div>
</div>
<? if($notification == "true")
	{
?>
<div class="notification" style="background: <? echo $notification_bg; ?>; color: <? echo $notification_color; ?>;">
	<? echo $notification_text; ?>
</div>
<?
	}
?>
<div id="wrapper">
	<div id="slogan"><h2><? echo $slogan; ?></h2></div>
	<?
	if(file_exists('contents/'.$page.'.nco.php'))
		{
		include('contents/'.$page.'.nco.php');
		}else{
		include('contents/new.nco.php');
		}
	?>
	<div id="footer">
		SSL Verbindung (COMODO) &middot; Verschlüsselte Nachrichten (<a href="http://de.wikipedia.org/wiki/Advanced_Encryption_Standard" rel="nofollow" target="_blank">AES-256</a>)  &middot; <a href="/datenschutz.html">Datenschutzerklärung</a></div>
	</div>
</div>
</body>
</html>