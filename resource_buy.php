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
          <p>Your purchase</p>
        </header>
        <div id="purchase">
          <?php require __DIR__."/controller/buy.php"; ?>
        </div>
        <div>
          <a href="<?php echo $_SERVER['PHP_SELF'] ?>?action=main"><button type="button" id="main">Back to main page</button></a>
        </div>
    </div>  
  </body>
</html>