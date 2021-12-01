<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8"/>
      <title>SignUp</title>        
      <meta name="author" content="SIBUS S.L.">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
      <script src="js/scripts.js"></script>
  </head>
  <body classd="layout">
    <header class="top_menu" style="grid-area: top_menu">
      <?php include __DIR__."/controller/top_menu.php"; ?>
    </header>
    <div id="body" style="grid-area: body">
        <?php require __DIR__."/controller/sign_up.php"; ?>
    </div>
    <footer style="grid-area: footer">
      <?php include __DIR__."/controller/footer.php";?>
    </footer>
  </body>
</html>
