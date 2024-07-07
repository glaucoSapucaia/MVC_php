<?php
    // Lembresse do namespace | Necessário para o autoload
    namespace App\Controllers;

    use MF\Controller\Action;
    use App\Connection;
    use App\Models\Produto;

    // Definindo controllers
    class IndexController extends Action {
        // Definindo as actions das routes
        public function index() {
            // Dados de exemplo
            // $this->view->dados = array('Sofá', 'Cadeira', 'Cama');

            // Com ::, podemos acessar uma método estático diretamente
            // Criando conexão com DB
            $conn = Connection::getDb();

            // Instanciando obj produto com conexao ao DB
            $produto = new Produto($conn);

            // Recuperando lista de produtos do DB
            $produtos = $produto->getProdutos();
            $this->view->dados = $produtos;

            // Carregando views e layouts
            $this->render('index', 'layout1');
        }
        
        public function sobreNos() {
            // Dados de exemplo
            // $this->view->dados = array('Sofá', 'Cadeira', 'Cama');

            // carregando views e layouts
            $this->render('sobreNos', 'layout2');
        }
    }
?>