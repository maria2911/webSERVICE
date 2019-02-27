<?php

// service yg hantar data
include 'db.php';
include 'token.php'; // check token


// perlu verify token = untuk secure kepada pengguna yang layak / setelah connect ke database
// senorio 1st : server client php call web servive.
isToken(); // proceed to next line jika ok , buat function isToken

// senorio 2 : 

// $id = $_GET['id'];
// check jika client x htr id
$id = isset($_GET['id']) ? $_GET['id'] : 0;

$id =mysqli_real_escape_string($con,$id); // elak sql injection
$sql = "select * from film where film_id = $id";
$rs = mysqli_query($con, $sql);

if($rs)
{
    // ada data
    $rows = mysqli_fetch_array($rs);
    if(!$rows) 
    {
        // id x wujud
        $data = new stdClass();
        $data->err = 'Tiada Data';
    }
    else{
        // data wujud
        $data = $rows;
        }
    
}
else
{
    // no data
    $data = new stdClass();
    $data->err = 'Tiada Data';   
}
// perlu header sebelum echo
header('Content-Type: application/json');
echo json_encode($data);