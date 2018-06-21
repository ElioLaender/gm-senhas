<?php

#método para conexão com o banco.
require_once("DB_connect.php");

#possui métodos para trabalhar com o banco.
require_once("DB_work.php");

require_once("Functions.php");

$objDBwork = new DB_work();
$objFunctions = new Functions();

#realiza conexão com o banco.
$conexao = DB_connect::conectaDB();

$objFunctions->envioDiario($conexao);


#encerra conexão com o banco de dados.
DB_connect::encerraBD($conexao);



#Não será utilizado o lacation para redirecionar após utilizarmos o envio de formulário sem refresh da página.
header("location:../index.php");