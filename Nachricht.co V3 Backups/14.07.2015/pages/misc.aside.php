<?
$uri = $_SERVER['REQUEST_URI'];
if($uri == '/pages/misc.aside.php')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
		<aside class="sidebar right">
			<h3>Partner</h3>
			<a href="http://pascal-hoffmann.de/" target="_blank" title="IT Solutions - Pascal Hoffmann"><img src="img/partner/ph-solutions.png" class="round" alt="IT Solutions - Pascal Hoffmann" /></a>
			<a href="http://www.taiber-unternehmensberatung.de/" target="_blank" title="Consulting - SEO Agentur - Unternehmensberatung, Suchmaschinenoptimierung Regensburg"><img src="img/partner/roger-taiber-seo.png" class="round" alt="Consulting - SEO Agentur - Unternehmensberatung, Suchmaschinenoptimierung Regensburg"></a>
			<a href="http://imagely.eu/" target="_blank" title="IMAGELY.eu"><img src="img/partner/imagely-eu.png" class="round" alt="IMAGELY.eu" /></a>
		</aside>