<?php

 //Previne o uso de cache nas páginas
   header("Expires: Mon, 21 Out 1999 00:00:00 GMT"); //Define uma data para o documento ser expirado. Nesse caso foi colocado uma data bem antiga para forçar para que o cache não ser utilizado (fica como se fosse um valor negativo)
   header("Cache-control1: no-cache"); //Desliga a utilização do cache.(sem controle de cache)
   header("Pragma: no-cache"); 
   
   //////////////////CONEXÃO COM O BANCO DE DADOS/////////////////////////////////////////////////////
   $db_host = "localhost";// recebe o endereço de conexão como estamos local é localhost
   $db_user = "root"; // nome de usuário do banco. Quando for hospedar em um servidor, verificar o nome de user junto ao ADM do server. 
   $db_pass = ""; //Utilizada quando o banco requer uma senha para acesso a sua base de dados. 
   $db_name = "gm_senhas";  // nome do banco de dados a ser acessado pela aplicação.
   
   
   

?>