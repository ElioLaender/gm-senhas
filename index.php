<?php ?> 
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Gera mais - Senhas</title>
		
		<!-- define a viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
        <meta name="language" content="pt-br" />
        <meta name="description" content=" O GM-Senhas foi desenvolvido para conscientizar usuários sobre a segurança da informação. Temos como proposta reforçar a troca de senhas periodicamente. Para isso, oferecemos um gerador de senhas online juntamente com o sistema de agendamento." />
        <meta name="keywords" content="gerdor, senha, segurança da informação, GM-Senhas, Élio Laender, gerador de senha" />
        <meta name="author" content="Élio Laender" />





                            <!-- css do menu Mobile-->
                    <link rel="stylesheet" href="css/animate.css">
                 <link rel="stylesheet" href="css/style.css">
                 <link rel="stylesheet" href="css/slicknav.css">
                <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
                <link rel="stylesheet" href="//resources/demos/style.css">

		        <!-- adicionar CSS Bootstrap -->
                <link href="css/bootstrap.min.css" rel="stylesheet">
                <link href="css/style.css" rel="stylesheet">
                <!-- arquivo css pessoal -->
                <link href="css/estilo.css" rel="stylesheet" media="screen">
                <!-- versão mobile -->
                <link rel="stylesheet" href="css/hand.css" type="text/css" media="screen and (max-width: 700px)">
                <link rel="stylesheet" href="css/tablet.css" type="text/css" media="screen and (min-width: 701px) and (max-width: 995px)">
                
	</head>
	<body id="topo" >
            
                                  
            <div class="container-fluid"><!-- contém toda a página. Container-fluid faz com que o site seja 100background-->
                <div class="row">
                        <!-- cabeçalho -->
                        <header class="bg-claro">
                            <div class="row view">
                                <div class="col-md-12">
                                    

                                    <img src="img/icon-gm-text.png"  onclick="parallax('topo')" />
                                    <ul id="menu">
                                        <li><button class="btn-menu"  onclick="parallax('topo')" >INICIO</button></li>
                                        <li><button class="btn-menu" onclick="parallax('saiba-mais')">SAIBA MAIS</button></li>
                                        <li><button class="btn-menu" onclick="parallax('cadastro')">CADASTRO</button></li>
                                        <li><button class="btn-menu" onclick="parallax('contato')">CONTATO</button></li>
                                        <li><button class="btn-menu" onclick="parallax('facebook')">SOCIAL</button></li>
                                    </ul>
                                </div><!--encerra coluna header-->
                            </div><!--encerra linha header -->
                        </header><!-- encerra cabeçalho --> 

                        <div role="main"><!-- atributo semantico do html5 para definir o conteúdo principal-->

                            <div class="conteiner"><!-- primeiro conteudo, é declarado um container a cada container rs. -->
                                <div class="row view">
                                    <div class="col-md-12 container-um">

                                        <div class="view-um-position"><!-- centraliza o formulário na tela, independente da resolução. -->
                                          <img src="img/icon-gm.png"/>   
                                        <form id="form_gerador" class="form-cadastro">
                                           
                                            <fieldset>
                                                <legend >Como deseja sua nova senha ?</legend>
                                                      <label for="numero" >Numeros:</label>
                                                        <input id="numero" type="checkbox" name="numero"  checked/>
                                                      <label for="letra">Letras:</label>
                                                        <input id="letra"  type="checkbox" name="letras"/>
                                                      <label for="simbolo">Simbolos:</label>
                                                        <input id="simbolo"  type="checkbox" name="simbolos" value="checked"/>
                                                        <p id="alerta-check"></p>
                                                      <label for="quantidade" class="bloco texto-label">Qual o tamanho da senha ?</label>
                                                        <input type="text" name="quantidade" id="quantidade" value="8" placeholder="Apenas numeros" />
                                                        <p id="alerta-quantidade"></p>
                                                      <label for="extra" class="bloco texto-label">Caracteres extras:</label>
                                                        <input id="extra" type="text" name="extra" placeholder="Ex: seu nome, numeros a sua escolha, etc.."/>
                                                      <input type="button" id="gerar" value="GERAR" class="gerar"/>
                                                      <label for="gerar" class="bloco texto-label">Senha gerada:</label>
                                                        <input type="text" id="saida-senha" class="saida-senha"/>
                                                        <div id="pass-info" class=""></div>

                                             </fieldset>
                                            </form>




                                      </div><!-- encerra class view que centraliza o formulário.-->
                                    </div> <!--encerra coluna conteiner 01-->


                                </div><!--encerra linha conteiner 01-->
                               
                            </div><!--encerra conteiner 01 -->
                            
                            <div id="saiba-mais" class="conteiner"><!--inicia conteiner semântico 02-->
                                <div class="row view">

                                    <div class="traco"></div><!-- traço que separa um container do outro -->

                                    <section class="col-md-6 container-dois wow slideInLeft" data-wow-duration="2s"><!--colunaUm container 02-->
                                        
                                            
                                                <img  src="img/icon-security.png" class="icon-titulo icon-position01" />
                                          
                                           
                                                <h2 class="titulo-container titulo-position01">Como funciona?</h2>
                                           
                                            <div class="text-box text-box-position01">
                                                O GM-Senhas foi desenvolvido para conscientizar usuários sobre a segurança da informação. Temos como proposta reforçar a troca de senhas periodicamente. Para isso, oferecemos um gerador de senhas online juntamente com o sistema de agendamento. O agendamento funciona da sequinte maneira: você cadastra um email válido e seleciona uma data. Após isso, seleciona se deseja utilizar o serviço apenas uma vez ou periodicamente. Caso escolha receber email apenas uma vez, receberá um lembrete para trocar sua senha apenas no dia especificado no cadastro. Se escolher receber uma vez ao mês, o lembrete será enviado todo mês, partindo da data especificada no cadastro.
                                            </div>
                                       
                                        
                                    </section><!-- encerra colunaUM conteiner 02 -->
                                    
                                    <section class="col-md-6 container-dois  wow slideInRight" data-wow-duration="2s"><!--colunaDois container 02-->
                                        
                                        <img  src="img/icon-seguranca.png" class="icon-titulo icon-position02" />
                                            <h2 class="titulo-container titulo-position02">Segurança</h2>
                                       <div class="text-box text-box-position02">
                                           A senha é criada totalmente no navegador através da linguagem de programação Javascript, sendo que o servidor web não recebe nenhuma informação referente a senha gerada no formulário. Conforme dito anteriormente, o GM-Senhas não recebe nenhuma informação que diz respeito a senha do usuário, ou seja, o sistema não armazena a senha que está sendo gerada, o processamento é realizado inteiramente na máquina do usuário.

                                       </div>
                                    </section><!-- encerra colunaDois conteiner 02 -->
                                    
                                </div><!--encerra linha conteiner 02 -->
                                
                            </div><!-- encerra container 02 -->
                            
                            <section id="cadastro" class="container wow slideInRight" data-wow-duration="1s"><!-- inicia container 03 semântico -->
                                <div class="row view"><!-- inicia linha container tres -->
                                    <div class="traco"></div><!-- traço que separa um container do outro -->
                                    <div class="col-lg-12 container-tres"> <!-- inicia coluna container tres -->
                                        

                                             

                                      
                                        <img  src="img/icon-cadastro.png" class="icon-titulo icon-position03" />
                                        
                                            <h4 class="titulo-container ">Cadastro de email</h4>
                                            
                                            <p class="information-b3">Realize o cadastro para receber um email solicitando a geração de uma nova senha.</p>

                                                <form id="form-cadastro" class="form-cadastro" method="POST">
                                                    <fieldset>
                                                      
                                                     
                                                        <input type="text" id="nome-cadastro" name="cadastro-nome" placeholder="Nome:" />
                                                        <p id="alerta-nome"></p>
                                                        <input id="email-cadastro" type="text" name="cadastro-email" placeholder="Email:"/>
                                                        <p id="alerta-email"></p>
                                                        <label for="campo-data" class="information-b3">Em quanto tempo deseja ser relembrado? Favor, informe a data:</label>
                                                        <input  id="datepicker" type="text" name="cadastro-data" placeholder="Data:"/>
                                                        <p id="alerta-data"></p>
                                                            <p class="information-b3">Como quer ser lembrado?</p>
                                                              <label for="efetivo" class="information-b3 cadastro-hand-recuo">Uma vez ao mês:</label>
                                                                <input id="efetivo"  type="radio" name="opcao" value="1" checked />
                                                              <label for="uma-vez" class="information-b3 cadastro-hand-recuo">Apenas uma vez:</label>
                                                                <input id="uma-vez"  type="radio" name="opcao" value="0" />
                                                            <button type="button" id="envioCadastro" class="gerar btn-hand">Enviar</button>
                                                      
                                                        </fieldset>
                                                </form>
                                             <!-- div que contém a imagem gif a ser carregada cadastro de email -->
                                             <div id="carregando_envio" class="carregando"><img src="img/progressindicator.gif" width="75" /></div>

                                             <div id="retorno_envio" class="retorno bg-claro"></div>
                                        

                                    </div><!-- encerra coluna container tres -->
                                </div><!-- encerra linha container tres -->
                            </section><!-- encerra container 03 semântico -->
                            
                            <section id="contato" class="container wow slideInLeft" data-wow-duration="1s"><!-- inicia conteiner semântico bloco quatro -->
                                <div class="row view"><!-- linha referente ao container 4 -->
                                    <div class="traco"></div><!-- traço que separa um container do outro -->

                                <div class="col-md-12 container-tres"><!-- inicia coluna full bloco 4 -->

                                    <img  src="img/icon-contato.png" class="icon-titulo icon-position03" />
                                    
                                    <h5 class="titulo-container">Obrigado pela visita</h5>
                                        <p class="information-b3">Ajude-nos a melhorar, deixe sua opinião.</p>
                                   
                                    <!--Formulário -->
                                    <form id="formularioEmail" name="formularioEmail" class="form-cadastro">
                                           <fieldset>
                                            <!--Verificar as tags semânticas para colocar no form -->  
                                              <input id="nome" type="text" placeholder="Nome:" name="nome" required="required"/>
                                               <p id="alerta-nome-mensagem"></p>
                                              <input id="email" type="text" placeholder="Email:" name="email" required="required" />
                                               <p id="alerta-email-mensagem"></p>
                                              <input id="assunto" type="text" placeholder="Assunto:" name="assunto" required="required" />
                                               <p id="alerta-assunto-mensagem"></p>
                                              <textarea id="mensagem" placeholder="Mensagem:" name="mensagem" required="required" > </textarea>
                                               <p id="alerta-mensagem"></p>
                                              <input id="EnviarMensagem" name="EnviarMensagem" type="button" value="Enviar" class="gerar btn-hand"/>
                                          </fieldset>
                                    </form>
                                    <!-- div que contém a imagem gif a ser carregada envio de mensagem -->
                                    <div id="carregando_form" class="carregando"><img src="img/progressindicator.gif" width="75" /></div>

                                    <div id="retorno" class="retorno bg-claro"></div>
                           
                    <!--encerra formulário -->

                                </div><!-- encerra coluna full bloco 4-->
                                </div><!-- encerra linha referente ao bloco 4 -->
                            </section><!-- encerra conteiner semântico -->




                            <section id="facebook" class="container wow slideInLeft" data-wow-duration="1s"><!-- inicia conteiner semântico bloco quatro -->
                                <div class="row view"><!-- linha referente ao container 4 -->
                                    <div class="traco"></div><!-- traço que separa um container do outro -->

                                    <div class="col-md-12 container-face"><!-- inicia coluna full bloco 4 -->

                                        <img  src="img/vai.png" class="icon-titulo icon-position03" />

                                        <h5 class="titulo-container">Estamos no Facebook</h5>
                                        <p class="information-b3">Curta nossa página e fique por dentro das novidades sobre segurança da informação.</p>

                                        <!-- FACE -->
                                        <div class="like">
                                            <div class="fb-like" data-href="https://www.facebook.com/pages/GM-Senhas/1614428622169192?fref=ts" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                                        </div>
                                        <!-- FACE -->



                                    </div><!-- encerra coluna full bloco facePage-->
                                </div><!-- encerra linha referente ao bloco 4=facePage -->
                            </section><!-- encerra conteiner semântico -->
                      
                            </div><!--encerra role main conteúdo principal-->

                            <!-- rodapé -->
                            <footer class="bg-musgo">
                                <div class="row view">
                                    
                                    <div class="col-md-12 altura-rodape">
                                        
                                        <div class="box01-rodape"><p class="font-rodape">Apoio: <img src="img/icon-passaro-verde.fw.png" width="80" /></p></div>
                                        <div class="box02-rodape"><p class="font-rodape">Designed by: Élio Laender</br>Copyright 2015. All rights reserved</p></div>
                                     
                                    </div><!-- encerra coluna do rodape -->
                                </div><!-- encerra linha do rodape -->
                                
                            </footer><!--encerra rodape -->
                    </div><!-- encerra linha que está dentro da classe conteiner fluid -->
            </div><!-- enverra conteiner-fluid, onde todo a página está contida -->


        
		<!-- referente aos scripts JS utilizados no frameWork -->
            <script src="js/jquery.min.js" async></script>
		<script src="js/bootstrap.min.js" async></script>
		<script src="js/main.js" async></script>
                
                <!-- Trecho de código responsável por receber os dados do formulário -->
                    <!-- link jQuery da CDN do Google -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js" async></script>

                    <script>
                    $(function($){

                        // No id #gerar assim que clicar executa a função
                        $('#gerar').click(function(){

                            //caso a validação retornar true, será gerado a senha.
                            if(validaGerador()) {
                                gerador();
                            }

                        });
                    });


                    //Realiza os calculos para gerar senhas aleatórias.
                    function gerador(){
                        // variável que irá receber toda a informação do formulário gerador de senha.
                        var hashPrincipal="";
                        //recebe a quantidade de caracteres que o usuário deseja na composição da senha.
                        var quantidade = $('#quantidade').val();
                        quantidade = parseInt(quantidade);


                        //recebe caracteres extras informado pelo usuário
                        hashPrincipal = $('#extra').val();
                        //caso for selecionado o campo numero, coloca numeros na string
                        if($('#numero').is(':checked')){
                            hashPrincipal += "0123456789";
                        }
                        //caso for selecionado o campo letra, coloca letra maiúsculas e minúsculas na string
                        if($('#letra').is(':checked')){
                            hashPrincipal += "abcdefghijklnmopqrstwxyzABCDEFGHIJKLNMOPQRSTWXYZ";
                        }
                        //caso for selecionado o campo simbolo, coloca simbologias na string
                        if($('#simbolo').is(':checked')){
                            hashPrincipal += "~!@#$%^&*()-_=+[{]}\\|;:'\",<.>/?";
                        }

                        /*array.split, transforma uma string em vetor, sendo o primeiro argumento que que vai especificar o requisito de
                         * separação, ou seja, quando o primeiro argumento é atendido, ele corta a string e armazena em uma posição do novo
                         * vetor. O segundo argumento especifica o tamanho do vetor, desconsiderando o restante da string.
                         */
                        var vetorHashPrincipal = hashPrincipal.split("",hashPrincipal.length);





                        //recebe os valores aleatórios que serão gerados dinamicamente dentro do for.
                        var valorAleatorio;
                        //inicia nova senha como string.
                        var novaSenha = "";

                        for(var cont=0;cont<quantidade;cont++){

                            /* variável recebe um valor aleatório, sendo que todos os valores gerados representa uma posição no array,
                             * o valor retornado de hashPrincipal.length garante isso. Math.floor arredonda o valor gerado para o inteiro
                             * mais próximo, caso seja gerado algum valor decimal.*/
                            valorAleatorio = Math.floor(Math.random() * hashPrincipal.length);
                            novaSenha += vetorHashPrincipal[valorAleatorio];
                        }

                        //tester
                        document.getElementById('saida-senha').value = novaSenha;

                        <!-- teste -->

                        var password1       = $('#saida-senha');
                        var passwordsInfo   = $('#pass-info');


                        passwordStrengthCheck(password1,passwordsInfo);

                        function passwordStrengthCheck(password1, passwordsInfo){
                            var WeakPass = /(?=.{5,}).*/;
                            var MediumPass = /^(?=\S*?[a-z])(?=\S*?[0-9])\S{5,}$/;
                            var StrongPass = /^(?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])\S{5,}$/;
                            var VryStrongPass = /^(?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])(?=\S*?[^\w\*])\S{5,}$/;


                            if(VryStrongPass.test(password1.val())){
                                passwordsInfo.removeClass().addClass('vrystrongpass').html("Muito Forte! (Parabéns, essa é uma ótima senha)");
                                password1.removeClass().addClass('saida-muito-forte');
                            }
                            else if(StrongPass.test(password1.val())){
                                passwordsInfo.removeClass().addClass('strongpass').html("Forte! (Insira caracteres extras para tornar ainda mais forte)");
                                password1.removeClass().addClass('saida-forte');

                            }
                            else if(MediumPass.test(password1.val())){
                                passwordsInfo.removeClass().addClass('goodpass').html("Bom! (Insira letras maiúsculas)");
                                password1.removeClass().addClass('saida-media');

                            }
                            else if(WeakPass.test(password1.val())){
                                passwordsInfo.removeClass().addClass('stillweakpass').html("Um pouco fraca! (Informe mais caracteres para aumentar a força.)");
                                password1.removeClass().addClass('saida-pouco-fraca');
                            }
                            else{
                                passwordsInfo.removeClass().addClass('weakpass').html("Muito fraca! (Adicione mais digitos entre numeros e letras.)");
                                password1.removeClass().addClass('saida-muito-fraca');
                            }


                        }




                        <!-- encerra teste -->

                    }
                    </script>
                    <!-- encerra código responsável por receber dados do formulário -->

                    <script>
                        <!-- validação dos formulários -->
                        function validaGerador(){

                            var check = $('#alerta-check');
                            var quantidade = $("#alerta-quantidade");
                            check.html("");
                            quantidade.html("");

                            if(!$('#numero').is(':checked') && !$('#letra').is(':checked') && !$('#simbolo').is(':checked')){

                                check.removeClass().addClass('weakpass').html("* Favor, selecione ao menos uma opção.");
                                return false;

                            }

                            if(!$.isNumeric($('#quantidade').val())){
                                quantidade.removeClass().addClass('weakpass').html("* Informe somente numeros inteiros.");
                                return false;

                            }

                            $("#alerta-check").hide("slow");
                            return true;

                        }





                        //validação do formulário de cadastro de email
                        function validaCadastro(){

                            //recebe a data informada e transforma em array para validação.
                            var datainfo = $('#datepicker').val().split("/");
                            //instancia array para trabalhar com a data atual.
                            var dataAtual = new Date;


                            //recebe a tag com id
                            var alertaNome = $('#alerta-nome');
                            var alertaEmail = $('#alerta-email');
                            var alertaData = $('#alerta-data');
                            //zera o conteúdo toda vez que executa
                            alertaNome.html("");
                            alertaEmail.html("");
                            alertaData.html("");

                           // Regex validate date
                            var expressaoData = new RegExp(/((0[1-9]|[12][0-9]|3[01])\/(0[13578]|1[02])\/[12][0-9]{3})|((0[1-9]|[12][0-9]|30)\/(0[469]|11)\/[12][0-9]{3})|((0[1-9]|1[0-9]|2[0-8])\/02\/[12][0-9]([02468][1235679]|[13579][01345789]))|((0[1-9]|[12][0-9])\/02\/[12][0-9]([02468][048]|[13579][26]))/gi);
                            // Regex validate e-mail
                            var expressaoEmail = new RegExp(/^[a-zA-Z0-9._%+-]+@(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/gi);

                            // Faz as verificações de validação.
                           if($('#nome-cadastro').val() == ""){

                               alertaNome.removeClass().addClass('weakpass').html("* Insira seu nome.");
                                return false;
                            }

                           if(! $('#email-cadastro').val().match(expressaoEmail)) {
                                alertaEmail.removeClass().addClass('weakpass').html("* Email inválido. Ex: seuemail@dominio.com");
                                return false;
                            }

                            if( (!$('#datepicker').val().match(expressaoData)) || (datainfo[0] < dataAtual.getDate())  || (datainfo[1] < dataAtual.getMonth()+1) || (datainfo[2] < dataAtual.getFullYear())  ) {
                                alertaData.removeClass().addClass('weakpass').html("* Informe uma data no formato dia / mês / ano e que seja maior ou igual a data atual.");
                                return false;
                            }

                            return true;

                        }

                        function validaMensagem(){


                            var expressaoEmail = new RegExp(/^[a-zA-Z0-9._%+-]+@(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/gi);
                            var alertaNome = $('#alerta-nome-mensagem');
                            var alertaEmail = $('#alerta-email-mensagem');
                            var alertaAssunto = $('#alerta-assunto-mensagem');
                            var alertaMensagem = $('#alerta-mensagem');
                            //zera o conteúdo toda vez que executa
                            alertaNome.html("");
                            alertaEmail.html("");
                            alertaAssunto.html("");
                            alertaMensagem.html("");


                            // Faz as verificações de validação.
                            if($('#nome').val() == ""){

                                alertaNome.removeClass().addClass('weakpass').html("* Insira seu nome.");
                                return false;
                            }

                            if(! $('#email').val().match(expressaoEmail)) {
                                alertaEmail.removeClass().addClass('weakpass').html("* Email inválido. Ex: seuemail@dominio.com");
                                return false;
                            }

                            if($('#assunto').val() == ""){

                                alertaAssunto.removeClass().addClass('weakpass').html("* Qual o assunto?");
                                return false;
                            }

                            if($('#mensagem').val() == ""){

                                alertaMensagem.removeClass().addClass('weakpass').html("* Olá, não deixe este campo vazio, obrigado!");
                                return false;
                            }

                            return true;
                        }


                        <!-- encerra validação -->
                    </script>


                    <!--////////////////////////////javaScript(COMTÉM a função scrolltop)////////////-->	 
      <script type="text/javascript" src="jquery.min.js" async></script>
       <script type="text/javascript">
                 var $j = jQuery.noConflict();
                 $j(document).ready(function() {
                 $j(".voltarTopo").hide();
                 $j(function () {
                 $j(window).scroll(function () {
                 if ($j(this).scrollTop() >500) {
                 $j('.voltarTopo').fadeIn();
                 } else {
                 $j('.voltarTopo').fadeOut();
                 }
                 });
				$j('.voltarTopo').click(function() {
                 $j('body,html').animate({scrollTop:0},600);
                 }); 
                 });});
				 
				 
				 function parallax(bloco){
					$j("html,body").animate({
						scrollTop: $j("#"+bloco).offset().top - 40 /*calibra onde o scroll vai parar, tendo como referencia o inicio da div especificada. */
					},800);
				 }
				 
				  function para(bloco){
					$j("html,div").animate({
						scrollTop: $j("#"+bloco).offset().top - 800
					},800);
				 }
				 

             </script>
             
             
             
             <!-- teste menuMobile -->
             <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
             <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
            <script src="js/jquery.slicknav.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
                    $('#menu').slicknav();
            });
            </script>
            
            
            <!-- teste wow -->
                
                
                <script src="js/jquery.min"></script>
                <script src="js/wow.js"></script>
                  <script>
                    wow = new WOW(
                      {
                        animateClass: 'animated',
                        offset:       100,
                        callback:     function(box) {
                          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                        }
                      }
                    );
                    wow.init();
                    document.getElementById('moar').onclick = function() {
                      var section = document.createElement('section');
                      section.className = 'section--purple wow fadeInDown';
                      this.parentNode.insertBefore(section, this);
                    };
                  </script>
                  
                    <!-- referente ao input para data com calendário -->

                    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
                    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

                    <script>

                        var $j = jQuery.noConflict();
                    $(function() {
                      $j( "#datepicker" ).datepicker({
                          dateFormat: 'dd/mm/yy',
                          dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
                          dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                          dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                          monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                          monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                          nextText: 'Próximo',
                          prevText: 'Anterior'
                      });

                    });
                    </script>
                  
                   <!-- encerra code referente ao input para data com calendário -->




                    <!--código responsável pelo envio assíncrono do formuláio -->
                    <!-- script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script -->
                    <!-- envio de mensagem -->
                    <script type="text/javascript">

                        $(function(){
                             //Função que ao clicar no botão, irá fazer.
                            $("#EnviarMensagem").click(function(){

                                if(validaMensagem()) {
                                    //Irá esconder a div do formulario que é o formularioEmail, com efeito em slow.
                                    //  $("#formularioEmail").hide("slow");
                                    //Aqui diz que antes de enviar, irá aparecer a div carregando_form, com efeito slow.
                                    beforeSend:$("#carregando_form").show("slow");
                                    //Pegando os valores que foram digitados no formulário e colocando nas variáveis nome e email.
                                    var nome = $("#nome").val();
                                    var email = $("#email").val();
                                    var assunto = $("#assunto").val();
                                    var mensagem = $("#mensagem").val();


                                    //Enviando as variáveis com os valores para a página envia_formulario.php e criando uma nova função para pegar o retorno da página envia_formulario.php
                                    $.post("php/envia_formulario.php", {
                                        nome: nome,
                                        email: email,
                                        mensagem: mensagem,
                                        assunto: assunto
                                    }, function (result) {
                                        //Depois que foi completado o cadastro e tem a mensagem de retorno, esconde a div carregando_form que tem a barra de carregamento.
                                        complete:$("#carregando_form").hide("slow");
                                        //Aqui coloca o valor que retono na função get_retorno dentro da div retorno, e mostra a div com efeito em slow.
                                        $("#retorno").show("slow").text(result);
                                        $("#retorno").delay(4000).hide("slow");
                                        //   $("#formularioEmail").delay(2000).show("slow");

                                    });

                                    $("#nome").val("");
                                    $("#email").val("");
                                    $("#assunto").val("");
                                    $("#mensagem").val("");

                                }


                            });


                        });


                    </script>
                    <!-- encerra código do envio de mensagem -->
                    <!-- envio cadastro de email -->
                    <script type="text/javascript">

                        $(function(){
                            //Função que ao clicar no botão, irá fazer.
                            $("#envioCadastro").click(function(){


                                if(validaCadastro()) {


                                    //Irá esconder a div do formulario que é o formularioEmail, com efeito em slow.
                                    //$("#form-cadastro").hide("slow");
                                    //Aqui diz que antes de enviar, irá aparecer a div carregando_form, com efeito slow.
                                    beforeSend:$("#carregando_envio").show("slow");
                                    //Pegando os valores que foram digitados no formulário e colocando nas variáveis nome e email.
                                    var nome = $("#nome-cadastro").val();
                                    var email = $("#email-cadastro").val();
                                    var data = $("#datepicker").val();
                                    var frequencia = $("input[name='opcao']:checked").val();


                                    //Enviando as variáveis com os valores para a página envia_formulario.php e criando uma nova função para pegar o retorno da página envia_formulario.php
                                    $.post("php/cadastro_email.php", {
                                        nome: nome,
                                        email: email,
                                        data: data,
                                        frequencia: frequencia
                                    }, function (result) {
                                        //Depois que foi completado o cadastro e tem a mensagem de retorno, esconde a div carregando_form que tem a barra de carregamento.
                                        complete:$("#carregando_envio").hide("slow");
                                        //Aqui coloca o valor que retono na função get_retorno dentro da div retorno, e mostra a div com efeito em slow.
                                        $("#retorno_envio").show("slow").text(result);
                                        $("#retorno_envio").delay(4000).hide("slow");
                                        // $("#form-cadastro").delay(2000).show("slow");

                                    });


                                    //apagando o que foi digitado nos formulários
                                    $('#nome-cadastro').val("");
                                    $('#email-cadastro').val("");
                                    $('#datepicker').val("");


                                }




                            });



                        });


                    </script>

                    <!-- Plugin Facebook -->
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <!-- Encerra plugin facebook -->



               

	</body>
        
	</html>