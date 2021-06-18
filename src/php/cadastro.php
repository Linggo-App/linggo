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
