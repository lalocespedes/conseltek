<?php

require '../app/conseltek/MY_Class/MY_Class.php';

$conseltek = new MY_Class;

$orders = [];
$orders['orders'] = $conseltek->orders();
$orders['items'] = $conseltek->ordersItems();
$orders['payments'] = $conseltek->payments();

header('Content-Type: application/json');
echo json_encode($orders);
