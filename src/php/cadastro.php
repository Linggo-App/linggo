 <!-- #4527a0 --> 
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Linggo</title>
        <link rel="icon" href="">
        <!-- <meta http-equiv="refresh" content="1" >  -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/register.css">
        <link rel="stylesheet" href="../../global.css">
        <!-- <link rel="stylesheet" href="../../global.css"> -->
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
                                    <input type="password" name="login-senha" placeholder="Senha" required>
                                    <input type="submit" name="login" value="Logar">
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
                                    <input type="password" class="senha" id="senha" name="register-senha" placeholder="Senha*" required>
                                    <input type="password" class="senha" id="c_senha" name="register-conf-senha" placeholder="Confirmar senha*" required><span class="validation">Teste</span>
                
                                    <input type="submit" id="teste" name="register" value="Cadastrar">
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
  $con=mysqli_connect("localhost","root","","linggo") or die ("Sem conexão");
    if(isset($_POST["register"])){
    
        $nick=$_POST["register-nome"];
        $email=$_POST["register-email"];
        $password=md5($_POST["register-senha"]);

       

      $sql="INSERT INTO usuarios (ID_USUARIO,APELIDO,EMAIL,SENHA) VALUES (null,'$nick','$email','$password')";
      $res=mysqli_query($con,$sql);

      if($res){
          echo "<script>alert('Cadastrado com Sucesso!')</script>";
      }else{
        echo "<script>alert('Falha ao Cadastrar!')</script>";
      }


    }
?>
