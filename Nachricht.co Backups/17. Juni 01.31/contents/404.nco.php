<?
$uri = $_SERVER['REQUEST_URI'];
if($uri != '/404.html')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
<div id="content">
	<div class="error"><h3>404</h3> Diese Seite existiert lieder nicht! :o</div>
</div>
