<?php

class Vars_connect {

#//////////////////CONEXãO COM O BANCO DE DADOS/////////////////////////////////////////////////////
private static $db_host = "localhost";// recebe o endereço de conexão como estamos local é localhost
private static $db_user = "root"; // nome de usuário do banco. Quando for hospedar em um servidor, verificar o nome de user junto ao ADM do server.
private static $db_pass = "193945"; //Utilizada quando o banco requer uma senha para acesso a sua base de dados.
private static $db_name = "GM_Senhas";  // nome do banco de dados a ser acessado pela aplicação.

    public static function getHost(){
        return Self::$db_host;
    }

    public static function getUser(){
        return Self::$db_user;
    }

    public static function getPass(){
        return Self::$db_pass;
    }

    public static function getName(){
        return Self::$db_name;
    }

    public static function setHost($host){
        Self::$db_host = $host;
    }

    public static function setUser($user){
        Self::$db_user = $user;
    }

    public static function setPass($pass){
        Self::$db_pass = $pass;
    }

    public static function setName($name){
        Self::$db_name = $name;
    }



}