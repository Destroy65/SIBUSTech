<?php
    $i = 0;
    echo "<table>";
    foreach($user_commands as $uc)
    {
        echo "<tr><td>Command ID</td><td><h1>".$uc['id']."</h1></td></tr><tr><td>Items</td><td><table>";
        echo "<tr><th>Product</th><th>Quantity</th><th>Price</th>";
        foreach($command_items[$i] as $ci){
            echo "<tr>";
            echo "<td>".htmlentities($ci['product_name'], ENT_QUOTES | ENT_HTML5, 'UTF-8')."</td><td>".$ci['quantity']."</td><td>".$ci['price']."$</td>";
            echo "</tr>";
        }
        echo "</table></td></tr><tr><td>Price</td><td>".$uc['price']."$</td></tr><tr><td>Date</td><td>".$uc['Date']."</td></tr>";
        $i += 1;
    }
    echo "</table>"
?>