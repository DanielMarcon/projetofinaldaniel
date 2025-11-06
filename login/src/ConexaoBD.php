<?php
class ConexaoBD{

    public static function conectar():PDO{
        $conexao = new PDO("mysql:host=localhost:3306;dbname=danielprojetofinal","root","");
        return $conexao;
    }
}