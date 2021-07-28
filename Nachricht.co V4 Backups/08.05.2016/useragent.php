<?php

$useragent = $_SERVER['HTTP_USER_AGENT'];

echo $useragent;

if(strpos($useragent, 'WhatsApp') == true)
{
   echo "HUTREN SSDFSDF";
}

$myfile = fopen("useragent.txt", "w") or die("Unable to open file!");
fwrite($myfile, $useragent);
fclose($myfile);

?>
