<div class="card">
    <h1><?php echo htmlentities($aux['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?></h1>
    <img src='img/fuera_de_stock.jpg'>
    <p><?php echo  htmlentities($aux['description'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> </p>
    <p><b>PRICE: <?php echo htmlentities($aux['price'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>$</b></p>
    <input type="number" id="quantity" value="1">
    <button type="button" id="cart_button" value="<?php echo $aux['id'] ?>">Add to Cart</button>
</div>