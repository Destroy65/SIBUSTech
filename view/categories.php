<?php foreach($categories as $category): ?>
    <button type="button" onclick="return showProducts('<?php echo $category['id']?>');"><?php echo $category['name'] ?></button>
<?php endforeach ?>



