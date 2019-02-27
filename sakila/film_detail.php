<?php

// service yg hantar data
include 'db.php';

// $id = $_GET['id'];
// check jika client x htr id
$id = isset($_GET['id']) ? $_GET['id'] : 0;
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