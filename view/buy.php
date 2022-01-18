<?php
    if(isset($user_cart[0])){
        echo "<table><tr><td>Items</td><td><table><tr><th>Product</th><th>Quantity</th><th>Price</th></tr>";
        foreach($cart_items as $ci){
            echo "<tr><td>".htmlentities($ci['product_name'], ENT_QUOTES | ENT_HTML5, 'UTF-8')."</td><td>".$ci['quantity']."</td><td>".(string)$ci['price']."$</td></tr>";
        }
        echo "</table></td></tr><tr><td>".$user_cart[0]['price']."$</td></tr></table>";
    }
    echo "<h2>Congratulations Cart Purchased</h2>";
?>