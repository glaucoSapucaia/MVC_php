<?php
    // psr-4 | configurando rotas para o autoload
    namespace App;

    class Route {
        // Definindo rotas padrões
        public function initRoutes() {
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'index',
            );

            $routes['sobre_nos'] = array(
                'route' => '/sobre_nos',
                'controller' => 'indexController',
                'action' => 'sonreNos',
            );
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