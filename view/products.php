<?php
    foreach($products as $res)
    {
        echo "<button class='products' value='".htmlentities($res['id'], ENT_QUOTES | ENT_HTML5, 'UTF-8')."'>";
        echo "<br><h1>" .htmlentities($res['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8'). "</h1>";
        echo "<br></br>";
        echo "<img src='img/fuera_de_stock.jpg'>"; 
        echo "<br></br>";
        echo htmlentities($res['price'], ENT_QUOTES | ENT_HTML5, 'UTF-8'). "$";
        echo "</button>";
    }
?>