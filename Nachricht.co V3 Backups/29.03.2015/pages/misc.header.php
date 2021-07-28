<?
$uri = $_SERVER['REQUEST_URI'];
if($uri == '/pages/misc.header.php')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
		<header class="header">
			<div class="bcontainer">
				<a href="https://nachricht.co/" class="logo left"><h1>Nachricht.co</h1><h2>Die verschlüsselte Einweg-Nachricht</h2></a>
				<nav class="right">
        	    	<a href="https://nachricht.co/unterstuetzen/" class="button round" title="<? echo $title_spenden; ?>">Unterstützen</a>
				</nav>
				<div class="clear"></div>
			</div>
		</header>