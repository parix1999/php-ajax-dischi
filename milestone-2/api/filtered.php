<?php

require_once __DIR__ . "/../database/data.php";
require_once __DIR__ . "/../functions/type-api.php";

//var_dump($database);
// Qui in mezzo deve essererci il filtro:
$genere = $_GET['genere'];
$filtro = array_filter($database, function($v) use ($genere) {
    if ($v['genre'] === $genere) {
        return true;
    } else {
        return false;
    }
    

});


// Trasformazione nell'api in json filtered:
createJson($filtro);