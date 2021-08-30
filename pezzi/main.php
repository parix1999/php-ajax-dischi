<?php
    require_once __DIR__ . "/../database/data.php";
?>

<?php foreach($database as $key => $item){?>

<!-- Contenitore card album: -->
<div class="content">
  
    <!-- Immagine card album: -->
    <div class="box-image">
        <?php echo "<img src='{$item['poster']}' alt='image'>" ?>
    </div>
    <!-- Titolo autore anno ognuno nel suo div, cosi da stare uno sopra l'altro: -->
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

