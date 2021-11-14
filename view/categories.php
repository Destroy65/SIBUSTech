<?php foreach($categories as $category): ?>
    <button type="button" onclick="return showProducts('<?php echo $category['name']?>');"><?php echo $category['name'] ?></button>
<?php endforeach ?>
