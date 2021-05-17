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
                    <div class="btn_atalho  form_btn" id="btn_ticket"><span class="bg"></span> <p>Tickets</p></div>

                    <form method="post">
            <input type="submit" name="logout" class="logs form_btn" value="Logout">
        </form>

                </div>
            </div>
            <div class="container_atalho">
                 <div class="" id="apresent">
                 <h1>Seja Bem Vindo <?php echo $_SESSION["username"]; ?>!</h1>
                 </div>
                <div class="ata_select" id="edit_perfil">
                Editar Perfil
                </div>
                <div class="ata_select" id="proj_exc">
                    <h1 class="screen_title">Projetos Excluidos</h1>
                    <div class="agendas">
                    <?php
             // $con=mysqli_connect("localhost","root","","linggo") or die ("Sem conexão");
              $id_user=$_SESSION['id_user'];
              $sql="SELECT * FROM usuarios_rotinas WHERE ID_USUARIO=$id_user AND STATUS='disabled' ORDER by TITULO_ROTINA ASC";
              $res=mysqli_query($con,$sql);
              $lin=mysqli_num_rows($res);
           // echo "<script>alert('".$lin."')</script>";
              if($lin>0){
                  //Exibe as rotinas criadas na página.
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
                <div class="ata_select" id="ticket">
                Tickets
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