<?php
//$nachricht = "sdfsdfsdfs34234df";
//$token = "d8e938a5f9572fe9a8c95eb02d96442fne";

$url = 'https://nachricht.co/beta/api.php';
$fields = array(
						'nachricht' => urlencode($nachricht),
						'token' => urlencode($token)
				);

foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
$result = curl_exec($ch);
curl_close($ch);
?>