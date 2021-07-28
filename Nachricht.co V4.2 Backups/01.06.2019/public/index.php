<?php
require('../includes/functions.php');
require('../includes/contents.php');
require_once('../includes/config.php');

$pageinfo = pageswitch($page, $path);
$apage = $pageinfo[0];
$title = $pageinfo[1];
$og_title = $pageinfo[2];
$meta_desc = $pageinfo[3];

if ($apage === "n") {
	include( '../pages/n.function.php' );
	include( '../includes/botgate.php' ); //UserAgent ausschließen
}

//Cachen von Nachrichten verhindern
if ($apage === "n" || $apage === "passphrase" || isset($_POST['erstellen'])) {
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
}

if ($apage === "404") {
	header("HTTP/1.0 404 Not Found");
}

if ($apage === "500") {
	header("HTTP/1.0 500 Internal Server Error");
}
?>
<!doctype html>
<html lang="de">
<head>
    <title><?php echo $title; ?></title>
    <base href="<?php echo $protocol . $_SERVER["HTTP_HOST"]; ?>"/>
	<?php if ($apage === 'impressum'): ?><meta name="robots" content="noindex" /><?php endif; ?>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="<?php echo $meta_desc; ?>"/>
    <meta name="keywords" content="<?php echo $meta_keyw; ?>"/>
    <meta property="og:title" content="<?php echo $og_title; ?>"/>
    <meta property="og:description" content="<?php echo $meta_desc; ?>"/>
    <meta property="og:site_name" content="<?php echo $site_name; ?>"/>
    <meta property="og:url" content="<?php echo $canonical; ?>"/>
    <meta property="og:image" content="<?php echo $og_img; ?>"/>
    <meta name="application-name" content="Nachricht.co"/>
    <meta name="theme-color" content="#fff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="/img/appicons/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="/img/appicons/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="/img/appicons/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="/img/appicons/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="/img/appicons/mstile-310x310.png" />
    <meta name="webutation-site-verification" content="webutation8f2544e8c2d2354f473c00eed107c837"/>
    <link rel="manifest" href="manifest.json">
    <link type="text/css" rel="stylesheet" media="screen" href="/css/style.e230h30hf2.css"/>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/img/appicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/appicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/appicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/appicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/img/appicons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/img/appicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/img/appicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/img/appicons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/img/appicons/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="/img/appicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/img/appicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/img/appicons/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/img/appicons/favicon-128.png" sizes="128x128" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <?php require_once("../pages/misc.adblock.php"); ?>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Website",
            "name": "Nachricht.co",
            "url": "https://nachricht.co",
            "sameAs": [
                "https://twitter.com/nachrichtco",
                "https://www.facebook.com/nachricht.co"
            ]
        }
    </script>
</head>
<body>
<?php
$pagePath = $path . $apage . '.php';
if (file_exists($pagePath)) {
    include($pagePath);
} else {
    header('location: https://nachricht.co');
}

?>

<section class="conintro spacee">
    <div class="container">
        <section class="content">
            <section class="bigbox howto round shadow">
                <h3 class="first">Schritt 1: Nachricht erstellen</h3>
                <p>Tippe die gewünschte Nachricht in das Textfeld oben auf der Seite ein und klicke auf 'Nachricht erstellen'.</p>

                <h3>Schritt 2: Link verschicken</h3>
                <p>Kopiere den Link, der dir daraufhin angezeigt wird und verschicke ihn an den gewünschten Gesprächspartner - z.B. via Facebook oder
                    WhatsApp.</p>

                <h3>Schritt 3: Nachricht lesen</h3>
                <p class="last">Nun klickt der Gesprächspartner auf den Link und kann die Nachricht ein einziges Mal lesen, da diese sich daraufhin selbst
                    zerstört.</p>
            </section>
        </section>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <nav class="footer">
            <ul>
                <li class="round"><a href="/unterstuetzen/" title="Unterstützen">Unterstützen</a></li>
                <li class="round"><a href="/faq/" title="Häufig gestellte Fragen">Häufig gestellte Fragen</a></li>
                <li class="round"><a href="/datenschutz/" title="Datenschutz">Datenschutz</a></li>
                <li class="round"><a href="/impressum/" title="Impressum">Impressum</a></li>
            </ul>
        </nav>

        <div class="copyright">
            <strong><a href="https://nachricht.co/" title="Nachricht.co">Nachricht.co</a></strong>, seit 2014 für dich da.
        </div>
        <div class="clear"></div>
    </div>
</footer>
<script async src="/js/scripts.e230h30hf2.js"></script>
<script async src="/register.e230h30hf2.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script async src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script async>
    window.addEventListener("load", function(){
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#efefef",
                    "text": "#333333"
                },
                "button": {
                    "background": "#00d1b2",
                    "text": "#ffffff"
                }
            },
            "theme": "classic",
            "position": "bottom-right",
            "content": {
                "message": "Damit du das beste Erlebnis mit Nachricht.co hast sind wir darauf angewiesen Cookies zu benutzen.",
                "dismiss": "Okay!",
                "link": "Mehr dazu",
                "href": "https://nachricht.co/datenschutz/"
            }
        })});
</script>
</body>
</html>
