<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Linggo</title>
    <link rel="icon" href="./assets/Mini-Logo.png">
    <!-- <meta http-equiv="refresh" content="1" >  -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./global.css">
    <link rel="stylesheet" href="./src/css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
<header>
        <input type="checkbox" name="" id="check_menu" style="display: none;">
        <label id="menu_btn" for="check_menu" >
              <i class="fas fa-bars"></i>
             </label>
        <nav class="menu">
    
            <ul>
                <li><a href="#" target="blank"><i class="fas fa-info-circle"></i> Sobre</a></li>
                <li><a href="#" target="blank"><i class="fas fa-users"></i> Equipe</a></li>
                <li><a href="#" target="blank"><i class="fas fa-question-circle"></i> Suporte</a></li>
                <li class="menu__createbtn"><a href="./src/php/add_agenda.php" target="self"><i class="fas fa-plus"></i> Criar Projeto</a></li>
            </ul>
        </nav>
        <a class="cont_logo" href="./index.php" target="_self"><img class="logo" src="./assets/LingoApp_Branco.png" alt="Logo da página com cores em roxo e laranja"></a>
        <div class="user">
            <?php
                    if(!isset($_SESSION["username"])){
                    echo "<a href='./src/php/cadastro.php' target='self' class='perfil_img'>
                    <i class='fas fa-user'></i>
                 </a>";
                   }else{
                    echo "<a href='./src/php/perfil.php' target='self' class='perfil_img'>
                    <i class='fas fa-user'></i>
                 </a>";
                   }
            ?>
            
            <h3 class="username"><?php 
                if(!isset($_SESSION["username"])){
                    echo "<a href='./src/php/cadastro.php' target='self' >
                    "."Logar"."
                 </a>";

                
               }else{
                    //echo $_SESSION["username"];
                    echo "<a href='./src/php/perfil.php' target='self'>
                    ".$_SESSION["username"]."
                 </a>";
                 //   echo "<script>location.reload();</script>";
               }

               // session_destroy();
            ?></h3>
        </div>
    </header>

<div class="container_index">
  <img src="./assets/Linggo-Logo.png" alt="" >
  <div class="btn-primary"><a href="./src/php/add_agenda.php" target="_self"><i class="fas fa-plus"></i> Criar Projeto</a></div>
</div>

<footer>
<ul>
    <li>
    <div id="Logo">
        <img src="./assets/LingoApp_Branco_Cortada.png" alt="">
        <p>Linggo APP - Organizador de tarefas.</p>
    </div>
    </li>

    <!-- <li>
        <h3>MINHA CONTA</h3>
        <div class="footer-link-content">
            <a href="">Minha conta</a>
            <a href="../cadastro.html">Logar/Cadastrar</a>
        </div>
    </li> -->

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
        @2021-2028 Batatinha Tecnologia - Todos os direitos reservados.
    </p>
</section>
</footer>
<script src="./src/js/footer.js" async defer></script>
</body>
</html>
