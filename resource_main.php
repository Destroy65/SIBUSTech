<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8"/>
      <title>SIBUSTech</title>        
      <meta name="author" content="SIBUS S.L.">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
      <script src="js/scripts.js"></script>
  </head>
  <body class="layout">
    <header class="top_menu" style="grid-area: top_menu">
      <?php include __DIR__."/controller/top_menu.php"; ?>
    </header>
    <div id="body" style="grid-area: body">
      <div id="log_menu" class="modal">
        <?php include __DIR__."/controller/log_menu.php"; ?>
      </div>
      <section id="categoriesList" style="grid-area: categoriesList">
        <?php include __DIR__."/controller/categories.php";?>
      </section>
      <div id="productsList" style="grid-area: productsList">
        <?php include __DIR__."/controller/products.php";?>
    </div>
    </div>
    <footer style="grid-area: footer">
      <?php include __DIR__."/controller/footer.php";?>
    </footer>
  </body>
</html>