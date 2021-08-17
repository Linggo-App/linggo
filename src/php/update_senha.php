<!DOCTYPE html>
<html>
    <?php 
    require('./connect.php'); 
   // session_start();
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
    <?php include("./header.php");
 
    
    ?>
    <body>
    <?php
     if(!isset($_SESSION["id_user1"])){/*se o id passado pela sessão não for encontrado, redireciona o usuário para a página de cadastro*/
        //header("location: cadastro.php");
          echo "<script>window.location.replace('http://".$serv."src/php/cadastro');</script>";
     }else{ /*caso contrário, carrega a página*/
  ?>
        <div id="login-register-page"><!-- container principal -->
            <div id="align-form"><!-- div para a linhar o formulário -->
                <form id="table-register" action="./update_senha.php" method="post" ><!-- abrindo formulário -->
                    <table><!-- abrindo tabela -->
                        <tbody id="register-container"><!-- abrindo corpo da tabela -->
                        <tr><!-- abrindo a linha da tabela -->
                                <td><!-- abrindo cedula da tabela -->
                                    <div class="title-login-register"><!-- div que representa o titulo da tela -->
                                        <p>Crie sua nova senha <?php echo $_SESSION["username1"] ?>!</p><!-- titulo da tela com username do usuário -->
                                    </div><!-- fechando container do titulo da tela -->
                                </td><!-- fechando cedula da tabela -->
                            </tr><!-- fechando linha da tabela -->
                            <tr><!-- abrindo a linha da tabela -->
                                <td><!-- abrindo cedula da tabela -->
                                <input type="email" class="email" name="register-email" placeholder="E-mail*" maxlength="45" required style="display: none;" value="<?php echo $_SESSION["email1"]?>"><span class="validation" style="display: none;">Teste</span><!-- campo de texto com email preenchido o valor com a variavel da sessão mais o span que é responsável pela validação -->
                                <input type="password" class="senha" id="senha" name="register-senha" placeholder="Nova Senha*" required><!-- campo de texto para informar a nova senha -->
                                    <input type="password" class="senha" id="c_senha" name="register-conf-senha" placeholder="Confirmar senha*" required><span class="validation">Teste</span><!-- campo de texto para confirmar a senha, o span que é responsável pela validação -->
                
                                    <label for="teste" class="form_btn btn_reg"><!-- container para o botão linkado com o input submit -->
                                       <input type="submit" id="teste" name="register1" value="" style="display:none;"><!-- input submit invisivel -->
                                         <span class="bg"></span><!-- fundo que será acionado com hover -->
                                          <p>Cadastrar</p><!-- titulo do botão -->

                                     </label><!-- fechando a label e container do botão -->
                                </td><!-- fechando cedula da tabela -->
                            </tr><!-- fechando linha da tabela -->
                        </tbody><!-- fechando corpo da tabela -->
                    </table><!-- fechando a tabela -->
                </form><!-- fechando o formulário -->
            </div><!-- fechando div de alinhamento -->
        </div><!-- fechando duv container principal -->
        <footer>
            <?php include("./footer.php"); ?>
        </footer>
    </body>
</html>
<?php
//trocando a senha
   if(isset($_POST["register1"])){
        $pass_new=md5($_POST["register-senha"]);/*capaturando as informações passadas pelo input com esse name*/
        $id_user=$_SESSION["id_user1"];/*capturando o id do usuário passado pela sessão*/

            $sql="UPDATE usuarios set SENHA='$pass_new' WHERE ID_USUARIO=$id_user"; /*troca a senha de usuário na tabela pelo valor que foi passado na variavel, a troca é efetuada via id do usuário*/
            $res=mysqli_query($con,$sql);/*executa o codigo em sql*/

            if($res){/*se res for executado com sucesso, exibe o alerta e redireciona para a página de cadastro*/
               echo "<script>alert('Sua Senha foi alterada!');</script>";
                echo "<script>window.location.replace('http://".$serv."src/php/cadastro');</script>";
            }else{/*caso contrário não faz nada e informa que não foi possivel mudar a senha*/
                echo "<script>alert('houve algum erro, por favor tente novamente!');</script>";
            }
        }
}
?>
