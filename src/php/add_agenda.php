<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../global.css">
    <link rel="stylesheet" href="../css/add_quadros.css">
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/arquivo.js"></script>
    <title>Tela principal</title>
</head>
<body>
    <?php 
        include("./header.php");
        if(!isset($_SESSION["id_user"])){
            header("location: cadastro.php");
        }else{
    ?>
    <div class="div_consulta">
        <h1 class="titulo">Todos os projetos</h1>
        <!-- <form class="consulta" action="" method="get">
            <div class="barra_busca">
                <input type="text" name="" id="" placeholder="Procurar Agenda..."><label for="search"><i class="fas fa-search btn_search"></i></label>
                <input type="submit" id="search" style="display: none;">
            </div>
            <select name="" id="">
                <option value="categoria">Categoria</option>
                <option value="titulo">Titulo</option>
            </select>
        </form> -->
    </div>
    <div class="agendas">
        <div class="create_schedule schedules">
          <i class="fas fa-plus-circle"></i>
        </div>
        <!-- <div class="schedules">
          <h1 class="schedule_titulo">
              Titulo
          </h1>
          <h2 class="schedule_categoria">
              Categoria
          </h2>
        </div> -->
        <?php
              $con=mysqli_connect("localhost","root","","linggo") or die ("Sem conexão");
              $id_user=$_SESSION['id_user'];
              $sql="SELECT * FROM usuarios_rotinas WHERE ID_USUARIO=$id_user ORDER by TITULO_ROTINA ASC";
              $res=mysqli_query($con,$sql);
              $lin=mysqli_affected_rows($con);
  
              if($lin>0){
                while($linha=mysqli_fetch_array($res)){
                           if($linha["ROTINA_COR"]=="#fff"){
                               echo"<div class='schedules' style='background:".$linha["ROTINA_COR"].";'>
                               <i class='fas fa-cog schedule_update'></i>
                               <h1 class='schedule_titulo' style='color:black;'>
                                   ".$linha['TITULO_ROTINA']."
                               </h1>
                               <span style='display:none'>".$linha["ID_ROTINA"]."</span>
                             </div> ";
                           }else{
                               echo"<div class='schedules'  style='background:".$linha["ROTINA_COR"].";'>
                               <i class='fas fa-cog schedule_update'></i>
                               <h1 class='schedule_titulo' >
                               ".$linha['TITULO_ROTINA']."
                               </h1>
                               <span style='display:none'>".$linha["ID_ROTINA"]."</span>
                             </div> ";
               
                           }
                       }
                }
      
            
           // $con=mysqli_connect("localhost","root","","linggo") or die ("Sem conexão");
            if(isset($_POST["cad_proget"])){
                
               // session_start();
                $titulo=$_POST["titulo"];
                $cor=$_POST["color_agenda"];
                $id_user=$_SESSION['id_user'];
        
               // echo"<script>alert('".$titulo.'\n'.$cor.'\n'.$id_user."')</script>";
          
                $sql="INSERT INTO usuarios_rotinas (ID_USUARIO, ID_ROTINA, TITULO_ROTINA, ROTINA_COR) VALUE($id_user,null,'$titulo','$cor')";
                $res=mysqli_query($con,$sql);
                $lin=mysqli_affected_rows($con);
          
               //   echo json_encode('cadastrado com sucesso');//"<script>alert('cadastrado com sucesso')</script>";
               //echo "<script>location.reload();</script>";
        
            //    $sql="SELECT * FROM tabelas WHERE ID_USUARIO=$id_user";
            //      $res=mysqli_query($con,$sql);
            //      $lin=mysqli_affected_rows($con);
        
                 if($lin>0){
                //    while($linha=mysqli_fetch_array($res)){
                //        if($linha["COR"]=="#fff"){
                //            echo"<div class='schedules' style='background:".$linha["COR"].";'>
                //            <h1 class='schedule_titulo' style='color:black;'>
                //                ".$linha['TITULO']."
                //            </h1>
                //          </div> ";
                //        }else{
                //            echo"<div class='schedules'  style='background:".$linha["COR"].";'>
                //            <h1 class='schedule_titulo' >
                //            ".$linha['TITULO']."
                //            </h1>
                //          </div> ";
                //        }
                //    }
                echo "<script>window.location.replace('http://localhost/flex-schedule/src/php/add_agenda.php');</script>";
              }else{
                 echo "<script>alert('erro ao cadastrar')</script>";
              }
          
              
          
              mysqli_close($con);
           }
            

        ?>
        <div class="settings">
            <i class="fas fa-times close_settings"></i>
        </div>

    </div>
    <section class="lightbox">
            <div class="modal">
                <i class="fas fa-times close"></i>
                <form method="POST" action="" id="criar_proj" class="add_agenda" style="flex-direction: row;">
                 <span class="add_agenda container_form form_part1">
                    <div class="cor">
                        <h1 class="form_btn open_colors">
                        <span class="bg"></span>    
                        <p><i class="fas fa-palette"></i> Cor</p></h1>
                        <div class="cores modal_color" id="pallet">
                        <i class="fas fa-times close_color"></i>
                            
                            <div class="color_content">
                                <label for="color1">
                                    <input type="radio" id="color1" name="color_agenda" value="#fff" checked> 

                                    <span style="background-color:#fff ;">
                                    
                                    </span>
                                </label>
                                <label for="color2">
                                    <input type="radio" id="color2" name="color_agenda" value="#18D97F">

                                    <span style="background-color:#18D97F;">
                                    
                                    </span>
                                </label>
                                <label for="color3">
                                    <input type="radio" id="color3" name="color_agenda" value="#8C530D">

                                    <span style="background-color:#8C530D;">
                                    
                                    </span>
                                </label>
                                <label for="color4">
                                    <input type="radio" id="color4" name="color_agenda" value="#F25922">

                                    <span style="background-color:#F25922;">
                                    
                                    </span>
                                </label>
                                <label for="color5">
                                    <input type="radio" id="color5" name="color_agenda" value="#BF544B">

                                    <span style="background-color:#BF544B;">
                                    
                                    </span>
                                </label>
                                <label for="color6">
                                    <input type="radio" id="color6" name="color_agenda" value="#D91818">

                                    <span style="background-color:#D91818;">
                                    
                                    </span>
                                </label>
                                <label for="color7">
                                    <input type="radio" id="color7" name="color_agenda" value="#242259">

                                    <span style="background-color:#242259;">
                                    
                                    </span>
                                </label>
                                <label for="color8">
                                    <input type="radio" id="color8" name="color_agenda" value="#23518C">

                                    <span style="background-color:#23518C;">
                                    
                                    </span>
                                </label>
                                <label for="color9">
                                    <input type="radio" id="color9" name="color_agenda" value="#5FC2D9">

                                    <span style="background-color:#5FC2D9;">
                                    
                                    </span>
                                </label>
                                <label for="color10">
                                    <input type="radio" id="color10" name="color_agenda" value="#F2AE30">

                                    <span style="background-color:#F2AE30;">
                                    
                                    </span>
                                </label>
                                <label for="color11">
                                    <input type="radio" id="color11" name="color_agenda" value="#D93B3B">

                                    <span style="background-color:#D93B3B;">
                                    
                                    </span>
                                </label>
                                <label for="color12">
                                    <input type="radio" id="color12" name="color_agenda" value="#F24B59">

                                    <span style="background-color:#F24B59;">
                                    
                                    </span>
                                </label>
                                <label for="color13">
                                    <input type="radio" id="color13" name="color_agenda" value="#666CD9">

                                    <span style="background-color:#666CD9;">
                                    
                                    </span>
                                </label>
                                <label for="color14">
                                    <input type="radio" id="color14" name="color_agenda" value="#02734A">

                                    <span style="background-color:#02734A;">
                                    
                                    </span>
                                </label>
                                <label for="color15">
                                    <input type="radio" id="color15" name="color_agenda" value="#F2C335">

                                    <span style="background-color:#F2C335;">
                                    
                                    </span>
                                </label>
                                <label for="color16">
                                    <input type="radio" id="color16" name="color_agenda" value="#F2AFA0">

                                    <span style="background-color:#F2AFA0;">
                                    
                                    </span>
                                </label>
                            </div>
                            <span id="ok_btn" class="form_btn">
                            <span class="bg"></span>
                                <p>Ok</p>
                            </span>
                            
                        </div>
                      
                    </div>
                    
                    <label class="input" for="titulo">
                        <input type="text" placeholder=" " id="titulo" name="titulo" required>
                        <span class="place">Titulo</span>
                    </label>
                    <!-- <label class="input" for="assunto">
                        <input type="text" placeholder=" " id="assunto" name="assunto">
                        <span class="place">Assunto</span>
                    </label> -->
                    <label for="cad_proget" class="form_btn">
                        <input type="submit" id="cad_proget" name="cad_proget" value="" style="display:none;">
                        <span class="bg"></span>
                        <p>Cadastrar</p>
                    
                     </label>
                
                </form>
                <div class="overlay"></div>
            </div>  
        </section>

        <div class="overlay"></div>
</body>
</html>
<?php 
    }


 //  session_destroy();
?>