<?php

require "../vendor/autoload.php";

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://localhost:8080/webservice/chapter1/data3.php',
['query'=>

     [
        'foo'=> 'bar',
        'nama'=>'maria'
    ]
]);
echo $response->getbody();
 echo '<hr>';

 $response2 = $client->request('POST', 'http://localhost:8080/webservice/chapter1/data2.php',
['form_params'=>

     [
        'foo2'=> 'bar2',
        'nama2'=>'maria22'
    ]
]);
echo $response2->getbody();