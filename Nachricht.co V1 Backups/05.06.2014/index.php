<? 
include('include/inc.content.php');
$page = $_GET['a'];
$uri = $_SERVER['REQUEST_URI'];
if($uri == '/read.html' OR $uri == '/index.php')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
<html lang="de">
<head>
<title>Nachricht.co - Die selbstzerstörende Nachricht per Link</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no" />
<meta name="keywords" content="self destructing, self-destructing, message, messages, privnote, telegram, telegramm, self-destruct, self destruct, note, anonym, anonyme, anonymous, encrypted message, safe, sichere nachricht, privat, private nachricht, nachricht, selbst zerstörende, selbstzerstörende nachricht, selbstzerstörender link, link" />
<meta name="description" content="Versende vertrauliche Nachrichten über einen Link, welcher sich selbst zerstört, nachdem der beabsichtigte Empfänger sie gelesen hat." />
<meta property="og:image" content="https://nachricht.co/img/nachricht.co.png">
<meta property="og:description" content="Versende vertrauliche Nachrichten über einen Link, welcher sich selbst zerstört, nachdem der beabsichtigte Empfänger sie gelesen hat.">
<meta property="og:url" content="https://nachricht.co">
<meta property="og:title" content="Nachricht.co - Die selbstzerstörende Nachricht per Link">
<link rel="stylesheet" type="text/css" media="all" href="/style.css" />
<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
<script type="text/javascript">
<!--
function insert(tag) {
document.new.nachricht.value += tag+"";
document.new.nachricht.focus();
}
//-->
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
<div id="wrapper">
	<div id="slogan"><h2>Die selbstzerstörende Nachricht, welche du als Link verschicken kannst!</h2></div>
	<?
		if (file_exists('contents/'.$page.'.nco.php'))
		{
		include('contents/'.$page.'.nco.php');
		}else{
		include('contents/new.nco.php');
		}
	?>
	
	<!--<div id="info" class="shadow"></div>--!>
	<div id="footer">SSL Verbindung (COMODO) &middot; Verschlüsselte Nachrichten (AES-256) &middot; <a href="mailto:Nachricht.co <info@nachricht.co>" rel="nofollow">info@nachricht.co</a></div>
</div>
</body>
</html>