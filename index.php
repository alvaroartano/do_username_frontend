<?php 

$cURL = curl_init();
$setopt_array = array(CURLOPT_URL => "https://www.digitalocean.com/community/api/random_username",    CURLOPT_RETURNTRANSFER => true, CURLOPT_HTTPHEADER => array()); 
curl_setopt_array($cURL, $setopt_array);
$json_response_data = curl_exec($cURL);
echo $json_response_data);
curl_close($cURL);  
echo '<h1>Hello</h1>'
?>
