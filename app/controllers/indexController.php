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

            // Carregando views
            $this->render('index');
        }
        
        public function sobreNos() {
            // Dados de exemplo
            $this->view->dados = array('Sofá', 'Cadeira', 'Cama');

            // carregando views
            $this->render('sobreNos');
        }
    }
?>