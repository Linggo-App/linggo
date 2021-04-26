<?php ini_set('memory_limit', '-1');  session_start();  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Linggo</title>
    <link rel="icon" href="../../assets/Mini-Logo.png">
    <!-- <meta http-equiv="refresh" content="1" >  -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../global.css">
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
                <li class="menu__createbtn"><a href="./add_agenda.php" target="self"><i class="fas fa-plus"></i> Criar Projeto</a></li>
            </ul>
        </nav>
        <h1 class="logo">logo</h1>
        <div class="user">
            <?php
                    if(!isset($_SESSION["username"])){
                    echo "<a href='./cadastro.php' target='self' class='perfil_img'>
                    <i class='fas fa-user'></i>
                 </a>";
                   }else{
                    echo "<a href='./perfil.php' target='self' class='perfil_img'>
                    <i class='fas fa-user'></i>
                 </a>";
                   }
            ?>
            
            <h3 class="username"><?php 
                if(!isset($_SESSION["username"])){
                    echo "<a href='./cadastro.php' target='self' >
                    "."Logar"."
                 </a>";

                
               }else{
                    //echo $_SESSION["username"];
                    echo "<a href='./perfil.php' target='self'>
                    ".$_SESSION["username"]."
                 </a>";
                 //   echo "<script>location.reload();</script>";
               }

               // session_destroy();
            ?></h3>
        </div>
    </header>
</body>
</html>