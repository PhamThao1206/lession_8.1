<?php
    require_once 'pdo.php';
    $categoryConnection = new CategoryConnection();

    $id = ['id' => $_GET['id']];
    $name = $_POST['name'];
    $data = [
        'id' => $id['id'],
        'name' => $name
    ];
    $categoryConnection->updateData($data);
    header("Location: http://localhost/lession_8.1/category/index.php");
?>