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
        // if(!isset($_SESSION["id_user"])){
        //     header("location: cadastro.php");
        // }else{
    ?>
        <div id="main-container">
            <div id="mini-menu-box">
                <input id="box-routine-title" type="text" value="Matemática" placeholder="" onClick="this.select();">
            
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
                    <div class="column">
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
                    </div>
                    <div id="create-column" class="column">
                        <a href="">+ Criar</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php 
    // }


 //  session_destroy();
?>