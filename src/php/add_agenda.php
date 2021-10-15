<?php 
    require('./connect.php'); 
   // session_start();
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../global.css">
    <link rel="stylesheet" href="../css/add_quadros.css">
     <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/arquivo.js"></script>
</head>
<?php include("./header.php"); ?> <!-- imprime o header de um arquivo externo -->
<body>
    <?php 
    /*verifica se o usuário logou na página para acessar essa página, caso não tenha logado, ele é direcionado para a página de login*/
        if(!isset($_SESSION["id_user"])){
          //  header("location: cadastro");
           echo "<script>window.location.replace('http://".$serv."src/php/cadastro');</script>";
        }else{
    ?>
    <div class="div_consulta"><!-- abrindo container -->
        <h1 class="titulo">Todos os projetos</h1><!-- titulo da página sendo exibido dentro do container -->
    </div><!-- fechando container -->
    <div class="agendas"><!-- abrindo container dos projetos -->
        <div class="create_schedule schedules"><!-- abrindo container do botão para criar os projetos, ou os botão para abrir o modal -->
          <i class="fas fa-plus-circle"></i><!-- icone de + retirado do site fonteawesome -->
        </div><!-- fechando container -->
        
        <!-- estrutura padrão dos projetos que serão criados dinâmicamente -->
        <!-- <div class="schedules"> - abrindo container com a class schedules, a classe padrão dos projetos
          <h1 class="schedule_titulo">- o titulo informado pelo usuário na criação dos projetos, será impresso nesse h1
              Titulo
          </h1>
        </div>- fechando container do projeto -->
        <?php
             // $con=mysqli_connect("localhost","root","","linggo") or die ("Sem conexão");
              $id_user=$_SESSION['id_user']; //id do usuário passado após o login ter sido efetuado
              $sql="SELECT * FROM usuarios_rotinas WHERE ID_USUARIO=$id_user AND STATUS='active' ORDER by TITULO_ROTINA ASC"; /*comando em sql para fazer a consulta dos projetos utilizando o id do usuário como base de consulta e exibe os resultados em ordem alfabética*/ 
              $res=mysqli_query($con,$sql);//a variavel res executa o codigo em sql que foi passado na variavel anterior
              $lin=mysqli_num_rows($res); // a variavel lin verifica quantas linhas cadastradas ele encontrou
           // echo "<script>alert('".$lin."')</script>";
              if($lin>0){ // se for maior do que 0 ele então executa o codigo abaixo exibindo os dados com a estrutura html da class schedules
                  //Exibe as rotinas criadas na página.
                while($linha=mysqli_fetch_array($res)){ // cria um loop while, var linha recebe um vetor com os resultados da consulta e o loop acessa esses dados
                           if($linha["ROTINA_COR"]=="#fff"){ //verifica se a cor do projeto é branco
                               echo"<a href=./rotina?id_tab=".$linha["ID_ROTINA"]." target='_self' class='schedules' style='background:".$linha["ROTINA_COR"].";'> 
                             
                               <h1 class='schedule_titulo' style='color:black;'>
                                   ".$linha['TITULO_ROTINA']."
                               </h1>
                               <span style='display:none'>".$linha["ID_ROTINA"]."</span>
                             </a> ";
                           }else{ /*se for branco, o titulo do projeto assumirá a cor preta e as bordas serão colocadas no projeto, caso contrário...*/
                               echo"<a href=./rotina?id_tab=".$linha["ID_ROTINA"]." target='_self' class='schedules'  style= 'background:".$linha["ROTINA_COR"].";'>
                               
                               <h1 class='schedule_titulo' >
                               ".$linha['TITULO_ROTINA']."
                               </h1>
                               <span style='display:none'>".$linha["ID_ROTINA"]/*a identificação do projeto é passado em um elemento invisivel. para que ao ser clicado esse id possa ser usado para imprimir as rotinas referente ao projeto na páfina de rotinas */."</span>
                             </a> ";
               
                           } /*imprime a estrutura html da class schedules passando os dados capturados no comando Select na variavel sql, o container fica em um link com direcionamento para a página de rotina.php*/
                       }
                }
      
            
           // $con=mysqli_connect("localhost","root","","linggo") or die ("Sem conexão");
           //Cadastra a rotina no banco de dados
            if(isset($_POST["cad_proget"])){// verifica se o botão de submit do form foi pressionado, para só então executar os comandos do php
                
                $titulo=$_POST["titulo"];//captura o titulo que foi digitado pelo usuário no input type text
                $cor=$_POST["color_agenda"];//captura o valor do input radio que está checkado
                $id_user=$_SESSION['id_user'];//captura o id do usuário que foi passado pela sessão, para que possa ser usado para cadastrar a rotina no banco de dados
        
               // echo"<script>alert('".$titulo.'\n'.$cor.'\n'.$id_user."')</script>";

               //Faz a validação antes de cadastrar
               $sql="SELECT * FROM usuarios_rotinas WHERE ID_USUARIO=$id_user AND STATUS='active' ORDER by TITULO_ROTINA ASC";//comando em sql para consultar as rotinas cadastradas
               $res=mysqli_query($con,$sql);//executa o comando em sql acima
               $lin=mysqli_num_rows($res);//verifica quantas linhas foram encontradas com o resultado da consulta
              // echo "<script>alert('".$lin."')</script>";

                if($lin>=5){/*se lin retornar um valor maior do que 5, ele exibe a mensagem na caixa de alerta*/
                    echo "<script>alert('Você excedeu o limite de projetos exclua alguns para poder adicionar novos projetos!')</script>";
                   //echo "<script>alert('".$lin."')</script>";
                }else{/*caso contrário executará o cadastro no banco de dados*/
                $sql="INSERT INTO usuarios_rotinas (ID_USUARIO, ID_ROTINA, TITULO_ROTINA, ROTINA_COR, STATUS) VALUE($id_user,null,'$titulo','$cor', 'active')";/*comando em sql para cadastrar utilizando os dados que foi passado pelo usuário no formulário*/
                $res=mysqli_query($con,$sql);
                $lin=mysqli_affected_rows($con);/*captura quantas linhas foram cadastradas*/
          
        
                 if($lin>0){/*se for maior do que 0, vai fazer um reload na página para que todas as rotinas sejam impressas novamente na página*/

                echo "<script>window.location.replace('http://".$serv."src/php/add_agenda');</script>";

              }else{//caso contrário, exibe uma mensagem de que ouve um erro ao fazer o cadastro
                 echo "<script>alert('erro ao cadastrar')</script>";
              }
          
                }
                
                
              
          
              mysqli_close($con);//fecha a conexão com o banco de dados
           }
            

        ?>
        <!-- <div class="settings">
            <i class="fas fa-times close_settings"></i>
        </div> -->

    </div><!-- fechando o container das agendas -->
    
    <section class="lightbox"><!-- abrindo container da lightbox onde ficará o modal -->
            <div class="modal"><!--abrindo container do modal -->
                <i class="fas fa-times close"></i><!-- icone de close -->
                <form method="POST" action="" id="criar_proj" class="add_agenda" style="flex-direction: row;"><!-- formulário de envio para o usuário -->
                 <span class="add_agenda container_form form_part1"><!-- container para agrupar os elementos dentro do formulário -->
                    <div class="cor"><!-- abrindo container de cores -->
                        <h1 class="form_btn open_colors"><!-- esse h1 será utilizado como um botão para abrir o modal_color -->
                        <span class="bg"></span><!-- fundo para o botão que será acrecentando assim que for necessário -->    
                        <p><i class="fas fa-palette"></i> Cor</p></h1><!-- para finalizar um icone de paleta de cores retirada do fontawesome para ficar junto com a escrita de cor no botão -->
                        <div class="cores modal_color" id="pallet"><!-- modal_color onde ficarão as cores que poderão ser selecionadas -->
                        <i class="fas fa-times close_color"></i><!-- icone de close -->
                            
                            <div class="color_content"><!-- container onde serão colocados as cores para escolha do usuário -->
                                <label for="color1"><!-- label que está ligado ao input radio -->
                                    <input type="radio" id="color1" name="color_agenda" value="#fff" checked> <!-- input radio com id color para ficar ligado ao label, o mesmo name para todos, no caso apenas um input pode ser selecionado e valor que corresponde a cor que será cadastrada na tabela -->

                                    <span style="background-color:#fff ;"></span><!-- span que representa a cor que está no input pronto para ser cadastrado -->
                                </label><!-- fechando a label que está ligado ao input radio -->
                                
                                <label for="color2">
                                    <input type="radio" id="color2" name="color_agenda" value="#18D97F">

                                    <span style="background-color:#18D97F;">
                                    
                                    </span>
                                </label>
                                <label for="color3">
                                    <input type="radio" id="color3" name="color_agenda" value="#8C530D">

                                    <span style="background-color:#8C530D;">
                                    
                                    </span>
                                </label>
                                <label for="color4">
                                    <input type="radio" id="color4" name="color_agenda" value="#F25922">

                                    <span style="background-color:#F25922;">
                                    
                                    </span>
                                </label>
                                <label for="color5">
                                    <input type="radio" id="color5" name="color_agenda" value="#BF544B">

                                    <span style="background-color:#BF544B;">
                                    
                                    </span>
                                </label>
                                <label for="color6">
                                    <input type="radio" id="color6" name="color_agenda" value="#D91818">

                                    <span style="background-color:#D91818;">
                                    
                                    </span>
                                </label>
                                <label for="color7">
                                    <input type="radio" id="color7" name="color_agenda" value="#242259">

                                    <span style="background-color:#242259;">
                                    
                                    </span>
                                </label>
                                <label for="color8">
                                    <input type="radio" id="color8" name="color_agenda" value="#23518C">

                                    <span style="background-color:#23518C;">
                                    
                                    </span>
                                </label>
                                <label for="color9">
                                    <input type="radio" id="color9" name="color_agenda" value="#5FC2D9">

                                    <span style="background-color:#5FC2D9;">
                                    
                                    </span>
                                </label>
                                <label for="color10">
                                    <input type="radio" id="color10" name="color_agenda" value="#F2AE30">

                                    <span style="background-color:#F2AE30;">
                                    
                                    </span>
                                </label>
                                <label for="color11">
                                    <input type="radio" id="color11" name="color_agenda" value="#D93B3B">

                                    <span style="background-color:#D93B3B;">
                                    
                                    </span>
                                </label>
                                <label for="color12">
                                    <input type="radio" id="color12" name="color_agenda" value="#F24B59">

                                    <span style="background-color:#F24B59;">
                                    
                                    </span>
                                </label>
                                <label for="color13">
                                    <input type="radio" id="color13" name="color_agenda" value="#666CD9">

                                    <span style="background-color:#666CD9;">
                                    
                                    </span>
                                </label>
                                <label for="color14">
                                    <input type="radio" id="color14" name="color_agenda" value="#02734A">

                                    <span style="background-color:#02734A;">
                                    
                                    </span>
                                </label>
                                <label for="color15">
                                    <input type="radio" id="color15" name="color_agenda" value="#F2C335">

                                    <span style="background-color:#F2C335;">
                                    
                                    </span>
                                </label>
                                <label for="color16">
                                    <input type="radio" id="color16" name="color_agenda" value="#F2AFA0">

                                    <span style="background-color:#F2AFA0;">
                                    
                                    </span>
                                </label>
                            </div><!-- fechando o container das cores -->
                            
                            <span id="ok_btn" class="form_btn"><!-- container para o botão de ok que vai aplicar a cor-->
                            <span class="bg"></span><!-- fundo para o botão que será acrecentando assim que for necessário --> 
                                <p>Ok</p><!-- titulo do botão -->
                            </span><!-- fechando o container do botão -->
                            
                        </div><!-- fechando o modal_color -->
                      
                    </div><!-- fechando o container de cor -->
                    
                    <label class="input" for="titulo"><!-- abrindo a label que acionará o input text-->
                        <input type="text" placeholder=" " id="titulo" name="titulo" maxlength="15" required><!-- input text que receberá o valor a ser passado para a variavel no php para registrar na tabela -->
                        <span class="place">Titulo</span><!-- titulo que funcionará como placeholder e se movimentará dentro da label quando o input receber um foco -->
                    </label><!-- fechando a label do input -->
                    
                    <label for="cad_proget" class="form_btn" style="width:100%;"><!-- abrindo label que estará ligado ao input submit -->
                        <input type="submit" id="cad_proget" name="cad_proget" value="" style="display:none;"><!-- input submit que ficará invisivel na página mas está responsavel por enviar os dados do formulário para o php -->
                        <span class="bg"></span><!-- fundo para o botão que será acrecentando assim que for necessário --> 
                        <p>Cadastrar</p><!-- titulo do botão -->
                    
                     </label><!-- fechando o botão de cadastro -->
                
                </form><!-- fechando o formulário -->
                <div class="overlay"></div><!-- overlay fundo escuro que fica atrás do modal -->
            </div>  <!-- fechando modal -->
        </section><!-- fechando a sessão de lightbox -->

        <div class="overlay"></div>
        <footer>
            <?php include("./footer.php"); ?><!-- footer sendo incluido de um arquivo externo -->
        </footer>
</body>
</html>
<?php 
    }


 //  session_destroy();
?>
