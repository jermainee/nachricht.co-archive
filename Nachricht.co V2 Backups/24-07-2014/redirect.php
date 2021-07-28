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
  'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)',
  'facebookexternalhit/1.1 (+https://www.facebook.com/externalhit_uatext.php)',
  'LinkedInBot/1.0 (compatible; Mozilla/5.0; Jakarta Commons-HttpClient/3.1 +http://www.linkedin.com)',
  'bitlybot'
))) {
header('location: https://nachricht.co/');
header('HTTP/1.1 301 Moved Permanently');
}else{
header('location: https://nachricht.co/nachricht/'.$id.'_'.$pass.'.html');
header('HTTP/1.1 301 Moved Permanently');
}
?>