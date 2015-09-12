<?php

require '../app/conseltek/MY_Class/MY_Class.php';

$conseltek = new MY_Class;

$clients = [];
$clients['clients'] = $conseltek->clients();
$clients['shipping'] = $conseltek->shipping();

header('Content-Type: application/json');
echo json_encode($clients);
