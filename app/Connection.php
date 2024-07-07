<?php
    namespace App;

    // Classe para conexao com DB
    class Connection {
        // Tornamos o método estático para nao precisarmos instancia-lo
        // A ideia é utilizar o método getDb() diretamente
        public static function getDb() {
            try {
                // instanciando conexao | \PDO Obj
                // A \ em PDO indica onde está a classe nativa (pasta RAIZ)
                $conn = new \PDO(
                    "mysql:host=localhost;dbname=mvc;charset=utf8",
                    "root",
                    "",
                );

                return $conn;

            } catch (\PDOException $e) {
                // Tratando erros de conexao com DB
                echo $e->getMessage();

            }
        }
    }
?>