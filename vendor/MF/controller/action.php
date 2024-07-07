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

        // isolando view e layout do conteúdo
        protected function render($view, $layout) {
            // Possibilitando acesso geral ao objeto view
            $this->view->page = $view;

            // checando existencia de layout
            // Carregando conteudo, views e layouts diretamente na página layout.phtml
            if(file_exists("../app/views/" . $layout . ".phtml")) {
                require_once "../app/views/" . $layout . ".phtml";

            } else {
                // Retorna apenas conteudo da view, sem layout
                $this->content();
            }

        }

        // isolando conteudo das paginas
        protected function content() {
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
            require_once "../app/views/" . $classe_atual . "/" . $this->view->page . ".phtml";
        }
    }
?>