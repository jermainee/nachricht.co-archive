<?php

$useragent = $_SERVER['HTTP_USER_AGENT'];

$myfile = fopen("useragent.txt", "w") or die("Unable to open file!");
fwrite($myfile, $useragent);
fclose($myfile);

?>
