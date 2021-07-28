<? 
include('include/inc.content.php');
$page = $_GET['a'];
$uri = $_SERVER['REQUEST_URI'];
if($uri == '/read.html' OR $uri == '/new.html' OR $uri == '/index.php')
	{
	header('location: http://nachricht.co');
	exit();
	}
if($uri == '/datenschutz.html')
	{
	$meta_desc = $meta_desc_datenschutz;
	}else{
	$meta_desc = $meta_desc_global;
	}
?>
<html lang="de">
<head>
<title><? echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no" />
<meta name="description" content="<? echo $meta_desc; ?>" />
<?
if($uri == '/index.php' OR $uri == '/' OR $uri == '/new.html')
	{
?>
<meta name="keywords" content="<? echo $meta_keyw; ?>" />
<meta property="og:image" content="<? echo $og_img; ?>">
<meta property="og:url" content="<? echo $og_url; ?>">
<meta property="og:title" content="<? echo $title; ?>">
<?
	}
?>
<meta property="og:description" content="<? echo $meta_desc; ?>">
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
<div id="header">
	<a href="https://nachricht.co/"><h1>nachricht.co</h1></a>
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
		if (file_exists('contents/'.$page.'.nco.php'))
		{
		include('contents/'.$page.'.nco.php');
		}else{
		include('contents/new.nco.php');
		}
	?>
	
	<!--<div id="info" class="shadow"></div>--!>
	<div id="footer">
		SSL Verbindung (COMODO) &middot; Verschlüsselte Nachrichten (<a href="http://de.wikipedia.org/wiki/Advanced_Encryption_Standard" rel="nofollow" target="_blank">AES-256</a>) &middot; <a href="/datenschutz.html">Datenschutzerklärung</a></div>
	</div>
</div>
</body>
</html>