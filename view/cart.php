<?php
    $total = 0; 
    if(isset($_SESSION['cart'])){
        echo "<table><tr><td>Items</td><td><table><tr><th>Product</th><th>Quantity</th><th>Price</th><th></th></tr>";
        foreach($_SESSION['cart'] as $ky=>$ci){
            echo "<tr><td>".htmlentities($ci[0], ENT_QUOTES | ENT_HTML5, 'UTF-8')."</td><td>".$ci[1]."</td><td>".(string)$ci[2]."$</td><td><button class='deleteItem' value='".$ky."'>Delete Item</button></td></tr>";
            $total += $ci[1] * $ci[2];
        }
        echo "</table></td></tr><tr><td>".$total."$</td></tr></table>";
    }
?>