<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <meta http-equiv="refresh" content="1"> -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/rotina.css">
        <link rel="stylesheet" href="../../global.css">
        <script src="../js/jquery-3.5.1.min.js"></script>
    </head>
    <?php
     include("./header.php");
     $id_tab=$_GET["id_tab"];
     ?>
    <body>
    <?php 
        if(!isset($_SESSION["id_user"]) ){
            header("location: cadastro.php");
        }else{
          
            $id_user=$_SESSION['id_user'];
    ?> 

        <div id="main-container">
            <!-- A global modal -->
            <form id="modals-container" action="" method="POST">
                <input type="text" id="ID_COLUMN_MODAL" name="ID_COLUMN_MODAL" value="" >
                <input type="text" id="ID_TASK_MODAL" name="ID_TASK_MODAL" value="" >
            </form>
            <?php
            if(isset($_POST['btn-create-task'])){

              //  $ID_COLUNA = $_POST['ID_COLUMN_MODAL'];
                $ID_COLUNA_TAREFA = $_POST['ID_COLUMN_CREATE_TASK'];
                $ID_TAREFA = $_POST['ID_TASK_MODAL'];
                $task_description=$_POST["task-description"]; 
                $time=$_POST["time"];
                
                //faz uma busca nas tarefas para verificar se já existem tarefas nesse horario dentro da coluna
                $sql_taf="SELECT * FROM colunas_tarefas WHERE ID_COLUNA=$ID_COLUNA_TAREFA AND HORARIO_TAREFA='$time'";
                $res_taf=mysqli_query($con,$sql_taf);
                $lin_taf=mysqli_num_rows($res_taf);

                if($lin_taf > 0){
                    echo "<script>alert('Já existe uma tarefa nesse horario dentro dessa coluna!')</script>";
                    echo "<script>window.location.replace('http://localhost/linggo/src/php/rotina.php?id_tab=".$id_tab."');</script>";
                }else{
                    //Após a verificação cadastra a tarefa na coluna
                    $sql="INSERT INTO colunas_tarefas (ID_USUARIO, ID_ROTINA, ID_COLUNA, ID_TAREFA, DESCRICAO_TAREFA, HORARIO_TAREFA) VALUE($id_user,$id_tab,$ID_COLUNA_TAREFA,null,'$task_description','$time')";
                    $res=mysqli_query($con,$sql);
    
                    if($res){
                        echo "<script>window.location.replace('http://localhost/linggo/src/php/rotina.php?id_tab=".$id_tab."');</script>";
                    }
    
                }

             
            }
            ?>
            <!-- Create columns modal content-->
            <div class="modal-columns" id="create-columns">
                <div class="modal-columns-header">
                    <p>Adicionar coluna</p>
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
                    <form action="" method="post">
                    <label for="new-column-name">Nome da coluna</label>
                    <input type="text" name="new-column-name" placeholder="Dê um nome a sua coluna (Segunda, Trabalho)">
                    <button type="submit" class="btn-modal-columns" name="btn-create-column">Criar coluna</button>
                    </form>
                </div>
            </div>

            <?php
                if(isset($_POST["btn-create-column"])){
                    $column_name=$_POST["new-column-name"];
                
                //faz uma busca nas colunas através do id da rotina(referente ao projeto clicado)
               $sql="SELECT * FROM rotina_colunas WHERE ID_ROTINA=$id_tab";
               $res=mysqli_query($con,$sql);
               $lin=mysqli_num_rows($res);
           
               //Verifica se o numero de colunas pesquisadas na tarefa é maior ou igual a 7 
                if($lin>=7){
                    echo "<script>alert('Você excedeu o limite de colunas.')</script>";
                }else{
                //Caso contrário, executa o comando para cadastrar a rotina
                    $sql="INSERT INTO rotina_colunas (ID_USUARIO, ID_ROTINA, ID_COLUNA, TITULO_COLUNA) VALUE($id_user,$id_tab,null,'$column_name')";
                    $res=mysqli_query($con,$sql);

                    if($res){
                        echo "<script>window.location.replace('http://localhost/linggo/src/php/rotina.php?id_tab=".$id_tab."');</script>";
                    }
                    
                }
            }
            ?>
            
            <!-- Delete project modal content -->
             <div class="modal-columns" id="delete-project">
                <div class="modal-columns-header">
                    <p>Deletar Projeto</p>
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
                    <p>Tem certeza que deseja deletar esse Projeto?</p>
                    <button type="submit" class="btn-modal-columns" name="btn-delete-project">Deletar Projeto</button>
                </div>
            </div>

            <!-- Rename column modal content -->
            <div class="modal-columns" id="rename-columns">
                <div class="modal-columns-header">
                    <p>Renomear coluna</p>
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
              
                    <label for="new-column-name">Nome da coluna</label>
                    <input type="text" name="new-column-name" placeholder="Renomeie a coluna (Quarta, Férias, etc...)">
                    <button type="submit" class="btn-modal-columns" name="btn-rename-column">Renomar coluna</button>
                </div>
            </div>
            <?php
             //faz update no titulo da coluna 
                if(isset($_POST["btn-rename-column"])){
                    $ID_COLUNA = $_POST['ID_COLUMN_MODAL'];
                    $new_column_name=$_POST["new-column-name"];
                    //utilizando como codigo de acesso o id da coluna
                    $sql="UPDATE  rotina_colunas set TITULO_COLUNA='$new_column_name' WHERE ID_COLUNA=$ID_COLUNA";
                    $res=mysqli_query($con,$sql);

                    if($res){
                       echo "<meta http-equiv='refresh' content='0; url=./rotina.php?id_tab=".$id_tab."'/>";
                    }
                }
            ?>

            <!-- Delete column modal content -->
            <div class="modal-columns" id="delete-columns">
                <div class="modal-columns-header">
                    <p>Deletar coluna</p>
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
                    <p>Tem certeza que deseja deletar essa coluna?</p>
                    <button type="submit" class="btn-modal-columns" name="btn-delete-column">Deletar coluna</button>
                </div>
            </div>

            <?php
            //deleta a coluna
               if(isset($_POST["btn-delete-column"])){
                $ID_COLUNA = $_POST['ID_COLUMN_MODAL'];
                $sql="DELETE FROM rotina_colunas WHERE ID_COLUNA=$ID_COLUNA";
                $res=mysqli_query($con,$sql);

                if($res){
                   echo "<meta http-equiv='refresh' content='0; url=./rotina.php?id_tab=".$id_tab."'/>";
                }
            }
            ?>

            <!-- Edit task modal content -->
            <div class="modal-columns" id="edit-task">
                <div class="modal-columns-header">
                    <p>Editar tarefa</p>
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
                    <label for="new-task-name">Nome da tarefa</label>
                    <input type="text" name="new-task-name" id="new-task-name" placeholder="Renomeie a tarefa (Matemática, Português, etc...)">
                    <label for="new-time-task">Mudar horário da tarefa</label>
                    <input type="time" name="new-time-task" id="new-time-task">
                    <button type="submit" class="btn-modal-tasks" name="btn-edit-tasks">Salvar alterações</button>
                </div>
            </div>

            <?php
            //faz update na tarefa para poder trocar o nome ou o horário
            if(isset($_POST["btn-edit-tasks"])){
                $ID_COLUNA = $_POST['ID_COLUMN_MODAL'];
                $ID_TAREFA = $_POST['ID_TASK_MODAL'];
                $new_task_name = $_POST['new-task-name'];
                $new_time_task = $_POST['new-time-task'];
                $sql="UPDATE colunas_tarefas 
                SET DESCRICAO_TAREFA='$new_task_name',HORARIO_TAREFA ='$new_time_task'
                WHERE ID_COLUNA=$ID_COLUNA and ID_TAREFA=$ID_TAREFA";
                $res=mysqli_query($con,$sql);

                if($res){
                   echo "<meta http-equiv='refresh' content='0; url=./rotina.php?id_tab=".$id_tab."'/>";
                }else{
                    echo "<script>alert('não')</script>";
                }
            }
            ?>

            <!-- Delete task modal content -->
            <div class="modal-columns" id="delete-task">
                <div class="modal-columns-header">
                    <p>Deletar tarefa</p>
                    <button id="btn-close-modal">
                        <svg id="btn-close-modal" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                            <path id="btn-close-modal" d="M19 6.41L17.59 5 12 10.59 
                            6.41 5 5 6.41 10.59 12 5 17.59 6.41 
                            19 12 13.41 17.59 19 19 17.59 13.41 
                            12 19 6.41z"/>
                        </svg>
                    </button>
                </div>

                <?php
                //deleta a tarefa
                if(isset($_POST["btn-delete-tasks"])){
                        $ID_COLUNA = $_POST['ID_COLUMN_MODAL'];
                        $ID_TAREFA = $_POST['ID_TASK_MODAL'];
                        $sql="DELETE  FROM colunas_tarefas
                        WHERE ID_COLUNA=$ID_COLUNA and ID_TAREFA=$ID_TAREFA";
                        $res=mysqli_query($con,$sql);

                        if($res){
                        echo "<meta http-equiv='refresh' content='0; url=./rotina.php?id_tab=".$id_tab."'/>";
                        }
                    }
                ?>

                <div class="modal-columns-config-box">
                    <p>Tem certeza que deseja deletar essa Tarefa?</p>
                    <button type="submit" class="btn-modal-columns" name="btn-delete-tasks">Deletar tarefa</button>
                </div>
            </div>
            
            <div id="mini-menu-box">
                <?php 
                //carrega as colunas na página com base no id da tarefa que foi clicado
                $sql="SELECT * FROM usuarios_rotinas WHERE ID_USUARIO=$id_user AND ID_ROTINA=$id_tab";
                $res=mysqli_query($con,$sql);
                //$lin=mysqli_num_rows($res_log);
                $row_info=mysqli_fetch_assoc($res);

                if($res){
                    echo"<form method='post'>
                    <input id='box-routine-title' type='text' value='".$row_info["TITULO_ROTINA"]."' placeholder='' onClick='this.select();' name='tab_titulo'>
                    <input type='submit' name='update_titulo' id='rotina_titulo' style='display:none'>
                    </form>";
                    
                    //troca o nome do projeto
                    if(isset($_POST["update_titulo"])){
                        $tab_titulo=$_POST["tab_titulo"];
                        $sql="UPDATE usuarios_rotinas set TITULO_ROTINA=' $tab_titulo' WHERE ID_ROTINA=$id_tab";
                        $res=mysqli_query($con,$sql);

                        if($res){
                           echo "<meta http-equiv='refresh' content='0; url=./rotina.php?id_tab=".$id_tab."'/>";
                        }
                    }
                }
               
                ?>
                <button id="btn-show-modal-delete-project">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M16 9v10H8V9h8m-1.5-6h-5l-1 
                        1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9
                        2 2 2h8c1.1 0 2-.9 2-2V7z"></path>
                    </svg>
                    Deletar Projeto
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
                            <div>
                            <button class="'.$linha["ID_COLUNA"].'" title="Adicionar tarefa">
                            <svg class="'.$linha["ID_COLUNA"].'" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                <path class="'.$linha["ID_COLUNA"].'" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                            </svg>
                        </button>
                                <input type="checkbox" name="btn-show-column-editor" id="btn-show-column-'.$linha["ID_COLUNA"].'-editor" title="Editar coluna">
                                <label for="btn-show-column-'.$linha["ID_COLUNA"].'-editor">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="0.82em" height="1em" viewBox="0 0 13 16">
                                        <path fill-rule="evenodd" d="M1.5 9a1.5 1.5 0 1 0
                                        0-3a1.5 1.5 0 0 0 0 3zm5 0a1.5 1.5 0 1 0 0-3a1.5
                                        1.5 0 0 0 0 3zM13 7.5a1.5 1.5 0 1 1-3 0a1.5 1.5
                                        0 0 1 3 0z"/>
                                    </svg>
                                </label>
                                <div class="dropdown-column-editor">
                                    <ul>
                                        <li class="btn-rename-columns">Renomear coluna</li>
                                        <li class="btn-delete-columns">Deletar coluna</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                      <div class="tasks-container">

                            <div class="box-task-creator '.$linha["ID_COLUNA"].'">
                                <form class="form-task-creator" action="" method="POST">
                                    <textarea name="task-description" maxlength="15" cols="25" rows="1"></textarea>
                                    <div>
                                        <input type="time" class="appt" name="time" required>
                                        <button type="submit" class="btn-create-task '.$linha["ID_COLUNA"].'" name="btn-create-task" disabled>Adicionar</button>
                                        <button class="btn-close-task-creator">Cancelar</button>
                                    </div>
                                    <input type="text" class="ID_COLUMN_CREATE_TASK" name="ID_COLUMN_CREATE_TASK" value="" >
                                </form>
                            </div>

                          ';
                        //carrega as tarefas referente a coluna
                          $sql_taf="SELECT * FROM colunas_tarefas WHERE ID_COLUNA=$ID_COLUNA ORDER by HORARIO_TAREFA ASC";
                          $res_taf=mysqli_query($con,$sql_taf);
                          $lin_taf=mysqli_num_rows($res_taf);
                        // echo "<script>alert('".$lin."')</script>";
                          if($lin_taf>0){
                            while($linha_taf=mysqli_fetch_array($res_taf)){
                                // echo
                                // ' <div class="box-task"> <span>'.$linha_taf["DESCRICAO_TAREFA"].'</span> <span>'.$linha_taf["HORARIO_TAREFA"].'</span> </div>';

                                echo   
                                '<div class="box-task '.$linha_taf["ID_COLUNA"].'" id="'.$linha_taf["ID_TAREFA"].'"> 
                                        <div class="box-task-info">
                                            <span>'.$linha_taf["DESCRICAO_TAREFA"].'</span>
                                            <span>'.$linha_taf["HORARIO_TAREFA"].'</span> 
                                        </div>
                                        <div class="box-task-buttons">
                                            <button title="Editar tarefa" class="btn-edit-task">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                                    <path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66
                                                    3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02
                                                    0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/>
                                                </svg>
                                                
                                            </button>
                                            <hr>
                                            <button title="Detelar tarefa" class="btn-delete-task">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                                    <path d="M16 9v10H8V9h8m-1.5-6h-5l-1 
                                                    1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9
                                                    2 2 2h8c1.1 0 2-.9 2-2V7z"/>
                                                </svg>
                                            </button>
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
                    <div id="create-column">
                        <p>+ Criar coluna</p>
                    </div>

                </div>
            </div>
        </div>
        <script src="../js/rotina.js" async defer></script>
    </body>
</html>
<?php 
     }
 //  session_destroy();
?>