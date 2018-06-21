<?php
/**
 * Created by PhpStorm.
 * User: elio
 * Date: 19/05/15
 * Time: 20:33
 */

class DB_connect {


#//////////////////CONEXãO COM O BANCO DE DADOS/////////////////////////////////////////////////////
    private static $db_host = "localhost";// recebe o endereço de conexão como estamos local é localhost
    private static $db_user = "u985544625_root"; // nome de usuário do banco. Quando for hospedar em um servidor, verificar o nome de user junto ao ADM do server.
    private static $db_pass = "193945"; //Utilizada quando o banco requer uma senha para acesso a sua base de dados.
    private static $db_name = "u985544625_gm";  // nome do banco de dados a ser acessado pela aplicação.

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


    #essa classe possui a função de se conectar ao banco de dados.
    private static $conexao;


    public static function conectaDB(){

        //Função responsável por fazer a conecxão com o banco de dados.
        Self::$conexao = mysqli_connect(Self::$db_host, Self::$db_user,Self::$db_pass,Self::$db_name) or die("Erro ao realizar conexão."); //verificar a possibilidade de chamar uma página de erro caso der erro.
        return  Self::$conexao; //retorna a conexão.

    }

    public static function encerraBD($conexao){

        mysqli_close($conexao);

    }




}
