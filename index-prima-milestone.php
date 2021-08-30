<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
    <link rel="stylesheet" href="style-uno.css">
</head>
<body>
    
    <?php

        require_once __DIR__ . "/database/data.php";
        foreach($database as $key => $item) {
            echo "{$item['title']} <br>";
        }
    ?>


</body>
</html>