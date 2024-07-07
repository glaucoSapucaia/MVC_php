<?php
    namespace App\Models;

    // classe para conexao com DB e recuperação de lista de itens
    class Info {
        protected $db;

        // Estabelecendo conexao com DB
        // Tipagem -> use \ antes de PDO, para informar que é um obj nativo da linguagem, pasta root
        public function __construct(\PDO $db) {
            $this->db = $db;
        }

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