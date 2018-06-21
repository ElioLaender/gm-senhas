<?php

require_once("DB_work.php");
require_once("DB_connect.php");

#possui todas as funções necessárias para o projeto.
class Functions extends DB_work {

    #variáveis da function
    private $dataConvertida;
    #variáveis da envio de email.
    private $headers;
    private $envio;
    #recebe o retorno do método listar tabela.
    private $tabela;
    private $recebeDataBanco;
    private $assunto;
    private $mensagem;
    private $email;
    private $nome;
    private $id;
    private $linha;




    #Modificar este método de forma a armazenar a data completa no servidor, desta forma, o cron irá verificar se a data é iqual a atual, e caso for, permanecer o mesmo dia e ano, incrementando apenas o mês.
    #tem como função calcular a data de expiração, (quando expira será enviado o email)..
    public function setDataExpiracao($dataUser){

        //passando a data para um arrai, de formar que dia, mês e ano fique separados por posições.

        $dataUser = explode('/', $dataUser);

        $this->dataConvertida .= $dataUser[2]."-";
        $this->dataConvertida .=  $dataUser[1]."-";
        $this->dataConvertida .= $dataUser[0];


        #retorna a data de expiração já no formato para ser armazenado no banco de dados.
        return $this->dataConvertida;


    }

    #Este método será chamado para enviar email para os usuários cadastrados, no caso de expiração.
    public function enviarEmail($email, $assunto, $mensagem, $email_remetente){

        //Lembrar de usar a variável do campo nome;
        $this->headers = "MIME-Version: 1.1\n";
        $this->headers .= "Content-type: text/html; charset=iso-8859-1\n";
        $this->headers .= "From:" . $email_remetente . "\n"; //email de quem envia
        //$headers .= "Cc:contato@com.br\n"; //email da pessoa
        $this->headers .= "Return-Path:" . $email_remetente . "\n";
        $this->headers .= "Reply-To: " . $email_remetente . "\n";

        $this->envio = mail($email, $assunto, $mensagem, $this->headers, "-f$email_remetente");

    }

    #Verifica data para envio de email, verificando o atributo de expiração, caso positivo envia o email.
    public function envioDiario($conexao) {

        $this->tabela = $this->tabela_listar($conexao, "Cadastro_EnvioEmail");#método extendido de DBWork.


        #percorre a tabela retornada acessando cada linha por vez, sendo que cada linha será um vetor contendo os atributos da tabela em cada posição. Cada iteração pula uma linha.
        foreach ($this->tabela as $linha) {

            #Caso senha for igual a data atual, será enviado o lembrete.
            if ($linha['Data_Expiracao'] == date('Y-m-d')) {

                $this->assunto = "Lembrete GM-Senhas";
                $this->nome = $linha['Nome'];
                $email_remetente = "laenderquadros@gmail.com";
                $this->mensagem = '
                                    <html>
                                    <body>
                                    <table cellpadding="10" style="background-color: rgb(250,250,250); border: 1px solid #4E69B2; font-family: arial, helvetica, sans-serif; padding: 20px; width: 100%;">
                                       <tr>
                                         <td>
                                           <h1> <strong style="color:  #333333; font-size: 25px;">Olá, ' . $this->nome . '</strong></h1>
                                           <p style="color:  #333333; font-size: 20px;"> Este é um lembrete mensal. Que tal investir em segurança e trocar suas senhas periodicamente de forma fácil?</p>
                                           <p style="color:  #333333; font-size: 20px;">Segue o link do nosso gerador de senhas online: www.gmsenhas.com.br</p>
                                           <p style="color:  #333333; font-size: 20px;">Para cancelar o lembrete mensal, <a href="index.php?id=' . $linha['id'] . '&amp;name=' . $linha['name'] .'">clique aqui</a></p>
                                           <p></br><strong style="color:  #333333; font-size: 20px;">Agradecemos a utilização. Equipe GM senhas.</strong></p>
                                           <center><a href="www.gmsenhas.com.br"><img alt="GM-SENHAS" height="150" width="150" src="http://www.gmsenhas.com.br/img/icon-gm.png"></a></center>
                                         </td>
                                        </tr>
                                     </table>
                                     </body>
                                     </html>';

                $this->email = $linha['Email'];

                $this->enviarEmail($this->email, $this->assunto, $this->mensagem, $email_remetente,$this->headers);

                #verificar se o cadastro é recorrente, caso positivo incrementar o mês, caso negativo deletar a linha do cadastro.
                if($linha['Frequencia'] == "1"){


                    $this->recebeDataBanco = $linha['Data_Expiracao'];

                        $this->recebeDataBanco = explode('-', $this->recebeDataBanco);

                        echo "ANTES DO INCREMENTO". $this->recebeDataBanco[1] ."</br>";

                        $this->recebeDataBanco[1] += 1;
                        #caso o valor referente ao mês for maiorIgual 12, será encrementado o ano e o valor do mês recebe 1.
                        if($this->recebeDataBanco[1] >= 12){
                            $this->recebeDataBanco[1] = 1; #recebe um para setar o mês de janeiro.
                            $this->recebeDataBanco[0] += 1; #Modifica o mês
                        }



                        #após alterado, voltará a ser string.
                        $this->recebeDataBanco = implode("-",$this->recebeDataBanco);

                        $this->id = $linha['Id'];

                        #atualiza a data no banco após incrementado.
                        $consulta = sprintf("UPDATE Cadastro_EnvioEmail SET Data_Expiracao='$this->recebeDataBanco' WHERE Id='$this->id'");
                        mysqli_query($conexao, $consulta) or die(mysqli_error($conexao));

                }else{

                    $this->id = $linha['Id'];
                    $consulta = sprintf("DELETE FROM Cadastro_EnvioEmail WHERE Id = '$this->id'");
                    mysqli_query($conexao, $consulta) or die(mysqli_error($conexao));
                    //Apenas uma vez, deletar cadastro
                }

            }#encerra primeiro if
        }#encerra foreach




    }#encerra método


    //método que verifica se um email já consta na base de dados.
    public function verificaEmail($conexao, $email){

        $consulta = sprintf("SELECT Email FROM Cadastro_EnvioEmail WHERE Email='$email' ");// retorna o email passado na tabela caso exista.
        $resultado = mysqli_query($conexao, $consulta) or die(mysqli_error($conexao));


                if(mysql_num_rows($resultado) == 1){
                    //email já cadastrado
                    return false;

                } else {
                    //email não cadastrado
                    return true;

                }


    }



}



