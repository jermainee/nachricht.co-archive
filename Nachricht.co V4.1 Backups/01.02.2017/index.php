<?php
require('includes/functions.php');
require('includes/contents.php');
require_once('includes/config.php');
$pageinfo = pageswitch($page,$path);
$apage = $pageinfo[0];
$title = $pageinfo[1];
$og_title = $pageinfo[2];
$meta_desc = $pageinfo[3];

if($apage == "n")
{
	include('pages/n.function.php');
	include('includes/botgate.php'); //UserAgent ausschließen
}

//Cachen von Nachrichten verhindern
if($apage == "n" OR $apage == "passphrase" OR isset($_POST['erstellen']))
{
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
}
?>

<?php $antiblock_short_urls = array('http://goo.gl/kOWD3','http://goo.gl/VDJNS','http://goo.gl/akMnY','http://bit.ly/jzgtlK','http://bit.ly/13EvOff'); ?>
<?php $antiblock_message = str_replace("\r\n", "\n", 'Um Nachricht.co am Leben zu halten müssen wir monatlich Geld in u.A. Servermiete und Domain investieren.
Desweiteren stecken wir unser Herzblut, in Form von Programmierung und Support, in dieses Projekt.
Wenn du uns und Nachricht.co unterstützen möchtest, dann deaktiviere bitte deinen AdBlocker auf unserer Seite! :) '); ?>
<?php $antiblock_layer_id = chr(98 + mt_rand(0,24)) . substr(md5(time()), 0, 3); ?><?php $antiblock_html_elements = array (  0 => 'div',  1 => 'span',  2 => 'b',  3 => 'i',  4 => 'font',  5 => 'strong',  6 => 'center',); $antiblock_html_element = $antiblock_html_elements[array_rand($antiblock_html_elements)]; ?>
<style>#<?php echo $antiblock_layer_id; ?>{position:fixed !important;position:absolute;top:<?php echo mt_rand(-3, 3); ?>px;top:expression((t=document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop)+"px");left:<?php echo mt_rand(-3, 3); ?>px;width:<?php echo mt_rand(98, 103); ?>%;height:<?php echo mt_rand(98, 103); ?>%;background-color:rgba(255,255,255,0.35);display:block;padding:20% 0}#<?php echo $antiblock_layer_id; ?> *{text-align:center;margin:0 auto;display:block;filter:none;font:bold 14px Verdana,Arial,sans-serif;text-decoration:none}#<?php echo $antiblock_layer_id; ?> ~ *{display:none}</style><div id="<?php echo $antiblock_layer_id; ?>"><<?php echo $antiblock_html_element; ?>>Please enable / Bitte aktiviere JavaScript!<br>Veuillez activer / Por favor activa el Javascript!<a href="<?php echo $antiblock_short_urls[ array_rand($antiblock_short_urls) ]; ?>">[ ? ]</a></<?php echo $antiblock_html_element; ?>></div><script>window.document.getElementById("<?php echo $antiblock_layer_id; ?>").parentNode.removeChild(window.document.getElementById("<?php echo $antiblock_layer_id; ?>"));(function(f,k){function g(a){a&&<?php echo $antiblock_layer_id; ?>.nextFunction()}var h=f.document,l=["i","u"];g.prototype={rand:function(a){return Math.floor(Math.random()*a)},getElementBy:function(a,b){return a?h.getElementById(a):h.getElementsByTagName(b)},getStyle:function(a){var b=h.defaultView;return b&&b.getComputedStyle?b.getComputedStyle(a,null):a.currentStyle},deferExecution:function(a){setTimeout(a,2E3)},insert:function(a,b){var d=h.createElement("<?php echo $antiblock_html_element; ?>"),e=h.body,c=e.childNodes.length,m=e.style,f=0,g=0;if("<?php echo $antiblock_layer_id; ?>"==b){d.setAttribute("id",b);m.margin=m.padding=0;m.height="100%";for(c=this.rand(c);f<c;f++)1==e.childNodes[f].nodeType&&(g=Math.max(g,parseFloat(this.getStyle(e.childNodes[f]).zIndex)||0));g&&(d.style.zIndex=g+1);c++}d.innerHTML=a;e.insertBefore(d,e.childNodes[c-1])},r:function(a){var b=h.body.style;this.getElementBy(a).parentNode.removeChild(this.getElementBy(a));b.height=b.margin=b.padding=""},displayMessage:function(a){a="abisuq".charAt(this.rand(5));var b,d='<input type="button" style="margin-top: 20px;" onclick="<?php echo $antiblock_layer_id; ?>.r(\'<?php echo $antiblock_layer_id; ?>\')" value=30 disabled></'+a+">";this.insert("<"+a+'><img src="https://nachricht.co/img/logo/logo-color.png" style="margin-bottom: 20px;"><?php echo str_replace(array("\n", "'"), array('<br>', "'"), $antiblock_message); ?>'+d,"<?php echo $antiblock_layer_id; ?>");d=this.getElementBy("<?php echo $antiblock_layer_id; ?>").firstChild.lastChild;b=setInterval(function(){d.value--;1>d.value&&(clearInterval(b),d.value="Nicht unterstützen :-(",d.disabled="")},1E3)},i:function(){for(var a="<?php echo implode(",", array_merge(array_rand(array_flip(array('adtech_2','sponsor_ads','ad','ADSLOT_2','AD_G','AD_Top','AD_gallery','AD_google','AD_half','Ad-3-Slider','Ad3Left','Ad728x90','AdAboveGame','AdAreaH','AdAuth1','AdButtons','AdContainer','AdSense3','AdSky23','AdsHome2','Ads_BA_FLB','Adv9','AdvArea','BotAd','ButtonAd','DivAd1','FRONTADVT2','FRONTADVT8','GoogleAd2','HALHouseAd','H_Ad_728x90','HomeAd1','LB_Row_Ad','LeftAd1','LftAd','MainAd1','MastheadAd','MyAdHeader','OAS2','OASMiddleAd','OpenXAds','RightAd','SkyAd','TDads','TextLinkAds','TopAdPos','TopAdvert','TopSideAd','WNAd20','WNAd46','aboveAd','ad-125x125','ad-133','ad-143','ad-160','ad-160-long','ad-170','ad-21','ad-300','ad-635x40-1','ad-728','ad-a','ad-bg','ad-bigbox','ad-box1','ad-bs','ad-btf-bot','ad-btm','ad-center','ad-column','ad-cube-sec','ad-for-map','ad-leader','ad-manager','ad-middle','ad-mpu2','ad-north','ad-one','ad-output','ad-r','ad-right2','ad-row','ad-sidebar2','ad-sky-btf','ad-top-250','ad-two','ad1-wrapper','ad1006','ad101','ad120x600','ad125BL','ad125TR','ad160','ad160-2','ad180','ad2_inline','ad300-title','ad300top','ad300x250c','ad508x125','ad600x90','ad720x90bot','ad728Top','ad728foot','ad728x90box','adAd','adBanner2','adBanner3','adBox','adClickLeft','adDiv','adDiv1','adDiv300','adGroup4','adHeader','adHolder1','adHolder3','adIsland','adLB','adLabel','adLeaderTop','adLeft','adLounge','adMonster1','adPosition9','adRContain','adRight2','adSpace13','adSpace16','adSpace4','adSpace8','adSqb','adSquare','adStaticA','adTableCell','adTag-genre','adTicker','adWrapper','adZoneTop','ad_120x600','ad_120x90','ad_160_600','ad_160x160','ad_3','ad_300c','ad_300x100','ad_350_200','ad_4','ad_728_foot','ad_A','ad_J','ad_Right','ad_anchor','ad_bar','ad_big','ad_block_1','ad_box_ad_1','ad_buttons','ad_feedback','ad_gallery','ad_hf','ad_holder','ad_home','ad_island2','ad_layer1','ad_leader','ad_left','ad_message','ad_ml','ad_mpuslot','ad_overture','ad_rect','ad_rect_c','ad_sec','ad_slot','ad_txt','ad_wide_box','ad_wrapper','ad_x20','ad_zone','adbForum','adbanner','adbannerdiv','adbdiv','adblock-big','adblocktwo','adbottom','adbox2','adclear','adimg3','adjs_id','adl_300x100','adnet','adnews','adplacement','adrig','ads-336x280','ads-468','ads-C1','ads-banner','ads-rhs','ads-slot','ads-wrapper','ads100Box','ads3','ads300x250','ads315','ads72890top','adsCTN','adsIfrme2','adsZone2','ads_2015','ads_bigrec1','ads_block','ads_box_top','ads_button','ads_inner','ads_mads_r2','ads_notice','ads_pave','ads_space','ads_top','ads_video','adsbottom','adsection','adsense-top','adsense2pos','adsense728','adsensetext','adsensewide','adsiframe','adsky','adslot1','adslot3','adslot4','adslot7','adslot_m1','adslot_m2','adsonar','adspace-2','adspacer','adspan','adsplace1','adsplace2','adsplash','adstext2','adtech_3','adtopbanner','adunitl','adv-preroll','adv-right1','adv-x34','adv130x195','adv_71','adv_98','adv_mpu1','adv_mpu2','adv_right','adv_top','adver5','adverFrame','advert-sky','advertBox','advert_box','advertbox3','adverts','adverttop','advframe','adwidget-6','adxSponLink','adzerk2','af_ad_small','alert_ads','article-ad','asideads','atad1','awesome-ad','b5ad300','bLinkAdv','ban_728x90','banner-728','banner_slot','banneradrow','bcaster-ad','bgad','bnrhd468','bottom_ads','bottomadbar','bottomads','box1ad','boxAd300','boxad','boxads','bsap_aplink','c4_ad','c_ad_sb','c_upperad','caAdLarger','center-ad','center_ad-0','channel_ads','cherry_ads','circ_ad','cokeAd','colRightAd','content-ad','content_mpu','cornerad','cube_ad','customAd','dap300x250','dartad13','dartad28','dartad8','db_ad','dfp-ad-1','dfp_ad_20','div-ad-1x1','divLeftAd12','divTopAds','dnn_adTop','downloadAd','dvad6cntnr','embedded-ad','ex-ligatus','exoAd','externalAd','fav-advert','footerads','four_ads','fp_rh_ad','ft-ads','ftad1','fusionad','gads_middle','gallery_ad','gameads','gm-ad-lrec','goad1','gooadtop','googleAdBox','google_ad','googleadbig','h_ads0','h_ads1','hdrAds','hdtv_ad_ss','headAdv','headad','headadvert','hi5-ad-1','homeAds','i9lsdads','iframe-ad','ima_ads-2','imgad1','index-ad','indexad','iqadtile15','iqd_rightAd','largeAd','lead-ads','leadad_1','leader-ad','leftAdCol','left_bg_ad','linkAds','logoAd2','long-ad-box','lpAdPanel','main-advert','main-tj-ad','masthead-ad','masthead_ad','med-rect-ad','medRecAd','media_ad','menuad','mhheader_ad','midAD','midRightAds','mid_ad_div','midrect_ad','modal-ad','motionAd','mpu-ad','mpuDiv','mpu_box','mpu_text_ad','mpubox','msAds','mt_adv','na_adblock','native_ad2','nav_ad','new_topad','newuser_ad','nrAds','oas_Middle','oas_Right1','oas_Top','ofie_ad','omnibar_ad','online_ad','outsideAds','ovadsense','p-advert','partnerAd','pb_adbanner','popoverAd','post5_adbox','ppcAdverts','pre-adv','premSpons','premiumad','prerollAd','publicidad','r-ad-tag','rectad','refine-ad','reklama','rhs_ads','right-ad','right-ads-3','rightAd1','rightAd_rdr','rightColAd','rightadcell','rightadhome','rightbar_ad','rowAdv','rt-ad-top','rtmod_ad','show_ads','sideAd1','sideAdArea','sideBar-ads','sideads','sideadscol','sideadvert','sideadzone','sidebar-ad','sidebar-ad3','sidebarAd1','sidebar_ad','single-mpu','site-ads','skin_adv','sky-ad','sky-top-ad','skyadwrap','skyscrapeAd','sponlink','sponsLinks','sponsorText','sponsor_ad','spotadvert1','sq_ads','squared_ad','stopAdvt','story-ad','t7ad','tdAds','textAdsTop','text_ad','themis-ads','thread-ad','tilia_ad','tobsideAd','topAdHolder','topAdsDiv','topAdv','top_add','top_span_ad','topad-wrap','topad728','topadbar','topadsense','topadvert','topadwrap','topadzone','towerad','travel_ad','vdls-adv','vdls-advs','verticalAds','vid-left-ad','vidAdBottom','video-adv','videoads','view_adtop','viewportAds','weather-ad','wh_ad_4','wide_adv','wrapAdRight','wsAdWrapper','y708-ad-ysm','yfi-sponsor','zergnet')), 7), array("ad", "ads", "adsense"))); ?>".split(","),b=a.length,d="",e=this,c=0,f="abisuq".charAt(e.rand(5));c<b;c++)e.getElementBy(a[c])||(d+="<"+f+' id="'+a[c]+'"></'+f+">");e.insert(d);e.deferExecution(function(){for(c=0;c<b;c++)if(null==e.getElementBy(a[c]).offsetParent||"none"==e.getStyle(e.getElementBy(a[c])).display)return e.displayMessage("#"+a[c]+"("+c+")");e.nextFunction()})},u:function(){var a="-ad-gif-,.mobileads.,/ads/sky_,/cn-advert.,/default-adv/ad,/mobileads/ad,/msnadimg.,/triadshow.,/txt_ad_,_feast_ad.".split(","),b=this,d=b.getElementBy(0,"img"),e,c;d[0]!==k&&d[0].src!==k&&(e=new Image,e.onload=function(){c=this;c.onload=null;c.onerror=function(){l=null;b.displayMessage(c.src)};c.src=d[0].src+"#"+a.join("")},e.src=d[0].src);b.deferExecution(function(){b.nextFunction()})},nextFunction:function(){var a=l[0];a!==k&&(l.shift(),this[a]())}};f.<?php echo $antiblock_layer_id; ?>=<?php echo $antiblock_layer_id; ?>=new g;h.addEventListener?f.addEventListener("load",g,!1):f.attachEvent("onload",g)})(window);</script>


