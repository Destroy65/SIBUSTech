<?php foreach($categories as $category): ?>
    <button type="button" class="categories" value="<?php echo $category['id']; ?>"><?php echo htmlentities($category['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?></button>
<?php endforeach ?>



