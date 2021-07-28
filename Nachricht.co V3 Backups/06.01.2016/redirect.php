<?
$id = $_GET['id'];
$pass = $_GET['pass'];
if(empty($id))
	{
	header('location: https://nachricht.co/');
	header('HTTP/1.1 301 Moved Permanently');
	exit();
	}
if(empty($pass))
	{
	header('location: https://nachricht.co/');
	exit();
	}
if(in_array($_SERVER['HTTP_USER_AGENT'], array(
  'WhatsApp',
  '*_WhatsApp',
  '*_WhatsApp/2.7.3581',
  '*_WhatsApp/2.6.7',
  '*_WhatsApp/2.6.10',
  '*_WhatsApp/2.12.81',
  'facebot',
  'facebookexternalhit/1.1',
  'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)',
  'facebookexternalhit/1.1 (+https://www.facebook.com/externalhit_uatext.php)',
  'LinkedInBot/1.0 (compatible; Mozilla/5.0; Jakarta Commons-HttpClient/3.1 +http://www.linkedin.com)',
  'bitlybot',
  'twitterbot/1.0',
  'Twitterbot/1.0Java/1.8.0_20Crowsnest/0.5 (+http://www.crowsnest.tv/)',
  'Mozilla/5.0 (compatible; TweetedTimes Bot/1.0;  http://tweetedtimes.com)',
  'Google-HTTP-Java-Client/1.17.0-rc (gzip)',
  'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',
  'Googlebot/2.1 (+http://www.googlebot.com/bot.html)',
  'Googlebot/2.1 (+http://www.google.com/bot.html)'
))) {
header('location: https://nachricht.co/');
header('HTTP/1.1 301 Moved Permanently');
}else{
header('location: https://nachricht.co/nachricht/'.$id.'_'.$pass.'.html');
header('HTTP/1.1 301 Moved Permanently');
}
?>