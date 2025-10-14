<?php

class Conexao {
    //Conexão com o banco de dados
    private static $host = "localhost";
    private static $usuario = "root";
    private static $banco = "showdefeira";
    private static $senha = "";

    public static function conectar() {
        try {

            return new PDO("mysql:host=".self::$host.";dbname=".self::$banco.";charset=utf8", 
            self::$usuario, self::$senha);

        } catch (PDOException $e) {
            die("Erro ao conectar ao banco de dados: {$e->getMessage()} ");
        }
    }
}