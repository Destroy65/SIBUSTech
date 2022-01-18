<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8"/>
      <title>Cart</title>        
      <meta name="author" content="SIBUS S.L.">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
      <script src="js/scripts.js"></script>
  </head>
  <body class="layout">
    <header class="top_menu" style="grid-area: top_menu">
      <?php require __DIR__."/controller/top_menu.php"; ?>
    </header>
    <div>
        <header>
          <p>Your cart</p>
        </header>
        <div id="cart">
          <?php require __DIR__."/controller/cart.php"; ?>
        </div>
        <div>
          <button type="button" id="deleteCart">Delete Cart</button>
          <a href="<?php echo $_SERVER['PHP_SELF'] ?>?action=buy"><button type="button" id="buy">Buy</button></a>
        </div>
    </div>  
  </body>
</html>