<?php
    namespace MF\Model;

    use App\Connection;

    class Container {
        // static function para recuperar objetos do DB instanciados com conexao estabelecida
        public static function getModel($model) {
            
            $class = "\\App\\Models\\" . ucfirst($model);

            // Com ::, podemos acessar uma método estático diretamente
            // Criando conexão com DB
            $conn = Connection::getDb();

            // Instanciando obj produto com conexao ao DB
            return new $class($conn);
        }
    }
?>