<?
$uri = $_SERVER['REQUEST_URI'];
if($uri == '/pages/misc.aside.php')
	{
	header('location: http://nachricht.co');
	exit();
	}
?>
		<aside class="sidebar right">
			<section class="twitter">
			   	<a class="twitter-timeline"  href="https://twitter.com/JermaineErnst" data-widget-id="547392987240886272">Tweets von @JermaineErnst </a>
            	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          	</section>
          	
			<h3>Partner</h3>
			<a href="http://pascal-hoffmann.de/" target="_blank" title="IT Solutions - Pascal Hoffmann"><img src="img/partner/ph-solutions.png" class="round" alt="sf" /></a>
			<a href="http://www.taiber-unternehmensberatung.de/" target="_blank" title="Consulting - SEO Agentur - Unternehmensberatung, Suchmaschinenoptimierung Regensburg"><img src="img/partner/roger-taiber-seo.png" class="round" alt="sf"></a>
			<a href="http://imagely.eu/" target="_blank" title="IMAGELY.eu"><img src="img/partner/imagely-eu.png" class="round" alt="sf" /></a>
		</aside>