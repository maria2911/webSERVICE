<?php
// return senarai di kedai ini


// connect ke DB
$server = 'localhost';
$user = 'root';
$pwd = '';
$db = 'sakila';
$port =3307;
$con = mysqli_connect($server, $user, $pwd, $db,$port);

if(!$con)
{
    echo "Connection Problem !";
    exit;
}