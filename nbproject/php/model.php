<?php

 //Previne o uso de cache nas p�ginas
   header("Expires: Mon, 21 Out 1999 00:00:00 GMT"); //Define uma data para o documento ser expirado. Nesse caso foi colocado uma data bem antiga para for�ar para que o cache n�o ser utilizado (fica como se fosse um valor negativo)
   header("Cache-control1: no-cache"); //Desliga a utiliza��o do cache.(sem controle de cache)
   header("Pragma: no-cache"); 
   
   //////////////////CONEX�O COM O BANCO DE DADOS/////////////////////////////////////////////////////
   $db_host = "localhost";// recebe o endere�o de conex�o como estamos local � localhost
   $db_user = "root"; // nome de usu�rio do banco. Quando for hospedar em um servidor, verificar o nome de user junto ao ADM do server. 
   $db_pass = ""; //Utilizada quando o banco requer uma senha para acesso a sua base de dados. 
   $db_name = "gm_senhas";  // nome do banco de dados a ser acessado pela aplica��o.
   
   
   

?>