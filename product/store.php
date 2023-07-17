<?php
require_once 'pdo.php';
require_once 'helper.php';
$categoryConnection = new CategoryConnection();
$productConnection = new ProductConnection();
$request = $_POST;

$category = [
    'name' => $request['name'],
    'price' => $request['price'],
    'cate_id' => $request['cate_id'],
];

$productConnection->create($category);
redirectHome();