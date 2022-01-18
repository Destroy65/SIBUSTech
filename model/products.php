<?php
    function getProductByCat($conn, $categoria)
    {
        $consulta = $conn->prepare("SELECT * FROM products WHERE category_id = :categoria");
        $consulta->bindParam(":categoria", $categoria);
        $consulta->execute();
        $products = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }
    function getAllProducts($conn)
    {
        $consulta = $conn->prepare("SELECT * FROM products");
        $consulta->execute();
        $products = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $products;  
    }
    function getProductByID($conn, $product_id){
        $consulta = $conn->prepare("SELECT name, price FROM products WHERE id = :product_id");
        $consulta->bindParam(":product_id", $product_id);
        $consulta->execute();
        $product = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $product;
    }
    function getProductByName($conn, $categoria)
    {
        $consulta = $conn->prepare("SELECT id, name, price, pictures FROM products WHERE (lower(name) LIKE Lower(:categoria)) OR (lower(description) LIKE Lower(:categoria))");
        $consulta->execute(array(':categoria' => "%$categoria%"));
        $products = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $products; 
    }
?>