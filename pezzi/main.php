<?php
    require_once __DIR__ . "/../database/data.php";
?>

<?php foreach($database as $key => $item){?>

<div class="content">
    <div class="box-image">
        <?php echo "<img src='{$item['poster']}' alt='image'>" ?>
    </div>
    <div class="titolo">
        <?php echo "{$item['title']}" ?>
    </div>

    <div class="autore">
        <?php echo "{$item['author']}" ?>
    </div>

    <div class="anno">
        <?php echo "{$item['year']}" ?>
    </div>
</div>
        
    
    
<?php } ?>

