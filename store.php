<?php
require_once 'pdo.php';
require_once 'helper.php';

$request = $_POST;

$category = [
    'name' => $request['name'],
    'price' => $request['price'],
    'cate_id' => $request['cate_id'],
];

create($category);
redirectHome();