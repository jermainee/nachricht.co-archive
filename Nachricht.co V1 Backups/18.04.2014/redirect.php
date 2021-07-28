<?
$id = $_GET['id'];
$pass = $_GET['pass'];
if (in_array($_SERVER['HTTP_USER_AGENT'], array(
  'facebookexternalhit/1.1 (+https://www.facebook.com/externalhit_uatext.php)',
  'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)',
  'LinkedInBot/1.0 (compatible; Mozilla/5.0; Jakarta Commons-HttpClient/3.1 +http://www.linkedin.com)',
  'bitlybot',
))) {
header('location: https://nachricht.co/');
}else{
header('location: https://nachricht.co/read/'.$id.'/'.$pass.'.html');
}
?>