<?php
    namespace MF\Init;

    // Alteramos alguns valores de escopo para protected
    // Assim, garantimos a segurança dos dados e podemos trabalhar com herança

    // classe abstrata
    abstract class Bootstrap {
        // attr de rotas
        private $routes;

        // metodo abstrato
        abstract protected function initRoutes();

        // construtor
        public function __construct() {
            // criando rotas iniciais
            $this->initRoutes();

            // recuperando rota solicitada
            $this->run($this->getUrl());
        }

        // getters and setters
        public function getRoutes() {
            return $this->routes;
        }

        public function setRoutes(array $routes) {
            $this->routes = $routes;
        }

        protected function run($url) {
            // debug
            // echo '*****' . $url . '<hr>';

            foreach($this->getRoutes() as $path => $route) {
                // debug
                // print_r($route);
                // echo "<br><br><hr>";

                // definindo fluxo de rotas
                if($url == $route['route']) {
                    // obtendo respectivo controller da rota
                    // uc.first() -> retorna string com primeira letra uppercase
                    $class = "App\\Controllers\\" . ucfirst($route['controller']);

                    // instanciando controller correspondente
                    $controller = new $class;

                    // recuperando ação correspondente
                    $action = $route['action'];

                    // acionando método da rota
                    $controller->$action();
                }
            }
        }

        // Obtendo urls
        protected function getUrl() {
            // $_SERVER -> Objeto com dados sobre o servidor
            // REQUEST_URI -> Param com valor da url
            // parse_url() -> retorna array com componentes de uma url
            // podemo separar um path de uma query string

            // PHP_URL_PATH -> param que indica o retorno apenas da url "pura"
            
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }
?>