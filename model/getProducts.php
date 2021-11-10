<?php
    function load_product($conn)
    {
        $sql = "SELECT * FROM products WHERE name = ?";
        $consulta = $mysqli->prepare($sql);
        $consulta->bind_param("s", $_GET['q']);
        $consulta->execute();
        $consulta->store_result();
        $consulta->bind_result($cid, $cname, $name, $adr, $city, $pcode, $country); //atributos bd
        $consulta->fetch();
        $consulta->close();
    }
?>