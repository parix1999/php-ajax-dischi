<?php

function createJson($array) {
    header('Content-Type: application/json');
    echo json_encode($array);
}