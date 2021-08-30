<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
    <link rel="stylesheet" href="style-uno.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    
    <?php
        /*
        Prima Milestone:
        Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: 
        al caricamento della pagina ci saranno tutti i dischi. => index-prima-milestone.php
        */
        require_once __DIR__ . "/database/data.php";
        // foreach($database as $key => $item) {
        //     echo "{$item['title']} <br>";
        // }
    ?>

    <!-- Pezzo per l'Header: -->
    <?php require_once __DIR__ . "/pezzi/header.php"; ?>

    <!-- Pezzo per il main: -->
    <?php require_once __DIR__ . "/pezzi/main.php"; ?>


    

</body>
</html>