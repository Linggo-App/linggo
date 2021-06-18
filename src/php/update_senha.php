 <!-- #4527a0 --> 
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
    <?php
     if(!isset($_SESSION["id_user1"])){
        header("location: cadastro.php");
     }else{ 
  ?>
        <div id="login-register-page">
            <div id="align-form">
                <form id="table-register" action="" method="post" >
                    <table>
                        <tbody id="register-container">
                        <tr>
                                <td>
                                    <div class="title-login-register">
                                        <p>Crie sua nova senha <?php echo $_SESSION["username1"] ?>!</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <input type="email" class="email" name="register-email" placeholder="E-mail*" maxlength="45" required style="display: none;" value="<?php echo $_SESSION["email1"]?>"><span class="validation" style="display: none;">Teste</span>
                                <input type="password" class="senha" id="senha" name="register-senha" placeholder="Nova Senha*" required>
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

//verificando as respostas de segurança
    if(isset($_POST["register"])){
        $pass_new=md5($_POST["register-senha"]);
        $id_user=$_SESSION["id_user1"];

            $sql="UPDATE usuarios set SENHA='$pass_new' WHERE ID_USUARIO=$id_user";
            $res=mysqli_query($con,$sql);

            if($res){
               echo "<script>alert('Sua Senha foi alterada!');</script>";
                echo "<script>window.location.replace('http://".$serv."src/php/cadastro');</script>";
            }else{
                echo "<script>alert('houve algum erro, por favor tente novamente!');</script>";
            }
        }
}
?>
