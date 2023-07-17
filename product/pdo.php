<?php

abstract class Connection {
    protected $host;
    protected $db;
    protected $username;
    protected $pass;
    protected $connection;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->db = 'crud_test';
        $this->username = 'root';
        $this->pass = '';
        $this->connection = $this->connect();
        
    }
}

try {
    $conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->username, $this->pass);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}

public function prepareSQL($sql) {
    return $connection->prepare($sql);
}
class ProductConnection extends Connection{
public function all() {
    $sql = "SELECT * FROM products";
    $stmt = $this->prepareSQL($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

public function create($data) {
    $sql = "INSERT INTO products (name, price, category_id) VALUES (:name, :price, :ca_id)";
    $stmt = $this->prepareSQL($sql);
    $stmt->execute($data);
}

public function delete($data) {
    $sql = "DELETE FROM products where id = :id";
    $stmt = $this->prepareSQL($sql);
    $stmt->execute($data);
}
public function findById($data) {
    $sql = "SELECT * FROM products WHERE id = :id";
    $stmt = $this->prepareSQL($sql);
    $stmt->execute($data);
    return $stmt->fetch();
}
public function update($name, $price, $cate_id, $id) {
    $sql = "UPDATE products SET name= '$name', price = '$price', category_id = '$cate_id' WHERE id = $id LIMIT 1";
    $stmt = $this->prepareSQL($sql);
    $stmt->execute();
}
}
?>