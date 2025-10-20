<?php
    class Usuario {

        private $pdo;

        public function __construct($pdo)
        {
            $this->pdo = $pdo;
        }

        public function getUsuario($email) {
            
            $sql = "select id,nome,ativo,senha from usuario where email = :email limit 1";
            $consulta = $this->pdo->prepare($sql);
            $consulta->bindParam(":email", $email);
            $consulta->execute();

            return $consulta->fetch(PDO::FETCH_OBJ);
        }

        public function editar($id) {
            $sql = "select * from usuario where id = :id limit 1";
            $consulta = $this->pdo->prepare($sql);
            $consulta->bindParam(":id", $id);
            $consulta->execute();

            return $consulta->fetch(PDO::FETCH_OBJ);
        }

        public function salvar($dados) {
            
        }

    }
