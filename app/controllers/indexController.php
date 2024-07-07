<?php
    // Lembresse do namespace | Necessário para o autoload
    namespace App\Controllers;

    // Definindo controllers
    class IndexController {
        private $view;

        public function __construct() {
            // \stdClass() -> Retorna um objeto padrão VAZIO!
            $this->view = new \stdClass();
        }

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

        public function render($view) {
            // get_class() -> Retorna path de uma classe
            $classe_atual = get_class($this);
            
            // Removendo partes do path da classe
            $classe_atual = str_replace('App\\Controllers\\', '', $classe_atual);
            $classe_atual = str_replace('Controller', '', $classe_atual);

            // Coerção para lower case
            $classe_atual = strtolower($classe_atual);

            // debug
            // echo $classe_atual;

            // carregando views
            require_once "../app/views/" . $classe_atual . "/" . $view . ".phtml";
        }
    }
?>