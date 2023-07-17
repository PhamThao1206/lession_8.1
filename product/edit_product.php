<?php

require_once 'pdo.php';
require_once 'helper.php';
$categoryConnection = new CategoryConnection();
$productConnection = new ProductConnection();
$request = $_POST;

 $name = $request['name'];
 $id = $request['id'];
 $price = $request['price'];
 $cate_id = $request['cate_id'];

$productConnection->update($name, $price, $cate_id, $id);
redirectHome();