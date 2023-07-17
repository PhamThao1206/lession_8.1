<?php
      require_once 'pdo.php';
      $categoryConnection = new CategoryConnection();
      $data = ['name' => $_POST['name']];
      $categoryConnection->createNewData($data);
    header("Location: http://localhost/lession_11/category/index.php");
?>