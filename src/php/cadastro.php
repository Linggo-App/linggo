<<<<<<< HEAD
<?php 
    require('./connect.php'); 
    //session_start();
?> 
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/register.css">
        <link rel="stylesheet" href="../../global.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet"> 
        <script src="../js/jquery-3.5.1.min.js"></script>
        <script src="../js/valid.js"></script>
    </head>
    <?php include("./header.php"); ?>
    <body>
        <div id="login-register-page"><!-- container principal -->
            <div id="align-form"><!-- div para a linhar o formulário -->
                <form id="table-login" action="" method="post"><!-- abrindo formulário -->
                    <table><!-- abrindo tabela -->
                        <tbody id="login-container"><!-- abrindo corpo da tabela -->
                            <tr><!-- abrindo a linha da tabela -->
                                <td><!-- abrindo cedula da tabela -->
                                    <div class="title-login-register"><!-- div que representa o titulo da tela -->
                                        <p>Já é cadastrado?</p><!-- titulo da tela -->
                                        <p>Então entre com seus dados de login e senha.</p><!-- subtitulo da tela -->
                                    </div><!-- fechando container do titulo da tela -->
                                </td><<!-- abrindo corpo da tabela -->
                            </tr><!-- fechando linha da tabela -->
                            <tr><!-- abrindo a linha da tabela -->
                                <td><!-- abrindo cedula da tabela -->
                                    
                                    <input type="email" name="login-email" placeholder="Email" maxlength="45" required><!-- campo de texto para informar email -->
                                    <input type="password" name="login-senha" placeholder="Senha" required ><!-- campo de texto para informar senha-->
                                    <a href="./rec_senha.php" target="_blank" style="display: block; padding:20px 0px;">Esqueci a senha</a><!-- link que leva para a página de recuperação de senha -->
                                    
                                    <label for="log" class="form_btn btn_reg" id="btn_log"><!-- container para o botão linkado com o input submit -->
                                       <input type="submit" id="log" name="login" value="" style="display:none;"><!-- input submit invisivel -->
                                         <span class="bg"></span><!-- fundo que será acionado com hover -->
                                          <p>Login</p><!-- titulo do botão -->
                                     </label><!-- fechando a label e container do botão -->
                                </td><!-- fechando cedula da tabela -->
                            </tr><!-- fechando linha da tabela -->
                        </tbody><!-- fechando corpo da tabela -->
                    </table><!-- fechando a tabela -->
                </form><!-- fechando o formulário -->

                <form id="table-register" action="" method="post" ><!-- abrindo formulário -->
                    <table><!-- abrindo tabela -->
                        <tbody id="register-container"><!-- abrindo corpo da tabela -->
                            <tr><!-- abrindo linha da tabela -->
                                <td><!-- abrindo cedula da tabela -->
                                    <div class="title-login-register"><!-- div que representa o titulo da tela -->
                                        <p>Ainda não é cadastrado?</p><!-- titulo da tela -->
                                        <p>Todos os campos com * são obrigatorios</p><!-- subtitulo da tela -->
                                    </div><!-- fechando container do titulo da tela -->
                                </td><!-- fechando cedula da tabela -->
                            </tr><!-- fechando linha da tabela -->
                            <tr><!-- abrindo linha da tabela -->
                                 <td><!-- abrindo cedula da tabela -->
                                    <input type="text" name="register-nome" placeholder="Apelido*" minlength="6" maxlength="45" required><!-- campo de texto para informar apelido -->
                                    <input type="email" class="email" name="register-email" placeholder="E-mail*" maxlength="45" required><span class="validation">Teste</span><!-- campo de texto para informar email e o span serve para fazer a validação -->
                                    <input type="text" id="first_school" name="first_school" placeholder="Primeira escola em que estudou*" required><!-- campo de texto para informar escola -->
                                    <input type="text"  id="bf" name="bf" placeholder="Nome do Melhor Amigo*" required><!-- campo de texto para informar melhor amigo -->
                                    <input type="text"  id="mom" name="mom" placeholder="Nome da mãe*" required><!-- campo de texto para informar nome da mãe -->
                                    <input type="password" class="senha" id="senha" name="register-senha" placeholder="Senha*" required><!-- campo de texto para informar senha -->
                                    <input type="password" class="senha" id="c_senha" name="register-conf-senha" placeholder="Confirmar senha*" required><span class="validation">Teste</span><!-- campo de texto para informar a senha e o span serve para fazer a validação -->
                
                                    <label for="teste" class="form_btn btn_reg"><!-- container para o botão linkado com o input submit -->
                                       <input type="submit" id="teste" name="register" value="" style="display:none;"><!-- input submit invisivel -->
                                         <span class="bg"></span><!-- fundo que será acionado com hover -->
                                          <p>Cadastrar</p><!-- titulo do botão -->
                                     </label><!-- fechando a label e container do botão -->
                                    <!-- <input type="submit" id="teste" name="register" value="Cadastrar"> -->
                                </td><!-- fechando cedula da tabela -->
                            </tr><!-- fechando linha da tabela -->
                        </tbody><!-- fechando corpo da tabela -->
                    </table><!-- fechando tabela -->
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

         echo "<script>window.location.replace('http://".$serv."src/php/add_agenda');</script>";/*redireciona o usuário para a página de add_agenda */

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
=======
 <!-- #4527a0 --> 
