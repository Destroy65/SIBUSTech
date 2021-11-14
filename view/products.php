<div id="interior">
<?php
    foreach($aux as $res)
    {
        echo "<div><button onclick='return detailProduct(".$res['id'].");'><table>";
        echo "<tr>";
        echo "<br><h1>" . $res['name'] . "</h1></td>";
        echo "<br></br>";
        echo "<td><br><img src='img/fuera_de_stock.jpg'></br><br>" .$res['price']. "$</br></td>";
        echo "</tr>";
        echo "</table></button></div>";
    }
?>
</div>