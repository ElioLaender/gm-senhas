<?php



$nome = $_POST["cadastro-nome"];
$email = $_POST["cadastro-email"];
$dataUser = $_POST["cadastro-data"];
$frequencia = $_POST["opcao"];


//calculo para armazenar a data de expiração. (quando expira será enviado o email).
$dataServer = date("d/m/Y");

//passando a data para um arrai, de formar que dia, mês e ano fique separados por posições.
$dataUser = explode('-',$dataUser);

$dataServer = explode('/',$dataServer);

//convertendo no formato a ser trabalhado no php. A função strtotime converte a data para forma de segundos. 
$dataConvertida = strtotime("$dataUser[2]-$dataUser[1]-$dataUser[0]"); 
$dataServerConvertida = strtotime("$dataServer[2]-$dataServer[1]-$dataServer[0]");

//convertendo a data de segundos para dias. Foi dividido os dias em segundos pelos segundos de um dia, que é 86400, desta forma o resultado será a diferença de dias entre duas datas.  
$dataExpiracao = ($dataConvertida - $dataServerConvertida)/86400;

//teste
echo "A diferença entre as datas é de: " . $dataExpiracao ." dias!";


////////////////////////////////////Código responsável por armazenar o cadastro na tabela////////////////////////////////////


//Previne o uso de cache nas páginas
   header("Expires: Mon, 21 Out 1999 00:00:00 GMT"); //Define uma data para o documento ser expirado. Nesse caso foi colocado uma data bem antiga para forçar para que o cache não ser utilizado (fica como se fosse um valor negativo)
   header("Cache-control1: no-cache"); //Desliga a utilização do cache.(sem controle de cache)
   header("Pragma: no-cache"); 
   
   //////////////////CONEXÃO COM O BANCO DE DADOS/////////////////////////////////////////////////////
   $db_host = "localhost";// recebe o endereço de conexão como estamos local é localhost
   $db_user = "root"; // nome de usuário do banco. Quando for hospedar em um servidor, verificar o nome de user junto ao ADM do server. 
   $db_pass = ""; //Utilizada quando o banco requer uma senha para acesso a sua base de dados. 
   $db_name = "gm_senhas";  // nome do banco de dados a ser acessado pela aplicação.

// Os argumentos devem ser passados nessa ordem, host, usuário, senha e o nome do banco de dados. 
$conexao = @mysqli_connect($db_host,$db_user,$db_pass,$db_name); //Função responsável por fazer a conecxão com o banco de dados. 


//Tratando possíveis erros de conexão.
if (mysqli_connect_error($conexao)) { // caso a conexão apresente erro, será executado o if. 
	echo "A conexão falhou, erro reportado: " . mysqli_connect_error();// exibe qual o tipo de erro reportado.
	exit();//Se a conecxão falhar, será abortado a execução de todo o script.
}

function usuario_cadastrar($conexao, $nome, $email,$dataExpiracao,$frequencia){
   
   //Sprintf é como se fosse o printf do C(sintaxe), onde é possível passar o valor de variaveis como string para uma consulta SQL.
   $sql = sprintf("INSERT INTO cadastro_email (nome, email,expiracao,frequencia) VALUES ('%s', '%s', %s,'%s')", $nome, $email,$dataExpiracao,$frequencia);
   $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
   //return $resultado;
   }

   
   //chamada a função de cadastro.
usuario_cadastrar($conexao, $nome, $email,$dataExpiracao,$frequencia);
