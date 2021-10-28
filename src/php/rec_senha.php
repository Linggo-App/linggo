 <!-- #4527a0 --> 

 <?php 

    require('./connect.php'); 

    session_start();

?> 

 <!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/register.css">

        <link rel="stylesheet" href="../css/styles.css">
        
        <!-- <link rel="stylesheet" href="../../global.css"> -->

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet"> 

        <!-- <script src="../js/jquery-3.5.1.min.js"></script>

        <script src="../js/valid.js"></script> -->

    </head>

    <?php include("./header.php"); ?>

    <body>

        <div id="login-register-page"><!-- container principal -->

            <div id="align-form"><!-- div para a linhar o formulário -->

                <form id="table-register" action="" method="post" ><!-- abrindo formulário -->

                    <table><!-- abrindo tabela -->

                        <tbody id="register-container"><!-- abrindo corpo da tabela -->

                        <tr><!-- abrindo a linha da tabela -->

                                <td><!-- abrindo cedula da tabela -->

                                    <div class="title-login-register"><!-- div que representa o titulo da tela -->

                                        <p>Responda a essas perguntas de segurança!</p><!-- titulo da tela -->

                                    </div><!-- fechando container do titulo da tela -->

                                </td><!-- fechando cedula da tabela -->

                            </tr><!-- fechando linha da tabela -->

                            <tr><!-- abrindo a linha da tabela -->

                                <td><!-- abrindo cedula da tabela -->

                                    <input type="email" class="email" name="register-email" placeholder="E-mail*" maxlength="45" required><!-- campo de texto para informar email -->

                                    <input type="text" id="first_school" name="first_school" placeholder="Primeira escola em que estudou*" required><!-- campo de texto para informar a primeira escola -->

                                    <input type="text"  id="bf" name="bf" placeholder="Nome do Melhor Amigo*" required><!-- campo de texto para informar melhor amigo -->

                                    <input type="text"  id="mom" name="mom" placeholder="Nome da mãe*" required><!-- campo de texto para informar nome da mãe -->

                

                                    <label for="teste" class="form_btn btn_reg"><!-- container para o botão linkado com o input submit -->

                                       <input type="submit" id="teste" name="register" value="" style="display:none;"><!-- input submit invisivel -->

                                         <span class="bg"></span><!-- fundo que será acionado com hover -->

                                          <p>Enviar</p><!-- titulo do botão -->

                                     </label><!-- fechando a label e container do botão -->

                              

                                </td><!-- fechando cedula da tabela -->

                            </tr><!-- fechando linha da tabela -->

                        </tbody><!-- fechando corpo da tabela -->

                    </table><!-- fechando a tabela -->

                </form><!-- fechando o formulário -->

            </div><!-- fechando div de alinhamento -->

        </div><!-- fechando div container principal -->

        <footer>

            <?php include("./footer.php"); ?>

        </footer>

    </body>

</html>

<!--singin-->

<?php



//verificando as respostas de segurança

    if(isset($_POST["register"])){



        $email=$_POST["register-email"];/*capaturando as informações passadas pelo input com esse name*/

        $first_school=$_POST["first_school"];/*capaturando as informações passadas pelo input com esse name*/

        $bf=$_POST["bf"];/*capaturando as informações passadas pelo input com esse name*/

        $mom=$_POST["mom"];/*capaturando as informações passadas pelo input com esse name*/



        $sql_ver="SELECT * FROM usuarios WHERE EMAIL='$email'";/*seleciona o usuário pelo email passado pela variavel email*/

        $res=mysqli_query($con,$sql_ver);/*executa o codigo em sql*/

        $row_info=mysqli_fetch_assoc($res);/*separa todas as informações em um vetor*/

        $lin=mysqli_num_rows($res);/*verifica quantas linhas fora encontradas durante a consulta*/



        if($lin>0){/*se for maior que 0 executa o codigo*/

        if($row_info["FIRST_SCHOOL"]==$first_school && $row_info["BEST_FRIEND"]==$bf && $row_info["MOM"]==$mom){/*verifica se as informações passadas nos inputs são iguais as respostas cadastradas na tabela*/

          session_start();/*inicia uma sessão para a próxima página*/

        

            $_SESSION["id_user1"]=$row_info["ID_USUARIO"];/*passa valores para uma variavel de sessão*/



        echo "<script>window.location.replace('http://".$serv."src/php/update_senha');</script>";/*direciona o usuário para a página de update_senha*/



    

            $_SESSION["username1"]=$row_info["APELIDO"];/*passa valores para uma variavel de sessão*/

            $_SESSION["email1"]=$row_info["EMAIL"];/*passa valores para uma variavel de sessão*/

         

          

        }else{/*se as respostas estiverem erradas não fará nada*/

                echo "<script>alert('Alguma das respostas não batem, por favor tente novamente')</script>";

            }

        }else{/*se o email não existir, não fará nada*/

            echo "<script>alert('Este email ainda não foi cadastrado!')</script>";

        }

    

    }

//}

?>

