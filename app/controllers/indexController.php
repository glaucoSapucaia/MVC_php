<?php
    // Lembresse do namespace | Necessário para o autoload
    namespace App\Controllers;

    // Recursos MF
    use MF\Controller\Action;
    use MF\Model\Container;

    // recursos Models
    use App\Models\Produto;
    use App\Models\Info;

    // Definindo controllers
    class IndexController extends Action {
        // Definindo as actions das routes
        public function index() {
            // Dados de exemplo
            // $this->view->dados = array('Sofá', 'Cadeira', 'Cama');

            // Obtendo produtos dinamicamente com class Container
            $produto = Container::getModel("Produto");

            // Recuperando lista de produtos do DB
            $produtos = $produto->getProdutos();
            $this->view->dados = $produtos;

            // Carregando views e layouts
            $this->render('index', 'layout1');
        }
        
        public function sobreNos() {
            // Dados de exemplo
            // $this->view->dados = array('Sofá', 'Cadeira', 'Cama');

            // Obtendo infos dinamicamente com class Container
            $info = Container::getModel("Info");

            // Recuperando lista de produtos do DB
            $infos = $info->getInfo();
            $this->view->dados = $infos;

            // carregando views e layouts
            $this->render('sobreNos', 'layout2');
        }
    }
?>