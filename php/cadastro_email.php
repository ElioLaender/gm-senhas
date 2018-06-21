
<?php

#método para conexão com o banco.
require_once("DB_connect.php");

#possui métodos em geral para aplicação.
require_once("Functions.php");

#possui métodos para trabalhar com o banco.
require_once("DB_work.php");

/*
 *
 *
 * ANTES DE CADASTRAR UM EMAIL, FAZER UMA VERIFICAÇÃO PARA SABER SE O MESMO NÃO FOI CADASTRADO ANTERIORMENTE.
 *
 *
 */

$objFunctions = new Functions();
$objDBwork = new DB_work();

#realiza conexão com o banco.
$conexao = DB_connect::conectaDB();

#trata a entrada do usuário de forma a ser armazenada no server.
$dataExpiracao = $objFunctions->setDataExpiracao(filter_input(INPUT_POST,"data"));

#cadastra usuário no banco de dados.
$objDBwork->tabela_usuario_cadastrar($conexao, filter_input(INPUT_POST,"nome"), filter_input(INPUT_POST,"email"),$dataExpiracao, filter_input(INPUT_POST,"frequencia"));


#encerra conexão com o banco de dados.
DB_connect::encerraBD($conexao);


echo "Seu registro foi efetuado com sucesso.";





  
