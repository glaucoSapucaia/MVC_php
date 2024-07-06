<?php
    // psr-4 | configurando rotas para o autoload
    namespace App;

    // importando classe Bootstrap{}
    use MF\init\Bootstrap;

    class Route extends Bootstrap {
        // Definindo rotas padrões
        protected function initRoutes() {
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
    }
?>