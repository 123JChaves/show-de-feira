<?php

    require "../config/Conexao.php";
    require "../models/Usuario.php";

    class IndexController {

        public $usuario;

        public function __construct()
        {
            $db = new Conexao();
            $pdo = $db->conectar();
            $this->usuario = new Usuario($pdo);
        }

        public function index() {

        }

        public function verificar() {

            

        }
    }