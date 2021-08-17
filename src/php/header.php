<?php
// require('./connect');
    // $con=mysqli_connect("localhost","root","","linggo") or die ("Sem conexão"); 
    // $serv="localhost/linggo/";

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
    <header><!-- inicio do header -->
        <input type="checkbox" name="" id="check_menu" style="display: none;"><!-- checkbox que acionará o menu na parte responsiva, ficará invisivel -->
        <label id="menu_btn" for="check_menu" ><!-- label que ficará responsavel acionar a checkbox -->
              <i class="fas fa-bars"></i><!-- icone de hamburger retirado do fontawesome -->
             </label><!-- fechando a label -->
             
        <nav class="menu"><!-- abrindo nav onde ficará o menu -->
    
            <ul><!-- abrindo a tag ul para criar uma lista -->
                <li><a href="../../index#sobre" target="_self"><i class="fas fa-info-circle"></i> Sobre</a></li><!-- primeiro item, com o link para o container Sobre e icone do site fontawesome -->
                <li><a href="../../index#equipe" target="_self"><i class="fas fa-users"></i> Equipe</a></li><!-- segundo item, com o link para o container Equipe e icone do site fontawesome -->
                <li><a href="https://www.facebook.com/Linggo-APP-104781658511510/" target="_blank"><i class="fas fa-question-circle"></i> Suporte</a></li><!-- terceiro item, com o link para a nossa página no facebook voltado para o suporte ao nosso usuário e icone do site fontawesome -->
                <li class="menu__createbtn"><a href="./add_agenda" target="_self"><i class="fas fa-plus"></i> Criar Projeto</a></li><!-- quarto item, com o link para a página de add_agenda para criar projetos e icone do site fontawesome -->
             
            </ul><!-- fechando a tag de lista -->
        </nav><!-- fechando a tag nav -->
             <a class="cont_logo" href="../../index" target="_self"><img class="logo" src="../../assets/LingoApp_Branco.png" alt="Logo da página com cores em roxo e laranja"></a><!-- link que leva para a página home com uma imagem do nosso logo em branco para se destacar com o fundo da página -->
             
        <div class="user"><!-- container do usuário -->
            <?php
                    if(!isset($_SESSION["username"])){/*verifica se o nome de usuário não foi passado pela sessão*/
                    echo "<a href='./cadastro' target='_self' class='perfil_img'>
                    <i class='fas fa-user'></i>
                 </a>";/*se não for passado, então vai imprimir o link para a página de cadastro*/
                   }else{/* se tiver sido passado o valor para a variavel da sessão, então o link será para a pagina de perfil.php*/
                    echo "<a href='./perfil' target='_self' class='perfil_img'>
                    <i class='fas fa-user'></i>
                 </a>";
                   }
            ?>
            
            <!-- container onde ficará o nome do usuário -->
            <h3 class="username"><?php 
                if(!isset($_SESSION["username"])){//se o valor não tiver sido passado na sessão, então imprime o link para a página de cadastro com o valor Logar
                    echo "<a href='./cadastro' target='_self' >
                    "."Logar"."
                 </a>";

                
               }else{// caso contrário, imprime o link com o valor do nome de usuário dentro desse link
                    echo "<a href='./perfil' target='_self'>
                    ".$_SESSION["username"]."
                 </a>";
               }

            ?></h3><!-- fechando o container do username -->
        </div><!-- fechando o container do usuário -->
    </header><!-- fechando a tag header -->
</body>
</html>