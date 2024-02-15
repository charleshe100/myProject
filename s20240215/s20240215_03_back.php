<?php
header("Access-Control-Allow-Origin: *");

$data=[
    's1'=>'amy',
    's2'=>'bob',
    's3'=>'cat',
];

echo json_encode($data);
?>