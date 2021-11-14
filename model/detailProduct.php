<?php
    function detail_product($conn)
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['p'] != null)
        {
            $id = $_GET['p'];
            $consulta = $conn->prepare("SELECT * FROM products WHERE id = :id");
            $consulta->bindParam(":id", $id);
            $consulta->execute();
            $aux = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $aux;
        }  
    }
?>