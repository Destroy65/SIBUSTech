<html>
  <body id="layout">
    <header id="top_menu" style="grid-area: top_menu">
      <?php include __DIR__."/controller/top_menu.php"; ?>
    </header>
    <div id="body" style="grid-area: body">
      <div id="log_menu" class="modal">
        <?php include __DIR__."/controller/log_menu.php"; ?>
      </div>
      <section id="categoriesList" style="grid-area: categoriesList">
        <?php include __DIR__."/controller/categories.php";?>
      </section>
      <section id="productsList" style="grid-area: productsList">
        <?php include __DIR__."/controller/products.php";?>
      </section>
    </div>
    <footer style="grid-area: footer">
      <?php include __DIR__."/controller/footer.php";?>
    </footer>
  </body>
</html>