<!DOCTYPE html>
<html>
  <?php
    //  if(!isset($_SESSION["id_user"])){
    //     header("location: perfil.php");
    // }else{ 
  ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/register.css">
        <link rel="stylesheet" href="../../global.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet"> 
        <script src="../js/jquery-3.5.1.min.js"></script>
        <script src="../js/valid.js"></script>
    </head>
    <?php include("./header.php"); ?>
    <body>
        <div id="login-register-page">
            <div id="align-form">
                <form id="table-login" action="" method="post">
                    <table>
                        <tbody id="login-container">
                            <tr>
                                <td>
                                    <div class="title-login-register">
                                        <p>Já é cadastrado?</p>
                                        <p>Então entre com seus dados de login e senha.</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                    <input type="email" name="login-email" placeholder="Email" maxlength="45" required>
                                    <input type="password" name="login-senha" placeholder="Senha" required >
                                    <a href="./rec_senha.php" target="_blank" style="display: block; padding:20px 0px;">Esqueci a senha</a>
                                    <label for="log" class="form_btn btn_reg" id="btn_log">
                                       <input type="submit" id="log" name="login" value="" style="display:none;">
                                         <span class="bg"></span>
                                          <p>Login</p>
                                     </label>
                                    <!-- <input type="submit" name="login" value="Logar"> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>

                <form id="table-register" action="" method="post" >
                    <table>
                        <tbody id="register-container">
                            <tr>
                                <td>
                                    <div class="title-login-register">
                                        <p>Ainda não é cadastrado?</p>
                                        <p>Todos os campos com * são obrigatorios</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="register-nome" placeholder="Apelido*" minlength="6" maxlength="45" required>
                                    <input type="email" class="email" name="register-email" placeholder="E-mail*" maxlength="45" required><span class="validation">Teste</span>
                                    <input type="text" id="first_school" name="first_school" placeholder="Primeira escola em que estudou*" required>
                                    <input type="text"  id="bf" name="bf" placeholder="Nome do Melhor Amigo*" required>
                                    <input type="text"  id="mom" name="mom" placeholder="Nome da mãe*" required>
                                    <input type="password" class="senha" id="senha" name="register-senha" placeholder="Senha*" required>
                                    <input type="password" class="senha" id="c_senha" name="register-conf-senha" placeholder="Confirmar senha*" required><span class="validation">Teste</span>
                
                                    <label for="teste" class="form_btn btn_reg">
                                       <input type="submit" id="teste" name="register" value="" style="display:none;">
                                         <span class="bg"></span>
                                          <p>Cadastrar</p>

                                     </label>
                                    <!-- <input type="submit" id="teste" name="register" value="Cadastrar"> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
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

    $email_log=$_POST["login-email"];
    $password_log=$_POST["login-senha"];

    $sql_log="SELECT * FROM usuarios WHERE EMAIL='$email_log'";
    $res_log=mysqli_query($con,$sql_log);
    $lin_log=mysqli_num_rows($res_log);
    $row_info=mysqli_fetch_assoc($res_log);

    if($lin_log>0){
        if(md5($password_log)==$row_info["SENHA"]){
          session_start();
          //Para a página de projetos
            $_SESSION["id_user"]=$row_info["ID_USUARIO"];
            $_SESSION["p1"]=$row_info["FIRST_SCHOOL"];
            $_SESSION["p2"]=$row_info["BEST_FRIEND"];
            $_SESSION["p3"]=$row_info["MOM"];

         echo "<script>window.location.replace('http://".$serv."src/php/add_agenda');</script>";

          //-----

          //Para o header
            $_SESSION["username"]=$row_info["APELIDO"];
            $_SESSION["email"]=$row_info["EMAIL"];
          //--------
          
        }else{
            echo "<script>alert('USUÁRIO OU SENHA INVALIDOS!')</script>";
        }
    }else{
        echo "<script>alert('USUÁRIO E SENHA NÃO CADASTRADOS')</script>";
    }

    //session_destroy();
}

//Cadastro
    if(isset($_POST["register"])){
    
        $nick=$_POST["register-nome"];
        $email=$_POST["register-email"];
        $first_school=$_POST["first_school"];
        $bf=$_POST["bf"];
        $mom=$_POST["mom"];
        $password=md5($_POST["register-senha"]);

        $sql_ver="SELECT EMAIL FROM usuarios WHERE EMAIL='$email'";
        $res=mysqli_query($con,$sql_ver);
        $lin=mysqli_num_rows($res);
       
        if($lin>0){
            echo "<script>alert('Esse email já foi cadastrado!')</script>";
        }else{


        $sql="INSERT INTO usuarios (ID_USUARIO,APELIDO,EMAIL,SENHA,FIRST_SCHOOL,BEST_FRIEND,MOM) VALUES (null,'$nick','$email','$password','$first_school','$bf','$mom')";
        $res=mysqli_query($con,$sql);

        if($res){
            echo "<script>alert('Cadastrado com Sucesso!')</script>";
        }else{
            echo "<script>alert('Falha ao Cadastrar!')</script>";
            }
        }

    }
//}
?>
>>>>>>> 13718c2a393f62f745a0b9dbcfbb5058ebef1967
