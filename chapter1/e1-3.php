<?php

require "../vendor/autoload.php";
$url ="http://localhost:8080/webservice/chapter1/data2.php";
$data = ["name" => "Lorna","email" => "mariatulkibtiah@gmail.com"];

$client = new \GuzzleHttp\client();
$result = $client->post($url, ["json" =>$data]);
echo $result->getbody();