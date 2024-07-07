<?php
    // ini_set() -> Permitir setar valores em tempo de processamento do init PHP (configuração do ambiente)
    // ini_set('error_reporting', 'E_STRICT');

    // Outra forma de ignorar erro é utilizar @
    // O @ ignora erro da linha do tipo WARNING

    // inicializando autoload
    require_once "../vendor/autoload.php";

    // Importando class Route com namespace
    $route = new \App\Route();

    // debug
    // echo 'Local server ON!';
    // echo '<hr>';

    // print_r($route->getUrl());
    // echo '<hr>';

    // print_r($route->getRoutes());
?>