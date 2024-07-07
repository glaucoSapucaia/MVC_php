<?php
    namespace MF\Model;

    abstract class Model {
        protected $db;

        // Estabelecendo conexao com DB
        // Tipagem -> use \ antes de PDO, para informar que é um obj nativo da linguagem, pasta root
        public function __construct(\PDO $db) {
            $this->db = $db;
        }
    }
?>