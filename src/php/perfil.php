<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/Mini-Logo.png">
    <link rel="stylesheet" href="../../global.css">
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
            header("location: cadastro.php");
        }else{
            //echo $_SESSION["username"];
    ?>
    <div class="container_perfil">
            <div class="controls_perfil">
                <div class="dados_user">
                    <h1>
                        <?php echo $_SESSION["username"]; ?>
                    </h1>
                    <h3><?php echo $_SESSION["email"]; ?></h3>
                </div>
                <div class="atalhos">
                    <div class="btn_atalho form_btn" id="btn_edit">
                        <span class="bg"></span>
                        <p>Editar Perfil</p></div>
                    <div class="btn_atalho  form_btn" id="btn_pjex"><span class="bg"></span> <p>Projetos Excluidos</p></div>
                    <div class="btn_atalho  form_btn" id="btn_security"><span class="bg"></span> <p>Segurança</p></div>

                    <form method="post">
            <input type="submit" name="logout" class="logs form_btn" value="Logout">
        </form>

                </div>
            </div>
            <div class="container_atalho">
                 <div class="" id="apresent">
                 <h1 class="screen_title">Seja Bem Vindo <?php echo $_SESSION["username"]; ?>!</h1>
                 </div>
                <div class="ata_select" id="edit_perfil">
                <h1 class="screen_title">Editar Perfil</h1>
                <div class="screen_exibe">
                    <form class="perfil_edit" action="" method="post">
                        <label class="lbl_edit" for="inp_user">Nome de usuário</label><br><br>
                        <input type="text" id="inp_user" name="new_username" class="input" onClick='this.select();' value="<?php echo $_SESSION["username"]; ?>"  placeholder="Nome de usuário" minlength="6" maxlength="45" required>
                        <br><br>
                        <label for="sub_user" class="form_btn btn_reg" id="btn_log">
                                <input type="submit" id="sub_user" name="upd_user" value="" style="display:none;">
                                 <span class="bg"></span>
                                 <p>Salvar alteração</p>
                        </label>
                        <br><br> <hr><br>
                        <div class="new_password">
                            <input type="checkbox" name="" id="btn_pass">
                            <label for="btn_pass">Trocar senha</label><br><br>

                        <div class="container_password">
                            <label class="lbl_edit" for="inp_pass">Senha Atual:</label><br><br>
                        <input type="password" id="inp_pass" class="input" onClick='this.select();' placeholder="Senha atual" name="pass_atual"> <i class="fas fa-eye" id="hide_pass"></i><i class="fas fa-eye-slash" id="show_pass"></i> <span class="pass_view">Mostrar Senha</span> 
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
                        </div>
                        </div>
                    </form>
                    <!-- Update no usuário -->
                    <?php
                        //Trocar nome de usuário
                        if(isset($_POST["upd_user"])){
                            $new_username=$_POST["new_username"];
                            $id_user=$_SESSION["id_user"];
                            $sql="UPDATE usuarios set APELIDO='$new_username' WHERE ID_USUARIO=$id_user";
                            $res=mysqli_query($con,$sql);
    
                            if($res){
                                $_SESSION["username"]=$new_username;
                                echo "<script>window.location.replace('http://".$serv."src/php/perfil');</script>";
                            }else{
                                echo "<script>alert('não');</script>";
                            }
                        }
                        //Trocando Password
                        if(isset($_POST["upd_pass"])){
                            $pass_atual=md5($_POST["pass_atual"]);
                            $pass_new=md5($_POST["pass_new"]);
                            $id_user=$_SESSION["id_user"];

                            $sql_log="SELECT * FROM usuarios WHERE ID_USUARIO=$id_user";
                            $res_log=mysqli_query($con,$sql_log);
                            //$lin_log=mysqli_num_rows($res_log);
                            $row_info=mysqli_fetch_assoc($res_log);

                            if($row_info["SENHA"]==$pass_atual){
                                // echo "<script>alert('sim');</script>";
                                $sql="UPDATE usuarios set SENHA='$pass_new' WHERE ID_USUARIO=$id_user";
                                $res=mysqli_query($con,$sql);
        
                                if($res){
                                   // $_SESSION["username"]=$new_username;
                                   echo "<script>alert('Sua Senha foi alterada!');</script>";
                                    echo "<script>window.location.replace('http://".$serv."src/php/perfil');</script>";
                                }else{
                                    echo "<script>alert('não');</script>";
                                }
                            }else{
                                echo "<script>alert('não');</script>";
                            }
                        }
                    ?>
                 </div>
              
                </div>
                <div class="ata_select" id="proj_exc">
                    <h1 class="screen_title">Projetos Excluidos</h1>
                    <div class="agendas screen_exibe">
                    <?php
                   // Exibe os projetos excluidos na página.
                        $id_user=$_SESSION['id_user'];
                        $sql="SELECT * FROM usuarios_rotinas WHERE ID_USUARIO=$id_user AND STATUS='disabled' ORDER by TITULO_ROTINA ASC";
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
                        //Trocar nome de usuário
                        if(isset($_POST["upd_answer"])){
                            $inp_answer1=$_POST["inp_answer1"];
                            $inp_answer2=$_POST["inp_answer2"];
                            $inp_answer3=$_POST["inp_answer3"];
                            $id_user=$_SESSION["id_user"];
                            $sql="UPDATE usuarios set FIRST_SCHOOL='$inp_answer1', BEST_FRIEND='$inp_answer2', MOM='$inp_answer3' WHERE ID_USUARIO=$id_user";
                            $res=mysqli_query($con,$sql);
    
                            if($res){
                                $_SESSION["p1"]=$inp_answer1;
                                $_SESSION["p2"]=$inp_answer2;
                                $_SESSION["p3"]=$inp_answer3;
                                echo "<script>alert('Respostas atualizadas com sucesso!');</script>";
                                echo "<script>window.location.replace('http://".$serv."src/php/perfil');</script>";
                            }else{
                                echo "<script>alert('Não foi possivel atualizar');</script>";
                            }
                        }
                    ?>
                 </div>
              
                </div>
            </div>
    </div>
        
    <footer>
            <?php include("./footer.php"); ?>
        </footer>
</body>
</html>
<?php 
            if(isset($_POST["logout"])){
                session_unset();
                session_destroy();
                echo "<script>location.reload();</script>";
            }
        }
?>