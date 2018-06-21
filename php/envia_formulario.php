<?php



#método para conexão com o banco.
require_once("DB_connect.php");

#possui métodos para trabalhar com o banco.
require_once("DB_work.php");

$objDBwork = new DB_work();


#realiza conexão com o banco.
$conexao = DB_connect::conectaDB();

#cadastra usuário no banco de dados.
$objDBwork->mensagem_registro($conexao, filter_input(INPUT_POST,"nome"), filter_input(INPUT_POST,"email"), filter_input(INPUT_POST,"assunto"), filter_input(INPUT_POST,"mensagem"));

#encerra conexão com o banco de dados.
DB_connect::encerraBD($conexao);

echo "Mensagem enviada com sucesso. Obrigado pela visita!";










