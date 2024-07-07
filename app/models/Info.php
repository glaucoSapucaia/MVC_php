<?php
    namespace App\Models;

    use MF\Model\Model;

    // classe para conexao com DB e recuperação de lista de itens
    class Info extends Model {
        // Recuperando dados do db
        public function getInfo() {
            // debug
            // return array('p1', 'p2', 'p3');

            // Consulta ao DB
            $query = '
                SELECT
                    titulo, descricao
                FROM
                    tb_info
            ';

            return $this->db->query($query)->fetchAll();
        }
    }
?>