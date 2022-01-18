<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8"/>
      <title>Account</title>        
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
          <p> Your Profile </p>
        </header>
        <div>
          <?php require __DIR__."/controller/account.php"; ?>
        </div>
        <div>
          <a href="<?php $_SERVER['PHP_SELF'] ?>?action=edit_account"><button> Edit Profile </button></a>
        </div>
    </div> 
    <div>
      <header>
        <p> Your commands </p>
      </header>
      <div>
        <?php require __DIR__."/controller/commands.php"; ?>
      </div>
    </div>
    <footer style="grid-area: footer">
      <?php include __DIR__."/controller/footer.php";?>
    </footer>
  </body>
</html>