<?php
    // Lembresse do namespace | Necessário para o autoload
    namespace App\Controllers;

    use MF\Controller\Action;

    // Definindo controllers
    class IndexController extends Action {
        // Definindo as actions das routes
        public function index() {
            // Dados de exemplo
            $this->view->dados = array('Sofá', 'Cadeira', 'Cama');

            // Carregando views e layouts
            $this->render('index', 'layout1');
        }
        
        public function sobreNos() {
            // Dados de exemplo
            $this->view->dados = array('Sofá', 'Cadeira', 'Cama');

            // carregando views e layouts
            $this->render('sobreNos', 'layout2');
        }
    }
?>