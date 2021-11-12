<?php require('./connect.php'); ?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="2" >  -->
    <!-- <link rel="stylesheet" href="../../global.css"> -->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- <link rel="stylesheet" href="../css/add_quadros.css"> -->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/arquivo.js"></script>

</head>

<?php include("./header.php"); ?>
<!-- imprime o header de um arquivo externo -->

<body>

    <?php

    /*verifica se o usuário logou na página para acessar essa página, caso não tenha logado, ele é direcionado para a página de login*/

    if (!isset($_SESSION["id_user"])) {
        echo "<script>window.location.replace('http://" . $serv . "src/php/singin');</script>";
    } else {

    ?>

        <div id="routines-dashboard">
            <div id="routines-menu">
                <!-- abrindo container -->
                <h2>Suas rotinas</h2><!-- titulo da página sendo exibido dentro do container -->
            </div><!-- fechando container -->

            <div id="routines-container">
                <!-- abrindo container dos projetos -->

                <div id="create-routine" class="routine">
                    <!-- abrindo container do botão para criar os projetos, ou os botão para abrir o modal -->

                    <i class="fas fa-plus-circle"></i><!-- icone de + retirado do site fonteawesome -->

                </div><!-- fechando container -->

                <?php

                // $con=mysqli_connect("localhost","root","","linggo") or die ("Sem conexão");

                $id_user = $_SESSION['id_user']; //id do usuário passado após o login ter sido efetuado
                $sql = "SELECT * FROM usuarios_rotinas WHERE ID_USUARIO=$id_user AND STATUS='active' ORDER by TITULO_ROTINA ASC"; /*comando em sql para fazer a consulta dos projetos utilizando o id do usuário como base de consulta e exibe os resultados em ordem alfabética*/
                $res = mysqli_query($con, $sql); //a variavel res executa o codigo em sql que foi passado na variavel anterior
                $lin = mysqli_num_rows($res); // a variavel lin verifica quantas linhas cadastradas ele encontrou

                if ($lin > 0) { // se for maior do que 0 ele então executa o codigo abaixo exibindo os dados com a estrutura html da class routine

                    //Exibe as rotinas criadas na página.

                    while ($linha = mysqli_fetch_array($res)) { // cria um loop while, var linha recebe um vetor com os resultados da consulta e o loop acessa esses dados

                        echo
                        "
                        <div class='routine'>
                                <a class='routine-content' href=./rotina?id_tab=" . $linha["ID_ROTINA"] . " target='_self' style='background:" . $linha["ROTINA_COR"] . ";'>
                                    <div class='routine-columns'>
                                        <div class='col'></div>
                                        <div class='col'></div>
                                        <div class='col'></div>
                                        <div class='col'></div>
                                    </div>
                                </a>

                                <div class='routine-info'>
                                    <h2 class='schedule_titulo'> " . $linha['TITULO_ROTINA'] . " </h2>
                                    <button>
                                        <i class='fa fa-ellipsis-v' aria-hidden='true'></i>
                                    </button>
                                </div>   
                                <span style='display:none'>" . $linha["ID_ROTINA"] . "</span>  
                        </div>
                        ";

                        /*imprime a estrutura html da class routine passando os dados capturados no comando Select na variavel sql, o container fica em um link com direcionamento para a página de rotina.php*/
                    }
                }

                //Cadastra a rotina no banco de dados

                if (isset($_POST["cad_proget"])) { // verifica se o botão de submit do form foi pressionado, para só então executar os comandos do php
                    $titulo = $_POST["titulo"]; //captura o titulo que foi digitado pelo usuário no input type text
                    $cor = $_POST["color_agenda"]; //captura o valor do input radio que está checkado
                    $id_user = $_SESSION['id_user']; //captura o id do usuário que foi passado pela sessão, para que possa ser usado para cadastrar a rotina no banco de dados

                    $sql = "SELECT * FROM usuarios_rotinas WHERE ID_USUARIO=$id_user AND STATUS='active' ORDER by TITULO_ROTINA ASC"; //comando em sql para consultar as rotinas cadastradas
                    $res = mysqli_query($con, $sql); //executa o comando em sql acima
                    $lin = mysqli_num_rows($res); //verifica quantas linhas foram encontradas com o resultado da consulta

                    if ($lin >= 5) {/*se lin retornar um valor maior do que 5, ele exibe a mensagem na caixa de alerta*/

                        echo "<script>alert('Você excedeu o limite de projetos exclua alguns para poder adicionar novos projetos!')</script>";
                    } else {/*caso contrário executará o singin no banco de dados*/

                        $sql = "INSERT INTO usuarios_rotinas (ID_USUARIO, ID_ROTINA, TITULO_ROTINA, ROTINA_COR, STATUS) VALUE($id_user,null,'$titulo','$cor', 'active')";/*comando em sql para cadastrar utilizando os dados que foi passado pelo usuário no formulário*/
                        $res = mysqli_query($con, $sql);
                        $lin = mysqli_affected_rows($con);/*captura quantas linhas foram cadastradas*/

                        if ($lin > 0) {/*se for maior do que 0, vai fazer um reload na página para que todas as rotinas sejam impressas novamente na página*/

                            echo "<script>window.location.replace('http://" . $serv . "src/php/routines');</script>";
                        } else { //caso contrário, exibe uma mensagem de que ouve um erro ao fazer o singin

                            echo "<script>alert('erro ao cadastrar')</script>";
                        }
                    }

                    mysqli_close($con); //fecha a conexão com o banco de dados

                }

                ?>

            </div><!-- fechando o container das agendas -->

        </div>

        <section class="lightbox">
            <!-- abrindo container da lightbox onde ficará o modal -->
            <div class="modal">
                <!--abrindo container do modal -->
                <form method="POST" action="" id="criar-proj" class="routines">
                    <!-- formulário de envio para o usuário -->
                    <div class="modal-header">
                        <!-- abrindo cabeçalho do modal -->
                        <p>Create routine</p><!-- titulo do modal -->
                        <button class="btn-close-modal">
                            <!-- botão para fechar o modal -->
                            <svg class="btn-close-modal" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                <path class="btn-close-modal" d="M19 6.41L17.59 5 12 10.59 
                            6.41 5 5 6.41 10.59 12 5 17.59 6.41 
                            19 12 13.41 17.59 19 19 17.59 13.41 
                            12 19 6.41z" />
                            </svg><!-- icone de close para o botão do modal em svg -->
                        </button><!-- fechando botão de close modal -->
                    </div><!-- fechando cabeçalho do modal -->

                    <div class="modal-inputs">
                        <!-- abrindo configurações do modal -->
                        <label>Routine title</label><!-- label do input -->
                        <input type="text" placeholder="Title this routine" id="titulo" name="titulo" maxlength="15" required><!-- input text que receberá o valor a ser passado para a variavel no php para registrar na tabela -->
                        <input type="submit" id="cad_proget" name="cad_proget" value="Create"><!-- input submit que ficará invisivel na página mas está responsavel por enviar os dados do formulário para o php -->
                    </div><!-- fechando modal de configurações da coluna -->
                </form><!-- fechando o formulário -->
                <div class="overlay"></div><!-- overlay fundo escuro que fica atrás do modal -->
            </div> <!-- fechando modal -->
        </section><!-- fechando a sessão de lightbox -->



        <div class="overlay"></div>

</body>

</html>

<?php

    }





    //  session_destroy();

?>