<?php

$useragent = $_SERVER['HTTP_USER_AGENT'];


$bots = array(
	'Skype',
	'SkypeUriPreview',
	'Preview',
	'WhatsApp',
	'Facebot',
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
);


if(strlen(strstr($useragent,"WhatsApp")) > 0 )
{

	header('location: https://nachricht.co/');
        header('HTTP/1.1 301 Moved Permanently');
        exit();

}


if(strlen(strstr($useragent,"Skype")) > 0 )
{

        header('location: https://nachricht.co/');
        header('HTTP/1.1 301 Moved Permanently');
        exit();

}


if(in_array($useragent, $bots))
{
	header('location: https://nachricht.co/');
	header('HTTP/1.1 301 Moved Permanently');
	exit();
}
?>
