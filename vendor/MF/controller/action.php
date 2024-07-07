<?php
    namespace MF\Controller;

    // Classe abstrata para isolar actions e views
    // Note, alteramos a visibilidade de alguns elementos para protected
    // Garantindo proteção de escopo e a funcionalidade com herança
    abstract class Action {
        protected $view;

        public function __construct() {
            // \stdClass() -> Retorna um objeto padrão VAZIO!
            $this->view = new \stdClass();
        }

        protected function render($view) {
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