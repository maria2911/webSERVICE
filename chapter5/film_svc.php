<?php

// return senarai filem di kedai ini

// connect ke DB
$server = 'localhost';
$user = 'root';
$pwd = '';
$db = 'sakila';
$con = mysqli_connect($server, $user, $pwd, $db);

if(!$con)
{
    echo "Connection Problem !";
    exit;
}
else
{
    $sql = "SELECT * FROM film LIMIT 0,20 ";
    $rs = mysqli_query($con,$sql);
    while ($row = msqli_fetch_array($rs))
    {
        echo $row['title'].'<br>';
    }

}

// query ke DB

// print data sbg JSON