<?php ini_set('memory_limit', '-1');  session_start();
    $con=mysqli_connect("localhost","root","","linggo") or die ("Sem conexão"); 
    $serv="localhost/linggo/";

    // Conexão para páginaWeb
    // $con=mysqli_connect("sql309.epizy.com","epiz_28608127","ycJtjMygknrdRbq","epiz_28608127_linggo") or die ("Sem conexão"); 
    // $serv="linggoapp.42web.io/";

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Linggo</title>
    <link rel="icon" href="../../assets/Mini-Logo.png">
    <!-- <meta http-equiv="refresh" content="1" >  -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../global.css"> -->
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
                <li class="menu__createbtn"><a href="./add_agenda.php" target="_self"><i class="fas fa-plus"></i> Criar Rotina</a></li>
             
            </ul>
        </nav>
             <a class="cont_logo" href="../../index.php" target="_self"><img class="logo" src="../../assets/LingoApp_Branco.png" alt="Logo da página com cores em roxo e laranja"></a>
        <div class="user">
            <?php
                    if(!isset($_SESSION["username"])){
                    echo "<a href='./cadastro.php' target='_self' class='perfil_img'>
                    <i class='fas fa-user'></i>
                 </a>";
                   }else{
                    echo "<a href='./perfil.php' target='_self' class='perfil_img'>
                    <i class='fas fa-user'></i>
                 </a>";
                   }
            ?>
            
            <h3 class="username"><?php 
                if(!isset($_SESSION["username"])){
                    echo "<a href='./cadastro.php' target='_self' >
                    "."Logar"."
                 </a>";

                
               }else{
                    //echo $_SESSION["username"];
                    echo "<a href='./perfil.php' target='_self'>
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