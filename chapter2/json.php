<?php
// read data melalui RESTful webservice di jasonplaceholder
require "../vendor/autoload.php";

$client = new \GuzzleHttp\Client();


$response = $client->request('GET', 
'http://jsonplaceholder.typicode.com/posts/20',
[
]);
//var_dump($response->getBody()->getContents());

$str = $response->getBody()->getContents();
$data= json_decode($str); // convert data json ke array / object dlm PHP
echo $data->title;

echo '<hr>';

 // cara 2
 //$client = new \GuzzleHttp\Client('defaults'=>['verify'=>'false']);
$response = $client->request('GET', 'http://jsonplaceholder.typicode.com/posts',[]);
//var_dump($response->getBody()->getContents());

$str = $response->getBody()->getContents();
$arr = json_decode($str); // convert data json ke array / object dlm PHP
//var_dump($arr);

foreach ($arr as $data)
{
    echo $data->id. '<br>';
    echo $data->title. '<br>';

}

