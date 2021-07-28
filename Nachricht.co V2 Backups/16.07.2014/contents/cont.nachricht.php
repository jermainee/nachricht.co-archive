<?
$uri = $_SERVER['REQUEST_URI'];
$verify = strpos($uri, 'nachricht/');

if($verify == false)
	{
	header('location: http://nachricht.co');
	exit();
	}

function autolink($str, $attributes=array()) {
  $attrs = '';
  foreach ($attributes as $attribute => $value) {
    $attrs .= " {$attribute}=\"{$value}\"";
  }
$str = ' ' . $str;
$str = preg_replace(
  '`([^"=\'>])(((http|https|ftp)://|www.)[^\s<]+[^\s<\.)])`i',
  '$1<a href="$2" class="inlink" '.$attrs.'>$2</a>',
  $str
);
$str = substr($str, 1);
$str = preg_replace('`href=\"www`','href="http://www',$str);
return $str;
}
?>

	<body class="right-sidebar loading">
	
		<!-- Header -->
			<!-- Header -->
			<header id="header">
				<? include('contents/inc.header.php'); ?>
			</header>
		
		<!-- Main -->
			<article id="main">

				<header class="special container">
					<span class="icon fa-tablet"></span>
					<h2>Eine <strong>Nachricht</strong> für dich!</h2>
				</header>
					
				<!-- One -->
					<section class="wrapper style4 container">
					
						<div class="row oneandhalf">
							<div class="8u">
								
								<!-- Content -->
									<div class="content">
										<section>
										
										<?
										require_once('includes/inc.mysql.php');
$id = mysql_real_escape_string($_GET['id']);
$passwort = mysql_real_escape_string($_GET['pass']);

if (empty($id) and empty($passwort))
{
echo $err3;
}else{

$abfrage = "SELECT * FROM nachrichten WHERE id= $id";
$ergebnis = mysql_query($abfrage) or die ();
while($row = mysql_fetch_object($ergebnis))
   {
   $id = "$row->id";
   $date = "$row->date";
   $encrypted = "$row->nachricht";
   }
if (empty($encrypted))
	{
	?>
			<div class="error"><? echo $err3; ?></div>
	<?
	} else {
	$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($passwort), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($passwort))), "\0");
	$htmln = htmlspecialchars($decrypted);
	$htmln = str_replace(array("\\r\\n"),"<br/>", $htmln);
	$htmln = str_replace(':)', '<img src="/images/smileys/smile.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-)', '<img src="/images/smileys/smile.gif" class="smiley">', $htmln);
	$htmln = str_replace(':(', '<img src="/images/smileys/sad.gif" class="smiley"class="smiley">', $htmln);
	$htmln = str_replace(':-(', '<img src="/images/smileys/sad.gif" class="smiley">', $htmln);
	$htmln = str_replace(';)', '<img src="/images/smileys/wink.gif" class="smiley">', $htmln);
	$htmln = str_replace(';-)', '<img src="/images/smileys/wink.gif" class="smiley">', $htmln);
	$htmln = str_replace(':D', '<img src="/images/smileys/laugh.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-D', '<img src="/images/smileys/laugh.gif" class="smiley">', $htmln);
	$htmln = str_replace(':P', '<img src="/images/smileys/tongue.gif" class="smiley">', $htmln);
	$htmln = str_replace(':p', '<img src="/images/smileys/tongue.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-p', '<img src="/images/smileys/tongue.gif" class="smiley">', $htmln);
	$htmln = str_replace(':-P', '<img src="/images/smileys/tongue.gif" class="smiley">', $htmln);
	$htmln = str_replace(':bomb:', '<img src="/images/smileys/bomb.gif" class="smiley">', $htmln);
	$htmln = str_replace(':fie:', '<img src="/images/smileys/fie.gif" class="smiley">', $htmln);
	echo "<p>".autolink($htmln,array("target"=>"_blank"))."</p>";
	
	//$loeschen = "DELETE FROM nachrichten WHERE id= $id";
	$loeschen = "UPDATE nachrichten SET nachricht= '', empfangen= NOW() WHERE id= $id";
	$loesch = mysql_query($loeschen) or die ();
		}
	}
?>
										
										</section>
									</div>
	
							</div>
							<div class="4u">
								
								<!-- Sidebar -->
									<div class="sidebar">
										<section>
											<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
											<!-- Nachricht.co -->
											<ins class="adsbygoogle"
     											style="display:block"
     											data-ad-client="ca-pub-0237366692215510"
     											data-ad-slot="2952897654"
     											data-ad-format="auto"></ins>
											<script>
											(adsbygoogle = window.adsbygoogle || []).push({});
											</script>
										</section>
										
										<section>
											<!--<a href="#" class="image feature"><img src="images/banner.jpg" alt="" /></a>-->
											<header>
												<h3>Hier könnte deine Werbung stehen!</h3>
											</header>
											<p>Profitiere durch unseren Traffic und unterstütze uns gleichzeitig finanziell in unserem Vorhaben!</p>
											<footer>
												<ul class="buttons">
													<li><a href="/kontakt/" class="button small">Jetzt Anfragen!</a></li>
												</ul>
											</footer>
										</section>
									</div>

							</div>
						</div>					
					</section>
					
			</article>