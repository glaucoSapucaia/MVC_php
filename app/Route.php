<?php
    // psr-4 | configurando rotas para o autoload
    namespace App;

    class Route {
        // attr de rotas
        private $routes;

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

        // Definindo rotas padrões
        public function initRoutes() {
            // definindo rotas
            // param 1 -> url
            // param2 -> class controller
            // param3 -> metodo do controller
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'index',
            );

            $routes['sobre_nos'] = array(
                'route' => '/sobre_nos',
                'controller' => 'indexController',
                'action' => 'sobreNos',
            );

            // setando attr de rotas
            $this->setRoutes($routes);
        }

        public function run($url) {
            // debug
            // echo '*****' . $url . '<hr>';

            foreach($this->getRoutes() as $path => $route) {
                // debug
                // print_r($route);
                // echo "<br><br><hr>";

                // definindo fluxo de rotas
                if($url == $route['route']) {
                    // obtendo respectivo controller da rota
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
        public function getUrl() {
            // $_SERVER -> Objeto com dados sobre o servidor
            // REQUEST_URI -> Param com valor da url
            // parse_url() -> retorna array com componentes de uma url
            // podemo separar um path de uma query string

            // PHP_URL_PATH -> param que indica o retorno apenas da url "pura"
            
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }
?>