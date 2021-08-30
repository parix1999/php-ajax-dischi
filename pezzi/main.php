<?php
    require_once __DIR__ . "/../database/data.php";
?>

<?php foreach($database as $key => $item){?>

<div class="content">
    <div class="box-image">
        <?php echo "<img src='{$item['poster']}' alt='image'>" ?>
    </div>
    <?php echo "Il titolo è: {$item['title']}"; ?>
</div>
        
    
    
<?php } ?>

