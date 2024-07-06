<?php
    require_once "../vendor/autoload.php";

    // Importando class Route com namespace
    $route = new \App\Route();

    echo 'Local server ON!';
    echo '<hr>';

    print_r($route->getUrl());
?>