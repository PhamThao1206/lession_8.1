
<?php
      require_once 'pdo.php';
      $categoryConnection = new CategoryConnection();
      $productConnect = new ProductConnection();
      $id = $_POST['id'];
      $data = [
          'id' => $id
      ];
      $productConnection->delete($data);
    header("Location: http://localhost/lession_11/category/index.php");

?>