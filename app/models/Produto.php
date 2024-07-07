<?php
    namespace App\Models;

    use MF\Model\Model;

    // classe para conexao com DB e recuperação de lista de itens
    class Produto extends Model {
        // Recuperando dados do db
        public function getProdutos() {
            // debug
            // return array('p1', 'p2', 'p3');

            // Consulta ao DB
            $query = '
                SELECT
                    id, descricao, preco
                FROM
                    tb_produtos
            ';

            return $this->db->query($query)->fetchAll();
        }
    }
?>