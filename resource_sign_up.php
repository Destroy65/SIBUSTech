<html>
  <body id="layout">
    <header id="top_menu" style="grid-area: top_menu">
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