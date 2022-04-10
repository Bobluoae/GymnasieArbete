<?php 
$input = file_get_contents("php://input");
var_dump($input);

$arr = ['message' => "OK!"];
echo json_encode($arr);