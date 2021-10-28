<?php require('./connect.php'); ?> 

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../../assets/Mini-Logo.png">

    <!-- <link rel="stylesheet" href="../../global.css"> -->

    <link rel="stylesheet" href="../css/styles.css">

    <link rel="stylesheet" href="../css/perfil.css">

    <link rel="stylesheet" href="../css/add_quadros.css">

    <title>Perfil</title>

    <script src="../js/jquery-3.5.1.min.js"></script>

    <script src="../js/perfil.js"></script>

</head>

<body>

    <?php

     

        include("./header.php");

        if(!isset($_SESSION["id_user"])){

            echo "<script>window.location.replace('./singin');</script>";

            // header("location: singin");

        }else{

            //echo $_SESSION["username"];

    ?>

      <div class="container_perfil"><!-- container principal onde ficarão todos os elementos da página perfil -->

            <div class="controls_perfil"><!-- tela de controle do perfil onde se localizam os botões -->

                <div class="dados_user"><!-- abrindo a parte de cima da tela de controle, onde ficarão os dados do usuário-->

                    <h1><?php echo $_SESSION["username"]; ?></h1><!-- onde ficará o username do usuário -->

                    <h3><?php echo $_SESSION["email"]; ?></h3><!-- onde ficará o email do usuário -->

                </div><!--fechando os dados do usuário -->

                <div class="atalhos"><!-- container onde os botões do menu serão localizados -->

                    <div class="btn_atalho form_btn" id="btn_edit"><!-- container do botão -->

                        <span class="bg"></span><!-- fundo que será acionado com hover -->

                        <p>Editar Perfil</p></div><!-- titulo do botão e fechamento do botão -->

                    <div class="btn_atalho  form_btn" id="btn_pjex"><span class="bg"></span> <p>Projetos Excluidos</p></div>

                    <div class="btn_atalho  form_btn" id="btn_security"><span class="bg"></span> <p>Segurança</p></div>



                    <form method="post"><!--formulário para acionar a função logout  no php -->

                          <input type="submit" name="logout" class="logs form_btn" value="Logout"><!-- input submit para acionar a função -->

                    </form><!-- fechando formulário -->



                </div><!-- fechando atalhos -->

            </div><!-- fechando controls_perfil -->

            

            <div class="container_atalho"><!-- container onde ficarão as telas escolhidas -->

                 <div class="" id="apresent"><!-- tela de apresentação -->

                 <h1 class="screen_title">Seja Bem Vindo <?php echo $_SESSION["username"]; ?>!</h1><!-- titulo da tela com o nome de usuário --> 

                 </div><!-- fechando tela de apresentação -->

                 

                <div class="ata_select" id="edit_perfil"><!-- abrindo tela selecionada -->

                <h1 class="screen_title">Editar Perfil</h1><!-- titulo da tela selecionada -->

                <div class="screen_exibe"><!-- container onde ficará o conteúdo da tela -->

                    <form class="perfil_edit" action="" method="post"><!-- formulário para fazer updates no banco de dados -->

                        <label class="lbl_edit" for="inp_user">Nome de usuário</label><br><br><!-- label que representará o titulo do input -->

                        <input type="text" id="inp_user" name="new_username" class="input" onClick='this.select();' value="<?php echo $_SESSION["username"]; ?>"  placeholder="Nome de usuário" minlength="6" maxlength="45" required><!-- input que receberá as informações atuais do usuário e utilizará os dados novos para atualizar os dados na tabela -->

                        <br><br>

                        <label for="sub_user" class="form_btn btn_reg" id="btn_log"><!-- label container do botão que acionará o input submit invisivel dentro da label -->

                                <input type="submit" id="sub_user" name="upd_user" value="" style="display:none;"><!-- input submit invisivel -->

                                 <span class="bg"></span><!-- fundo que será acionado com hover -->

                                 <p>Salvar alteração</p><!-- titulo do botão -->

                        </label><!-- fechando o container do botão -->

                        <br><br> <hr><br><!-- linha horizontal para uma divisão -->

                        <div class="new_password"><!-- container para troca se password-->

                            <input type="checkbox" name="" id="btn_pass"><!-- checkbox que faz com que o container password apareça -->

                            <label for="btn_pass">Trocar senha</label><br><br><!-- label que aciona a checkbox acima -->



                        <div class="container_password"><!-- container password que vai aparecer, inicialmente escondido -->

                            <label class="lbl_edit" for="inp_pass">Senha Atual:</label><br><br><!-- titulo do input -->

                        <input type="password" id="inp_pass" class="input" onClick='this.select();' placeholder="Senha atual" name="pass_atual"> <i class="fas fa-eye" id="hide_pass"></i><i class="fas fa-eye-slash" id="show_pass"></i> <span class="pass_view">Mostrar Senha</span> <!-- input password com icone para mostrar a senha e um titulo para mostrar o valor do input -->

                        <br><br>



                        <label class="lbl_edit" for="inp_newpass">Nova Senha:</label><br><br>

                        <input type="password" id="inp_newpass" class="input" onClick='this.select();' placeholder="Senha nova" name="pass_new"> <i class="fas fa-eye" id="hide_newpass"></i><i class="fas fa-eye-slash" id="show_newpass"></i><span class="pass_view">Mostrar Senha</span>  

                        <br><br>



                        <label class="lbl_edit" for="conf_newpass">Confirmar Nova Senha:</label><br><br>

                        <input type="password" id="conf_newpass" class="input" onClick='this.select();' placeholder="Confirmar Senha"> <i class="fas fa-eye" id="hide_confpass"></i><i class="fas fa-eye-slash" id="show_confpass"></i><span class="pass_view">Mostrar Senha</span>  

                        <br><br>

                        <label for="sub_pass" class="form_btn btn_reg" id="btn_log">

                                       <input type="submit" id="sub_pass" name="upd_pass" value="" style="display:none;">

                                         <span class="bg"></span>

                                          <p>Salvar nova senha</p>



                        </label>

                        </div><!-- fechando container password -->

                        </div><!-- fechando container new_password -->

                    </form><!-- fechando formulário de update de senha -->

                    <!-- Update no usuário -->

                    <?php

                        //Trocar nome de usuário

                        if(isset($_POST["upd_user"])){

                            $new_username=$_POST["new_username"];/*capaturando as informações passadas pelo input com esse name*/

                            $id_user=$_SESSION["id_user"];/*capturando o id do usuário passado pela sessão via singin*/

                            $sql="UPDATE usuarios set APELIDO='$new_username' WHERE ID_USUARIO=$id_user";/*troca o valor do username do usuário pelo valor na variavel new_username via id do usuário*/

                            $res=mysqli_query($con,$sql);/*executa o codigo em sql*/

    

                            if($res){/*se res for executado, troca o valor da variavel da sessão e recarrega a página*/

                                $_SESSION["username"]=$new_username;

                                echo "<script>window.location.replace('http://".$serv."src/php/perfil');</script>";

                            }else{

                                echo "<script>alert('não foi possivel fazer a troca de username');</script>";

                            }

                        }

                        //Trocando Password

                        if(isset($_POST["upd_pass"])){

                            $pass_atual=md5($_POST["pass_atual"]);/*capaturando as informações passadas pelo input com esse name*/

                            $pass_new=md5($_POST["pass_new"]);/*capaturando as informações passadas pelo input com esse name*/

                            $id_user=$_SESSION["id_user"];/*capturando o id do usuário passado pela sessão via singin*/



                            $sql_log="SELECT * FROM usuarios WHERE ID_USUARIO=$id_user";/*seleciona todos os dados da tabela usuários pelo id*/

                            $res_log=mysqli_query($con,$sql_log);/*executa o codigo em sql*/

                            $row_info=mysqli_fetch_assoc($res_log);/*separa todas as informações em um vetor*/



                            if($row_info["SENHA"]==$pass_atual){/*verifica se a senha cadastrada é igual a senha que passada na senha_atual*/

                                $sql="UPDATE usuarios set SENHA='$pass_new' WHERE ID_USUARIO=$id_user";/*troca os dados do campo SENHA na tabela pelo valor da pass_new*/

                                $res=mysqli_query($con,$sql);/*executa o codigo em sql*/

        

                                if($res){/*se o res for executado com sucesso, exibe a mensagem em alert e recarrega a página*/

                                   echo "<script>alert('Sua Senha foi alterada!');</script>";

                                    echo "<script>window.location.replace('http://".$serv."src/php/perfil');</script>";

                                }else{/*caso contrário exibe uma mensagem de não foi possivel cadastrar*/

                                    echo "<script>alert('não foi possível cadastrar');</script>";

                                }

                            }else{/*se as senhas não forem iguais, não permite fazer a troca*/

                                echo "<script>alert('A senha atual não corresponde com que foi passada');</script>";

                            }

                        }

                    ?>

                 </div>

              

                </div>

                <div class="ata_select" id="proj_exc">

                    <h1 class="screen_title">Projetos Excluidos</h1>

                    <div class="agendas screen_exibe">

                    <?php

                   // Exibe os projetos excluidos na página.(mesmo codigo da página de add_agendas para imprimir as rotinas cadastradas)

                        $id_user=$_SESSION['id_user'];

                        $sql="SELECT * FROM usuarios_rotinas WHERE ID_USUARIO=$id_user AND STATUS='disabled' ORDER by TITULO_ROTINA ASC";/*seleciona todas as rotinas cadastradas do usuário com o status disabled, capturados pelo id do usuário*/

                        $res=mysqli_query($con,$sql);

                        $lin=mysqli_num_rows($res);

                        if($lin>0){

                            // Exibe as rotinas criadas na página.

                            while($linha=mysqli_fetch_array($res)){

                                    if($linha["ROTINA_COR"]=="#fff"){

                                        echo"<a href=./proj_disab.php?id_tab=".$linha["ID_ROTINA"]." target='_self' class='schedules' style='background:".$linha["ROTINA_COR"].";'>

                                        

                                        <h1 class='schedule_titulo' style='color:black;'>

                                            ".$linha['TITULO_ROTINA']."

                                        </h1>

                                        <span style='display:none'>".$linha["ID_ROTINA"]."</span>

                                        </a> ";

                                    }else{

                                        echo"<a href=./proj_disab.php?id_tab=".$linha["ID_ROTINA"]." target='_self' class='schedules'  style= 'background:".$linha["ROTINA_COR"].";'>

                                        

                                        <h1 class='schedule_titulo' >

                                        ".$linha['TITULO_ROTINA']."

                                        </h1>

                                        <span style='display:none'>".$linha["ID_ROTINA"]."</span>

                                        </a> ";

                        

                                    }

                                }

                             }

                      ?>

                    </div>

                </div>

                <!-- <div class="ata_select" id="ticket">

                <h1 class="screen_title">  Tickets</h1>

                </div> -->

                <div class="ata_select" id="security">

                <h1 class="screen_title">Perguntas de Segurança</h1>

                <div class="screen_exibe">

                    <form class="perfil_edit" action="" method="post">

                        <label class="lbl_edit" for="inp_answer1">Primeira escola em que estudou?</label><br><br>

                        <input type="text" id="inp_answer1" name="inp_answer1" class="input" onClick='this.select();' value="<?php echo $_SESSION["p1"]; ?>"  placeholder="Primeira escola em que estudou" required>

                        <br><br>

                        <label class="lbl_edit" for="inp_answer2">Nome do Melhor Amigo?</label><br><br>

                        <input type="text" id="inp_answer2" name="inp_answer2" class="input" onClick='this.select();' value="<?php echo $_SESSION["p2"]; ?>"  placeholder="Nome do Melhor Amigo" required>

                        <br><br>

                        <label class="lbl_edit" for="inp_answer3">Nome da mãe?</label><br><br>

                        <input type="text" id="inp_answer3" name="inp_answer3" class="input" onClick='this.select();' value="<?php echo $_SESSION["p3"]; ?>"  placeholder="Nome da mãe" required>

                        <br><br>

                        <label for="upd_answer" class="form_btn btn_reg" id="btn_log">

                                <input type="submit" id="upd_answer" name="upd_answer" value="" style="display:none;">

                                 <span class="bg"></span>

                                 <p>Salvar alteração</p>

                        </label>

                    </form>

                </div>

                </div>

                    <!-- Update no usuário -->

                    <?php

                        //Trocar respostas de segurança de usuário

                        if(isset($_POST["upd_answer"])){

                            $inp_answer1=$_POST["inp_answer1"];

                            $inp_answer2=$_POST["inp_answer2"];

                            $inp_answer3=$_POST["inp_answer3"];

                            $id_user=$_SESSION["id_user"];

                            $sql="UPDATE usuarios set FIRST_SCHOOL='$inp_answer1', BEST_FRIEND='$inp_answer2', MOM='$inp_answer3' WHERE ID_USUARIO=$id_user";/*troca as  perguntas do usuário pelo valor das variaveis*/

                            $res=mysqli_query($con,$sql);

    

                            if($res){/*se a res for executada com sucesso, atualiza os valores das variaveis da sessão e recarrega a página*/

                                $_SESSION["p1"]=$inp_answer1;

                                $_SESSION["p2"]=$inp_answer2;

                                $_SESSION["p3"]=$inp_answer3;

                                echo "<script>alert('Respostas atualizadas com sucesso!');</script>";

                                echo "<script>window.location.replace('http://".$serv."src/php/perfil');</script>";

                            }else{/*caso contrário exibe a mensagem*/

                                echo "<script>alert('Não foi possivel atualizar');</script>";

                            }

                        }

                    ?>

                 </div>

              

                </div>

    

    <footer>

            <?php include("./footer.php"); ?>

        </footer>

</body>

</html>

<script>

       $("#btn_security").click(function(){

        $(".ata_select").hide();

        $("#apresent").hide();

        $("#security").show();

    })

</script>

<?php 

            if(isset($_POST["logout"])){/*função de logout, destroi as variaveis da sessão e renova a página para destruir a sessão que estava iniciada*/

                session_unset();

                session_destroy();

                echo "<script>location.reload();</script>";

            }

        }

?>