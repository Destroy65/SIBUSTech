<html>
  <body id="layout">
    <header id="top_menu" style="grid-area: top_menu">
      <?php require __DIR__."/controller/top_menu.php"; ?>
    </header>
    <div id="pp" style="grid-area: pp">
      <section id="categoriesList" style="grid-area: categoriesList">
        <?php
          require __DIR__."/model/DBconnect.php";
          require __DIR__."/model/categories.php";
          $conn = DBconnect();
          $categories = getCategories($conn);
          foreach($categories as $category){
            echo $category["id"]." esto otro xd: ".$category["name"]."<br />";
          }
        ?>
      </section>
      <section id="productsList" style="grid-area: productsList">
          aaaa
      </section>
    </div>
  </body>
</html>