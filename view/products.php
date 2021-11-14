<?php
    foreach($aux as $res)
    {
        echo "<table>";
        echo "<tr>";
        echo "<th>CustomerID</th>";
        echo "<td>" .$res['id'] . "</td>";
        echo "<th>CompanyName</th>";
        echo "<td>" . $res['name'] . "</td>";
        echo "<th>Descripciomes</th>";
        echo "<td>" . $res['description'] . "</td>";
        echo "<th>Imagen</th>";
        echo "<td>" . $res['pictures'] . "</td>";
        echo "<th>Precio</th>";
        echo "<td>" .$res['price']. "</td>";
        echo "</tr>";
        echo "</table>";
    }
?>