<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <meta http-equiv="refresh" content="1"> -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/rotina.css">
        <link rel="stylesheet" href="../../global.css">
        
    </head>
    <?php
     include("./header.php");
     ?>
    <body>
    <?php 
        if(!isset($_SESSION["id_user"])){
            header("location: cadastro.php");
        }else{
    ?>
        <div id="main-container">
            <div id="mini-menu-box">
             <?php
              $con=mysqli_connect("localhost","root","","linggo") or die ("Sem conexão");
              $id_user=$_SESSION['id_user'];
              $id_tabela= $_GET["id_tab"];

              $sql="SELECT * FROM usuarios_rotinas WHERE ID_ROTINA=$id_tabela";
              $res=mysqli_query($con,$sql);
              $lin=mysqli_num_rows($res);
              $row_info=mysqli_fetch_assoc($res);

              if($lin>0){
                echo"<form id='form_title' method='post'>
                 <input name='new_title' id='box-routine-title' type='text' value='".$row_info['TITULO_ROTINA']."' placeholder='' onClick='this.select();'><input name='title_update' type='submit'>
                 </form>";
              }

              if(isset($_POST["title_update"])){
                  $new_title=$_POST["new_title"];

                   
                     $sql="UPDATE usuarios_rotinas set TITULO_ROTINA='$new_title' WHERE ID_ROTINA=$id_tabela";
                     $resultado=mysqli_query($con,$sql);
                     if($resultado){
                        echo "<meta http-equiv='refresh' content='0;'/>";
                    }
                     
              }
                
            ?>
            
            </div>
            <div id="kanban-container">
                <div class="box-columns">
                    <?php 
                        // echo
                        //     "<div class='column'>
                        //         <h3 class='column-title'>".$result['']."</h3>
                        //         <div id='tasks-container'>
                        //             <div class='box-task'>".$result['']."</div>
                        //         </div>
                        //     </div>";
                    ?>
                    <!-- <div class="column">
                        <h3 class="column-title">Panda</h3>
                        <div id="tasks-container">
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="column-title">Panda</h3>
                        <div id="tasks-container">
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                        </div>
                    </div> -->
                    <!-- <div class="column">
                        <h3 class="column-title">Panda</h3>
                        <div id="tasks-container">
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="column-title">Panda</h3>
                        <div id="tasks-container">
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                            <div class="box-task">Tarefa</div>
                        </div>
                    </div> -->
                    <div id="create-column" class="column">
                        <a href="">+ Criar</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php 
     }


 //  session_destroy();
?>