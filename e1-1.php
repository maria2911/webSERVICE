<?php
// $url = 'http://www.moh.gov.my/'; if from portal
$url = 'http://localhost:8080/webservice/data.php';
$ch = curl_init($url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
echo $result;
curl_close($ch);