<?php

class DB_work {

    private $sql;
    private $resultado;

    //Faz uma chamada a todos os elementos de uma tabela passada como argumento.
    public function tabela_listar($conexao,$tabela){

        $this->sql = "SELECT * FROM " . $tabela .";"; // A variável sql está recebendo uma consulta sql na forma de string.
        $this->resultado = mysqli_query($conexao, $this->sql); // Tem como função executar a consulta sql passada como argumento no banco de dados, nesse caso você armazena uma consulta na forma de variável e passa essa variável como argumento para essa função, juntamente com a variável que contém referência a conexão que se deseja trabalhar.
        return $this->resultado;//Retorna o resultado da consulta no banco de dado passado como argumento. Retorna a "Row". Tem que jogar a var recebida dentro de um while.

    }


    public function tabela_usuario_cadastrar($conexao, $nome, $email,$dataExpiracao,$frequencia){

        //Sprintf é como se fosse o printf do C(sintaxe), onde é possível passar o valor de variaveis como string para uma consulta SQL.
        $this->sql = sprintf("INSERT INTO Cadastro_EnvioEmail (nome, email,Data_Expiracao,frequencia) VALUES ('%s', '%s', '%s','%s')", $nome, $email,$dataExpiracao,$frequencia);
        $this->resultado = mysqli_query($conexao, $this->sql) or die(mysqli_error($conexao));
        return $this->resultado;
    }

    public function mensagem_registro($conexao,$nome,$email,$assunto,$mensagem){

        $this->sql = sprintf("INSERT INTO Mensagem_Usuario (Nome, Email,Assunto,Mensagem) VALUES ('%s', '%s', '%s','%s')", $nome, $email,$assunto, $mensagem);
        $this->resultado = mysqli_query($conexao, $this->sql) or die(mysqli_error($conexao));
        return $this->resultado;

    }



}