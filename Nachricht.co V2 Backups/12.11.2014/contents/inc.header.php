<?
$uri = $_SERVER['REQUEST_URI'];
if($uri == '/contents/inc.header.php')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
<a href="<? echo $protocol.$_SERVER["HTTP_HOST"]; ?>"><div id="logo" class="content"><h1><? echo $site_name; ?></h1></div></a>

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