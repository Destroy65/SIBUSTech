<?php
    function load_product($conn)
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            $categoria = $_GET['q'];
            $consulta = $conn->prepare("SELECT * FROM products WHERE category_id = :categoria");
            $consulta->bindParam(":categoria", $categoria);
            $consulta->execute();
            $aux = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $aux;
        }
    }
?>