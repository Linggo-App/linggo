<?php 

    require('./connect.php'); 

    if(isset($_SESSION["username"])){/*verifica se o nome de usuário foi passado pela sessão*/
        echo  "<script>window.location.replace('http://".$serv."src/php/routines.php');</script>";
    }

?> 

<!DOCTYPE html>

<html>



    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <meta http-equiv="refresh" content="1"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/styles.css">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet"> 

        <script src="../js/jquery-3.5.1.min.js"></script>

        <script src="../js/valid.js"></script>

    </head>

    <?php include("./header.php"); ?>

    <body>

        <div id="main-container"><!-- container principal -->

            <div id="align-form"><!-- div para a linhar o formulário -->

                <form id="table-login" action="" method="post"><!-- abrindo formulário -->

                        <div id="login-container"><!-- abrindo corpo da tabela -->

                            <div class="form-title"><!-- div que representa o titulo da tela -->

                                <p>Já é cadastrado?</p><!-- titulo da tela -->

                                <p>Então entre com seus dados de login e senha.</p><!-- subtitulo da tela -->

                            </div><!-- fechando container do titulo da tela -->

                            <input type="email" name="login-email" placeholder="Email" maxlength="45" required><!-- campo de texto para informar email -->

                            <input type="password" name="login-senha" placeholder="Senha" required ><!-- campo de texto para informar senha-->

                            <a href="./rec_senha.php" target="_blank">Esqueci a senha</a><!-- link que leva para a página de recuperação de senha -->

                            

                            <!-- <label for="log" class="form_btn btn_reg" id="btn-submit">container para o botão linkado com o input submit -->

                                <!-- <input type="submit" id="log" name="login" value="Login" style="display:none;">input submit invisivel -->
                            <input type="submit" class="btn-orange" name="login" value="Logar" ><!-- input submit invisivel -->

                                    <!-- <p>Login</p>titulo do botão -->

                            <!-- </label>fechando a label e container do botão -->
                            <p>
                                Ainda não é registrado? <a href="./singup.php" target="_self">Registrar-se</a>
                            </p>
                        </div><!-- fechando corpo da tabela -->

                </form><!-- fechando o formulário -->

            </div><!-- fechando div de alinhamento -->

        </div><!-- fechando div container principal -->

        <footer>

            <?php include("./footer.php"); ?>

        </footer>

    </body>

</html>

<!--Cadastro-->

<?php

 // $con=mysqli_connect("localhost","root","","linggo") or die ("Sem conexão");



  

  //Login



  if(isset($_POST["login"])){



    $email_log=$_POST["login-email"];/* captura o email de login do usuário */

    $password_log=$_POST["login-senha"];/*captura a senha colocada no campo senha*/



    $sql_log="SELECT * FROM usuarios WHERE EMAIL='$email_log'";/*seleciona todos dados da tabela de usuário com base no email que o usuário forneceu */

    $res_log=mysqli_query($con,$sql_log);/*executa o codigo em sql*/

    $lin_log=mysqli_num_rows($res_log);/*verifica quantas linhas fora encontradas durante a consulta*/

    $row_info=mysqli_fetch_assoc($res_log);/*separa todas as informações em um vetor*/



    if($lin_log>0){/*verifica se foi encontrado alguma informação com base no email*/

        if(md5($password_log)==$row_info["SENHA"]){/*verifica se a senha fornecida pelo usuário é igual ao que está cadastrada*/

          session_start();//inicia a sessão

          //criando variaveis que serão passadas para outras páginas

            $_SESSION["id_user"]=$row_info["ID_USUARIO"];

            $_SESSION["p1"]=$row_info["FIRST_SCHOOL"];

            $_SESSION["p2"]=$row_info["BEST_FRIEND"];

            $_SESSION["p3"]=$row_info["MOM"];



         echo "<script>window.location.replace('http://".$serv."src/php/routines');</script>";/*redireciona o usuário para a página de routines */



          //-----



          //Para o header (informações que serão passadas para o header)

            $_SESSION["username"]=$row_info["APELIDO"];

            $_SESSION["email"]=$row_info["EMAIL"];

          //--------

          

        }else{/*se a senha estiver inválida, mostrará essa menssagem*/

            echo "<script>alert('USUÁRIO OU SENHA INVALIDOS!')</script>";

        }

    }else{/*se o email estiver inválido, mostrará essa menssagem*/

        echo "<script>alert('USUÁRIO E SENHA NÃO CADASTRADOS')</script>";

    }



    //session_destroy();

}



//Cadastro

     if(isset($_POST["register"])){

    

        $nick=$_POST["register-nome"];/* captura o nickname de cadastro do usuário */

        $email=$_POST["register-email"];/* captura o email de cadastro do usuário */

        $first_school=$_POST["first_school"];/* captura a primeira escola de cadastro do usuário */

        $bf=$_POST["bf"];/* captura o melhor amigo de cadastro do usuário */

        $mom=$_POST["mom"];/* captura o nome da mãe de cadastro do usuário */

        $password=md5($_POST["register-senha"]);/* captura a senha de cadastro do usuário */



        $sql_ver="SELECT EMAIL FROM usuarios WHERE EMAIL='$email'";/*seleciona todos dados da tabela de usuário com base no email que o usuário forneceu */

        $res=mysqli_query($con,$sql_ver);/*executa o codigo em sql*/

        $lin=mysqli_num_rows($res);/*verifica quantas linhas fora encontradas durante a consulta*/

       

        if($lin>0){/*verifica se foi encontrado alguma informação com base no email se for verdadeiro apresenta essa imagem*/

            echo "<script>alert('Esse email já foi cadastrado!')</script>";

        }else{/*se não executa o codigo para cadastrar*/



        /*insere os dados fornecidos pelo usuário na tabela usuários do banco de dados*/

        $sql="INSERT INTO usuarios (ID_USUARIO,APELIDO,EMAIL,SENHA,FIRST_SCHOOL,BEST_FRIEND,MOM) VALUES (null,'$nick','$email','$password','$first_school','$bf','$mom')";

        $res=mysqli_query($con,$sql);/*executa o codigo em sql*/



        if($res){/*se a variavel res for executada, exibe a mensagem */

            echo "<script>alert('Cadastrado com Sucesso!')</script>";

        }else{/*se não exibe essa mensagem*/

            echo "<script>alert('Falha ao Cadastrar!')</script>";

            }

        }

     }

?>

