<?php

// return senarai filem di kedai ini

include 'db.php';

// connect ke DB
// $server = 'localhost';
// $user = 'root';
// $pwd = '';
// $db = 'sakila';
// $port =3307;
// $con = mysqli_connect($server, $user, $pwd, $db,$port);

// if(!$con)
// {
//     echo "Connection Problem !";
//     exit;
// }
// else
// {
    
    $sql = "SELECT * FROM film LIMIT 0,20 ";
    $rs = mysqli_query($con,$sql);
    $arr =[];
    while ($row = mysqli_fetch_array($rs))
    {
       // echo $row['title'].'<br>';
        $obj = new stdClass();
        $obj->title = $row['title'];
        $obj->descr = $row['description'];
        $arr[] = $obj;
    }

//}

// query ke DB

// print data sbg JSON
// {} atau [] - json_encode() vs json_decode()
    $json =json_encode($arr);
    header('Content-Type: application/json');
    echo $json;