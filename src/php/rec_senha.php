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
        <!-- <script src="../js/jquery-3.5.1.min.js"></script>
        <script src="../js/valid.js"></script> -->
    </head>
    <?php include("./header.php"); ?>
    <body>
        <div id="login-register-page">
            <div id="align-form">
                <form id="table-register" action="" method="post" >
                    <table>
                        <tbody id="register-container">
                        <tr>
                                <td>
                                    <div class="title-login-register">
                                        <p>Responda a essas perguntas de segurança!</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="email" class="email" name="register-email" placeholder="E-mail*" maxlength="45" required>
                                    <input type="text" id="first_school" name="first_school" placeholder="Primeira escola em que estudou*" required>
                                    <input type="text"  id="bf" name="bf" placeholder="Nome do Melhor Amigo*" required>
                                    <input type="text"  id="mom" name="mom" placeholder="Nome da mãe*" required>
                
                                    <label for="teste" class="form_btn btn_reg">
                                       <input type="submit" id="teste" name="register" value="" style="display:none;">
                                         <span class="bg"></span>
                                          <p>Enviar</p>
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

        $email=$_POST["register-email"];
        $first_school=$_POST["first_school"];
        $bf=$_POST["bf"];
        $mom=$_POST["mom"];

        $sql_ver="SELECT * FROM usuarios WHERE EMAIL='$email'";
        $res=mysqli_query($con,$sql_ver);
        $row_info=mysqli_fetch_assoc($res);
        $lin=mysqli_num_rows($res);

        if($lin>0){
            if($row_info["FIRST_SCHOOL"]==$first_school && $row_info["BEST_FRIEND"]==$bf && $row_info["MOM"]==$mom){

                session_start();
                  $_SESSION["id_user1"]=$row_info["ID_USUARIO"];
                  $_SESSION["username1"]=$row_info["APELIDO"];
                  $_SESSION["email1"]=$row_info["EMAIL"];

                echo "<script>window.location.replace('http://".$serv."src/php/update_senha');</script>";
            }else{
                echo "<script>alert('Alguma das respostas não batem, por favor tente novamente')</script>";
            }
        }else{
            echo "<script>alert('Este email ainda não foi cadastrado!')</script>";
        }
    
    }
//}
?>
