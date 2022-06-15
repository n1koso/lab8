<?php

require_once "Controller.php";

$controller = new Controller();
try {
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $controller->get();
    }
    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->post();
    }
} catch (\Throwable $th) {
    echo "Error";
}