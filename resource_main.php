<html>
  <body>
    <header>
      <?php require __DIR__."/controller/top_menu.php"; ?>
    </header>
    <?php
      require __DIR__."/model/DBconnect.php";
      require __DIR__."/model/categories.php";
      $conn = DBconnect();
      $categories = getCategories($conn);
      foreach($categories as $category){
        echo $category["id"]." esto otro xd: ".$category["name"];
      }
    ?>
  </body>
</html>