<!doctype html>
<html lang="de">
	<head>
		<title><?php echo $title; ?></title>
		<base href="<?php echo $protocol.$_SERVER["HTTP_HOST"]; ?>" /> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="<?php echo $meta_desc; ?>" />
		<meta name="keywords" content="<?php echo $meta_keyw; ?>" />
		<meta property="og:title" content="<?php echo $og_title; ?>" />
		<meta property="og:description" content="<?php echo $meta_desc; ?>" />
		<meta property="og:site_name" content="<?php echo $site_name; ?>"/>
		<meta property="og:url" content="<?php echo $canonical; ?>" />
		<meta property="og:image" content="<?php echo $og_img; ?>" />
		<meta name="webutation-site-verification" content="webutation8f2544e8c2d2354f473c00eed107c837" />
		<link type="text/css" rel="stylesheet" media="screen" href="/css/style.css" />
		<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
        <script>
            function copyToClipboard(element) {
              var $temp = $("<input>");
              $("body").append($temp);
              $temp.val($(element).text()).select();
              document.execCommand("copy");
              $temp.remove();
            }
        </script>
        
		<script async type="text/javascript">
			function insert(str) {
   			var TextArea = document.getElementById('nachricht');
   			var val = TextArea.value;
   			var before = val.substring(0, TextArea.selectionStart);
   			var after = val.substring(TextArea.selectionEnd, val.length);
  			TextArea.value = before + str + after;
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
		
		<script type="application/ld+json">
		{
 		"@context" : "http://schema.org",
		"@type" : "Website",
		"name" : "Nachricht.co",
		"url" : "https://nachricht.co",
		"sameAs" : [
		    "https://twitter.com/nachrichtco",
		    "https://www.facebook.com/nachricht.co"
 		]
		}
		</script> 

	<script>
            window.cookieconsent_options = {
                learnMore: 'More info',
                link: 'https://nachricht.co/datenschutz/'
            };
        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>

	</head>
	<body>
    <div class="notification umfrage shadow"><?php echo $notify; ?> <a href="<?php echo $notifyURL; ?>" class="round"><?php echo $notifyButton; ?></a></div>

	<?php
		if($apage == "home")
		{
			include('pages/home.include.php');
		}
		include($path.$apage.".php");
	?>
	
	<section class="conintro spacee">
	<div class="container">
		<section class="content">
			<section class="bigbox howto round shadow">
				<h3 class="first">Schritt 1: Nachricht erstellen</h3>
				<p>Tippe die gewünschte Nachricht in das Textfeld oben auf der Seite ein und klicke auf 'Nachricht erstellen'.</p>
			
				<h3>Schritt 2: Link verschicken</h3>
				<p>Kopiere den Link, der dir daraufhin angezeigt wird und verschicke ihn an den gewünschten Gesprächspartner - z.B. via Facebook oder WhatsApp.</p>
								
				<h3>Schritt 3: Nachricht lesen</h3>
				<p class="last">Nun klickt der Gesprächspartner auf den Link und kann die Nachricht ein einziges Mal lesen, da diese sich daraufhin selbst zerstört.</p>
			</section>
		</section>
	</div>
	
	
	<footer class="footer">
		<div class="container">
			<nav class="footer">
				<ul>
					<li class="round"><a href="/unterstuetzen/" title="<? echo $title_spenden; ?>">Unterstützen</a></li>
					<li class="round"><a href="/faq/" title="<? echo $title_faq; ?>">Häufig gestellte Fragen</a></li>
					<li class="round"><a href="/datenschutz/" title="<? echo $title_datenschutz; ?>">Datenschutz</a></li>
					<li class="round"><a href="/impressum/" title="<? echo $title_impressum; ?>">Impressum</a></li>
				</ul>
			</nav>
			<div class="copyright">2014 - <?php echo date('Y'); ?> &copy;  <a href="https://nachricht.co/" title="Nachricht.co">Nachricht.co</a> &middot; Alle Rechte vorbehalten.</div>
			<div class="clear"></div>
		</div>
	</footer>
	</section>
	</body>
</html>
