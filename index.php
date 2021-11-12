<?php require('./src/php/connect.php'); ?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Linggo</title>

    <link rel="icon" href="./assets/Mini-Logo.png">

    <!-- <meta http-equiv="refresh" content="1" >  -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./src/css/styles.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">

</head>

<body>

    <header>
        <!-- inicio do header -->

        <div id="header-content">
            <input type="checkbox" name="" id="check_menu" style="display: none;"><!-- checkbox que acionará o menu na parte responsiva, ficará invisivel -->

            <label id="menu_btn" for="check_menu">
                <!-- label que ficará responsavel acionar a checkbox -->
                <i class="fas fa-bars"></i><!-- icone de hamburger retirado do fontawesome -->
            </label><!-- fechando a label -->

            <nav>
                <ul id="menu-area">
                    <!-- abrindo a tag ul para criar uma lista -->

                    <li>
                        <!-- link que leva para a página home com uma imagem do nosso logo em branco para se destacar com o fundo da página -->
                        <a class="anchor-logo" href="./index" target="_self">
                            <img class="logo" src="./assets/LingoApp_Branco_Cortada.png" alt="Logo da página com cores em roxo e laranja">
                        </a>

                    </li>

                    <li>
                        <a href="./index#sobre" target="_self">
                            <i class="fas fa-info-circle"></i>
                            Sobre
                        </a>
                    </li><!-- primeiro item, com o link para o container Sobre e icone do site fontawesome -->

                    <li>
                        <a href="./index#equipe" target="_self">
                            <i class="fas fa-users"></i>
                            Equipe
                        </a>
                    </li><!-- segundo item, com o link para o container Equipe e icone do site fontawesome -->

                    <li>
                        <a href="https://www.facebook.com/Linggo-APP-104781658511510/" target="_blank">
                            <i class="fas fa-question-circle"></i>
                            Suporte
                        </a>
                    </li><!-- terceiro item, com o link para a nossa página no facebook voltado para o suporte ao nosso usuário e icone do site fontawesome -->

                </ul><!-- fechando a tag de lista -->

                <!-- container do usuário -->
                <div id="user-area">
                    <!-- div onde ficará o nome do usuário -->
                    <div class="username">
                        <?php
                        if (!isset($_SESSION["username"])) {/*verifica se o nome de usuário não foi passado pela sessão*/
                            /*se não for passado, então vai imprimir o link para a página de singin*/
                            echo
                            "<a href='./src/php/singin' target='_self'>"
                                . "Logar" .
                                "</a>";
                        } else {
                            /* se tiver sido passado o valor para a variavel da sessão, então o link será para a pagina de perfil.php*/
                            echo
                            "<a href='./src/php/perfil' target='_self'>Olá, <br>"
                                . $_SESSION["username"] .
                                "</a>";
                        }
                        ?>
                    </div><!-- fechando o container do username -->

                    <li class="btn-orange">
                        <a href="./src/php/routines" target="_self">
                            <i class="far fa-calendar-check"></i>
                            Rotinas
                        </a>
                    </li><!-- quarto item, com o link para a página de routines para criar projetos e icone do site fontawesome -->
                </div>
            </nav>
        </div>
    </header><!-- fechando a tag header -->

    <div id="home-content">
        <main>
            <section id="content-block-1">
                <img src="./assets/Linggo-Logo-Cortado.png" alt="">
                <article>
                    "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                    <br>
                    "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."
                </article>

                <button class="btn-orange">
                    <a href="./src/php/add_agenda" target="_self">
                        <i class="fas fa-plus"></i>
                        Criar Projeto
                    </a>
                </button>
            </section>

            <section id="content-block-2">
                <div>
                    <img src="./assets/Linggo-Logo.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet dui vulputate, dignissim nunc ac, congue tellus. Donec facilisis luctus risus, vitae cursus felis elementum quis. Sed ac varius augue. Maecenas elementum, urna quis maximus ornare, tortor ipsum sodales lectus, eu molestie dolor augue nec ligula.
                    </p>
                </div>

                <div>
                    <img src="./assets/Linggo-Logo.png" alt="">
                    <p>
                        Duis ornare lacinia leo ut porta. Curabitur felis libero, fermentum non feugiat ac, varius non enim. Nulla sodales porttitor velit. Fusce ac lacus laoreet, aliquam est at, mattis quam.

                        Proin sollicitudin vehicula arcu, et molestie massa posuere a. Sed rhoncus dignissim mauris a semper. Curabitur dictum mattis nibh vel luctus. Morbi dictum mauris dolor.
                    </p>
                </div>
            </section>

            <section id="content-block-3">
                <h1>Lorem Ipsum</h1>
                <p>
                    Aliquam sed justo malesuada, euismod est ut, posuere purus. Nulla iaculis nisi eu ligula cursus dapibus. Vivamus consectetur elementum egestas. Sed placerat feugiat nibh sit amet ultricies.
                </p>

                <div>
                    <img src="./assets/Linggo-Logo.png" alt="">
                </div>
            </section>

            <section id="content-block-4">
                <div>
                    <img src="./assets/Linggo-Logo.png" alt="">
                    <p>
                        Sed placerat feugiat nibh sit amet ultricies. Fusce placerat imperdiet dui at auctor. Integer bibendum odio metus, eget euismod lorem ornare vel. Phasellus a tincidunt ipsum.
                    </p>
                </div>

                <div>
                    <img src="./assets/Linggo-Logo.png" alt="">
                    <p>
                        Mauris scelerisque eros pulvinar turpis cursus, a mollis ligula viverra. Donec faucibus eu justo id sagittis. Donec facilisis molestie massa, auctor mattis ex rhoncus vitae. In maximus condimentum posuere.
                    </p>
                </div>

                <div>
                    <img src="./assets/Linggo-Logo.png" alt="">
                    <p>
                        Nullam et sapien interdum, pulvinar augue et, cursus leo. Donec elementum elit efficitur urna vehicula blandit. Quisque cursus lorem eleifend libero tincidunt dignissim.
                    </p>
                </div>
            </section>

            <section id="content-block-5">
                <img src="./assets/Mini-Logo.png" alt="">
                <article>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris eget nibh purus. Cras quis sagittis nisi. Etiam non accumsan tellus, ut interdum eros.</article>

                <button>
                    <a href="./src/php/add_agenda" target="_self">
                        <i class="fas fa-plus"></i>
                        Criar Projeto
                    </a>
                </button>
            </section>
        </main>
    </div>

    <footer>

        <ul>

            <li>

                <div id="Logo">

                    <img src="./assets/LingoApp_Branco_Cortada.png" alt="">

                    <p>Linggo APP - Organizador de tarefas.</p>

                </div>

            </li>

            <li>

                <h3>SIGA-NOS</h3>

                <div class="siga">

                    <input type="checkbox" id="checkGit"><label for="checkGit" title="Github do criadores"><img src="./assets/GitHub-Mark-64px.png" alt="Logo do Github"></label>

                    <div id="container-git-collaborators">

                        <div id="git-collaborators-list"></div>

                    </div>

                </div>

            </li>

        </ul>

        <section id="assin">

            <p>

                @2021-2028 LiggoAPP - Todos os direitos reservados.

            </p>

        </section>

    </footer>

    <!-- <script src="./src/js/footer.js" async defer></script> -->

</body>

</html>