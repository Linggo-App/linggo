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
            <!-- A global modal -->
            <form id="modals-container" action="#" method="POST">
                <input type="text" id="ID_COLUMN_MODAL" name="ID_COLUMN_MODAL" value="" style="display:none;">
            </form>
            <?php
            if(isset($_POST['btn-create-task'])){

                $a = $_POST['ID_COLUMN_MODAL'];
                $b = $_POST['ID_COLUNA_CREATE_TASK'];
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
                    <label for="new-column-name">Nome da coluna</label>
                    <input type="text" name="new-column-name" placeholder="Dê um nome a sua coluna (Segunda, Trabalho)">
                    <button type="submit" class="btn-modal-columns" name="btn-create-column">Criar coluna</button>
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
                    <input type="text" name="new-column-name" placeholder="Renomeie a coluna (Quarta, Férias)">
                    <button type="submit" class="btn-modal-columns" name="btn-rename-column">Renomar coluna</button>
                </div>
            </div>

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
            <div id="mini-menu-box">
                <input id="box-routine-title" type="text" value="Matemática" placeholder="" onClick="this.select();">
            </div>

            <div id="kanban-container">

                <div class="box-columns">

                <?php
                    // echo
                    // '<div class="column '.$linha["ID_COLUNA"].'>
                    //     <div class="box-column-header">
                    //         <p>Segunda</p>
                    //         <div>
                    //             <button class="'.$linha["ID_COLUNA"].' title="Adicionar tarefa">
                    //                 <svg class="'.$linha["ID_COLUNA"].' xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                    //                     <path class="'.$linha["ID_COLUNA"].' d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                    //                 </svg>
                    //             </button>
                    //             <input type="checkbox" name="btn-show-column-editor" id="btn-show-column-'.$linha["ID_COLUNA"].'-editor" title="Editar coluna">
                    //             <label for="btn-show-column-'.$linha["ID_COLUNA"].'-editor">
                    //                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="0.82em" height="1em" viewBox="0 0 13 16">
                    //                     <path fill-rule="evenodd" d="M1.5 9a1.5 1.5 0 1 0
                    //                     0-3a1.5 1.5 0 0 0 0 3zm5 0a1.5 1.5 0 1 0 0-3a1.5
                    //                     1.5 0 0 0 0 3zM13 7.5a1.5 1.5 0 1 1-3 0a1.5 1.5
                    //                     0 0 1 3 0z"/>
                    //                 </svg>
                    //             </label>
                    //             <div class="dropdown-column-editor">
                    //                 <ul>
                    //                     <li class="btn-rename-columns">Renomear coluna</li>
                    //                     <li class="btn-delete-columns">Deletar coluna</li>
                    //                 </ul>
                    //             </div>
                    //         </div>
                    //     </div>

                    //     <div class="tasks-container">

                    //         <div class="box-task-creator '.$linha["ID_COLUNA"].'>
                    //             <form class="form-task-creator" action="#" method="POST">
                    //                 <textarea name="task-description" maxlength="15" cols="25" rows="1"></textarea>
                    //                 <div>
                    //                     <input type="time" clss="appt" name="time" required>
                    //                     <button type="submit" class="btn-create-task '.$linha["ID_COLUNA"].' name="btn-create-task" disabled>Adicionar</button>
                    //                     <button class="btn-close-task-creator">Cancelar</button>
                    //                 </div>
                    //                 <input type="text" class="ID_COLUNA_CREATE_TASK" name="ID_COLUNA_CREATE_TASK" value="" style="display:none;">
                    //             </form>
                    //         </div>

                    //         <div class="box-task"> <span>Matemática</span> <span>14:30</span> </div>
                    //     </div>
                    // </div>'
                ?>

                    <div class="column 2">
                        <div class="box-column-header">
                            <p>Segunda</p>
                            <div>
                                <button class="2" title="Adicionar tarefa">
                                    <svg class="2" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path class="2" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                                    </svg>
                                </button>
                                <input type="checkbox" name="btn-show-column-editor" id="btn-show-column-2-editor" title="Editar coluna">
                                <label for="btn-show-column-2-editor">
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

                            <div class="box-task-creator 2">
                                <form class="form-task-creator" action="#" method="POST">
                                    <textarea name="task-description" maxlength="15" cols="25" rows="1"></textarea>
                                    <div>
                                        <input type="time" clss="appt" name="time" required>
                                        <button type="submit" class="btn-create-task 2" name="btn-create-task" disabled>Adicionar</button>
                                        <button class="btn-close-task-creator">Cancelar</button>
                                    </div>

                                    <input type="text" class="ID_COLUNA_CREATE_TASK" name="ID_COLUNA_CREATE_TASK" value="" style="display:none;">
                                </form>
                            </div>

                            <div class="box-task"> <span>Matemática</span> <span>14:30</span> </div>
                        </div>
                    </div>

                    <div id="create-column">
                        <p>+ Criar coluna</p>
                    </div>

                </div>
            </div>
        </div>
        <script src="../js/rotina.js"></script>
    </body>
</html>
<?php 
    // }
 //  session_destroy();
?>