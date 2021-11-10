<?php require('./connect.php'); ?> 

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <!-- <meta http-equiv="refresh" content="1"> -->

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/rotina.css">

        <link rel="stylesheet" href="../css/styles.css">

        <!-- <link rel="stylesheet" href="../../global.css"> -->

        <script src="../js/jquery-3.5.1.min.js"></script>

    </head>

    <?php

     include("./header.php");

     $id_tab=$_GET["id_tab"];

     ?>

    <body>

    <?php 

        if(!isset($_SESSION["id_user"]) ){

            header("location: singin");

        }else{

          

            $id_user=$_SESSION['id_user'];

    ?> 



        <div id="main-container">

            <!-- A global modal -->

            <form id="modals-container" action="" method="POST">

                <input type="text" id="ID_COLUMN_MODAL" name="ID_COLUMN_MODAL" value="" >

                <input type="text" id="ID_TASK_MODAL" name="ID_TASK_MODAL" value="" >

            </form>

            

            <!-- Delete project modal content -->

             <div class="modal-columns" id="restore-project">

                <div class="modal-columns-header">

                    <p>Restaurar Projeto</p>

                    <button id="btn-close-modal">

                        <svg id="btn-close-modal" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">

                            <path id="btn-close-modal" d="M19 6.41L17.59 5 12 10.59 

                            6.41 5 5 6.41 10.59 12 5 17.59 6.41 

                            19 12 13.41 17.59 19 19 17.59 13.41 

                            12 19 6.41z"/>

                        </svg>

                    </button>

                </div>

                <div class="modal-columns-config-box">

                    <p>Tem certeza que deseja restaurar esse Projeto?</p>

                    <button type="submit" class="btn-modal-columns" name="btn-restore-project">Restaurar Projeto</button>

                </div>

            </div>



            <?php

                if(isset($_POST["btn-restore-project"])){

                    // $sql="UPDATE usuarios_rotinas set STATUS='disabled' WHERE ID_ROTINA=$id_tab";

                    // $res=mysqli_query($con,$sql);



                    // if($res){

                    //     echo "<script>window.location.replace('http://".$serv."src/php/routines');</script>";

                    // }

                    $sql="SELECT * FROM usuarios_rotinas WHERE ID_USUARIO=$id_user AND STATUS='active' ORDER by TITULO_ROTINA ASC";

               $res=mysqli_query($con,$sql);

              // $res=mysqli_query($con,$sql);

               $lin=mysqli_num_rows($res);

              // echo "<script>alert('".$lin."')</script>";



                if($lin>=5){

                    echo "<script>alert('Você excedeu o limite de projetos exclua alguns para poder adicionar novos projetos!')</script>";

                   //echo "<script>alert('".$lin."')</script>";

                }else{

                   $sql="UPDATE usuarios_rotinas set STATUS='active' WHERE ID_ROTINA=$id_tab";

                    $res=mysqli_query($con,$sql);



                    if($res){

                        //  echo "<meta http-equiv='refresh' content='0; url=./proj_disab?id_tab=".$id_tab."'/>";

                         echo "<script>window.location.replace('http://".$serv."src/php/routines');</script>";

                    }



                }

            }

            ?>

            

            <div id="mini-menu-box">

                <?php 

                //carrega as colunas na página com base no id da tarefa que foi clicado

                $sql="SELECT * FROM usuarios_rotinas WHERE ID_USUARIO=$id_user AND ID_ROTINA=$id_tab";

                $res=mysqli_query($con,$sql);

                //$lin=mysqli_num_rows($res_log);

                $row_info=mysqli_fetch_assoc($res);



                if($res){

                    echo "<input id='box-routine-title' type='text' value='".$row_info["TITULO_ROTINA"]."'name='tab_titulo' disabled>";

                }

               

                ?>

                <button id="btn-show-modal-restore-project">

                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">

                        <path d="M0 0h24v24H0V0z" fill="none"/>

                        <path d="M15.5 4l-1-1h-5l-1 

                        1H5v2h14V4zM6 19c0 1.1.9 2 2

                        2h8c1.1 0 2-.9 2-2V7H6v12zm2-5V9h8v10H8v-5zm2

                        4h4v-4h2l-4-4-4 4h2z"/>

                    </svg>

                    Restaurar Projeto

                </button>

            </div>



            <div id="kanban-container">



                <div class="box-columns">



                <?php 

                    //carrega as colunas na página

                                $sql="SELECT * FROM rotina_colunas WHERE ID_ROTINA=$id_tab";

                                $res=mysqli_query($con,$sql);

                                $lin=mysqli_num_rows($res);

                             // echo "<script>alert('".$lin."')</script>";

                                if($lin>0){

                                  while($linha=mysqli_fetch_array($res)){

                                      $ID_COLUNA=$linha["ID_COLUNA"];



                                     echo

                    '<div class="column '.$linha["ID_COLUNA"].'">

                        <div class="box-column-header">

                            <p>'.$linha["TITULO_COLUNA"].'</p>

                        </div>



                      <div class="tasks-container">



                          ';

                        //carrega as tarefas referente a coluna

                          $sql_taf="SELECT * FROM colunas_tarefas WHERE ID_COLUNA=$ID_COLUNA ORDER by HORARIO_TAREFA ASC";

                          $res_taf=mysqli_query($con,$sql_taf);

                          $lin_taf=mysqli_num_rows($res_taf);

                        // echo "<script>alert('".$lin."')</script>";

                          if($lin_taf>0){

                            while($linha_taf=mysqli_fetch_array($res_taf)){

                                echo   

                                '<div class="box-task '.$linha_taf["ID_COLUNA"].'" id="'.$linha_taf["ID_TAREFA"].'"> 

                                        <div class="box-task-info">

                                            <span>'.$linha_taf["DESCRICAO_TAREFA"].'</span>

                                            <span>'.$linha_taf["HORARIO_TAREFA"].'</span> 

                                        </div>

                                 </div>';

                            }

                          }

                          

                          echo'

                        </div>

                    </div>';

                                         }

                                  }

                    ?>  



                </div>

            </div>

        </div>

        <script src="../js/restoreProject.js" async defer></script>

    </body>

</html>

<?php 

     }

 //  session_destroy();

?>