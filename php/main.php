<?php

$username = $_GET["username"];

header('Content-Type: application/json');
echo json_encode($data);
die();

?>