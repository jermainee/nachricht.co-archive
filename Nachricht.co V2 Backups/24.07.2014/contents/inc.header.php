<?
$uri = $_SERVER['REQUEST_URI'];
if($uri == '/contents/inc.header.php')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
<h1 id="logo"><a href="<? echo $protocol.$_SERVER["HTTP_HOST"]; ?>"><? echo $site_name; ?> <!--<span><? echo $slogan; ?></span>--></a></h1>
<nav id="nav">
					<ul>
						<li class="submenu">
							<a href="">Navigation</a>
							<ul>
								<li><a href="<? echo $nav1_url; ?>" title="<? echo $nav1; ?>"><? echo $nav1; ?></a></li>
								<li><a href="<? echo $nav2_url; ?>" title="<? echo $nav2; ?>"><? echo $nav2; ?></a></li>
								<li><a href="<? echo $nav3_url; ?>" title="<? echo $nav3; ?>"><? echo $nav3; ?></a></li>
							</ul>
						</li>
						<li><a href="/unterstuetzen/" class="button special">Unterstützen</a></li>
					</ul>
				</nav>