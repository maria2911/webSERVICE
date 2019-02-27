<?php
// create object tanpa custom class
$obj = new stdClass();
$obj->nama ='maria';
$obj->alamat ='Putrajaya';

// convert obj kepada str JSON
echo json_encode($obj);
/// test