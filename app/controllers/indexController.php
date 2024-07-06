<?php
    // Lembresse do namespace | Necessário para o autoload
    namespace App\Controllers;

    // Definindo controllers
    class IndexController {
        // Definindo as actions das routes
        public function index() {
            echo "index controller.";
        }
        
        public function sobreNos() {
            echo "sobreNos controller.";
        }
    }
?>