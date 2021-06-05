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
   <!-- <script src="./src/js/jquery-3.5.1.min.js"></script>
    <script src="./src/js/index.js"></script>-->
</head>

<body>
<header>
        <input type="checkbox" name="" id="check_menu" style="display: none;">
        <label id="menu_btn" for="check_menu" >
              <i class="fas fa-bars"></i>
             </label>
        <nav class="menu">
    
            <ul>
                <li><a href="#sobre" target="blank"><i class="fas fa-info-circle"></i> Sobre</a></li>
                <li><a href="#equipe" target="blank"><i class="fas fa-users"></i> Equipe</a></li>
                <li><a href="#" target="blank"><i class="fas fa-question-circle"></i> Suporte</a></li>
                <li class="menu__createbtn"><a href="./src/php/add_agenda.php" target="_self"><i class="fas fa-plus"></i> Criar Projeto</a></li>
            </ul>
        </nav>
        <a class="cont_logo" href="./index.php" target="_self"><img class="logo" src="./assets/LingoApp_Branco.png" alt="Logo da página com cores em branco"></a>
    </header>

    <div class="container_index">
            <img src="./assets/Linggo-Logo.png" alt="" >
            <div class="btn-primary"><a href="./src/php/add_agenda.php" target="__self"><i class="fas fa-plus"></i> Criar Projeto</a></div>
    </div>
    <div class="container_1"  id="sobre">
        <h1 class="title">Sobre</h1>
        <p class="text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec, volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt. Donec vitae purus ut nisl consectetur egestas quis eget nulla. Vestibulum sit amet nunc vitae enim vulputate posuere. Pellentesque rhoncus vehicula vehicula. Donec ac lorem consectetur, eleifend neque at, finibus odio. Praesent suscipit molestie porttitor. Nunc rutrum, augue quis consectetur facilisis, neque massa semper nisl, non facilisis velit risus egestas est. Suspendisse vitae quam finibus, porttitor erat ut, molestie metus.
        </p>
    </div>
    <div class="container_2" id="equipe">
        <h1 class="title">Equipe</h1>
        <div class="cards">
            <div class="card">
                <div class="img">
                    <img src="https://avatars2.githubusercontent.com/u/62577482?s=460&u=9cd418ac4c3ff1b1817567f32848c642fc5c4976&v=4">
                </div>
                <div class="card_info">
                    <h2>Caio Valdoveste</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec</p> <p>volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.</p> <p>Donec vitae purus ut nisl  molestie metus.</p>
                    
                </div>
            </div>
            <div class="card">
                <div class="img">
                <img src="https://avatars.githubusercontent.com/u/71861617?v=4">
                </div>
                <div class="card_info">
                    <h2>Leticia Smidt</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec</p> <p>volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.</p> <p>Donec vitae purus ut nisl  molestie metus.</p>
                    
                </div>
            </div>
            <div class="card">
                <div class="img">
                  <img src="https://avatars0.githubusercontent.com/u/64908399?s=460&u=cb6bc7163c5cbf01cbe06bca0237975c0d5e2928&v=4">
                </div>
                <div class="card_info">
                    <h2>Rafael Santos</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec</p> <p>volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.</p> <p>Donec vitae purus ut nisl  molestie metus.</p>
                    
                </div>
            </div>
            <div class="card">
                <div class="img">
                <img src="https://avatars3.githubusercontent.com/u/68129713?s=460&u=6a039f994ea8301c13882d58a490b975eece3585&v=4">
                </div>
                <div class="card_info">
                    <h2>Ricardo Felix</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec</p> <p>volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.</p> <p>Donec vitae purus ut nisl  molestie metus.</p>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container_1 " id="tutorial">
         <h1 class="title">Tutorial</h1>
         <div class="tutorials">
             <details>
                 <summary class="btn-primary" >Cadastro</summary>
                 <h1 class="title">Cadastro</h1>
                 <section>
                     <div class="prints_1">
                        <div class="print">
                            <img src="./assets/master-assets/img/slide_img/cadastro/cadastro_login.jpeg">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_2">
                        <div class="print">
                            <img src="./assets/master-assets/img/slide_img/cadastro/cadastro_login_opt2.jpeg">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_1">
                        <div class="print">
                            <img src="./assets/master-assets/img/slide_img/cadastro/invalid_user.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_2">
                        <div class="print">
                            <img src="./assets/master-assets/img/slide_img/cadastro/validando_user.jpeg">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_1">
                        <div class="print">
                            <img src="./assets/master-assets/img/slide_img/cadastro/registred.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_2">
                        <div class="print">
                            <img src="./assets/master-assets/img/slide_img/cadastro/login.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                 </section>
             </details>
             <details>
                 <summary class="btn-primary" >Criar Projetos</summary>
                 <h1 class="title">Criar Projetos</h1>
                 <section>
                     <div class="prints_1">
                        <div class="print">
                            <img src="./assets/master-assets/img/slide_img/projetos/projetos_inicio.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_2">
                        <div class="print">
                           <img src="./assets/master-assets/img/slide_img/projetos/select_cores.jpeg">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_1">
                        <div class="print">
                          <img src="./assets/master-assets/img/slide_img/projetos/pallet_color.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_2">
                        <div class="print">
                             <img src="./assets/master-assets/img/slide_img/projetos/titulo_projeto.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_1">
                        <div class="print">
                             <img src="./assets/master-assets/img/slide_img/projetos/final.jpeg">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_2">
                        <div class="print">
                             <img src="./assets/master-assets/img/slide_img/projetos/rename_project.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_1">
                        <div class="print">
                             <img src="./assets/master-assets/img/slide_img/projetos/delet_project.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                 </section>
             </details>
             <details>
                 <summary class="btn-primary" >Criar Colunas</summary>
                 <h1 class="title">Criar Colunas</h1>
                 <section>
                     <div class="prints_1">
                        <div class="print">
                            <img src="./assets/master-assets/img/slide_img/colunas/coluna_inicio.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_2">
                        <div class="print">
                        <img src="./assets/master-assets/img/slide_img/colunas/criar_coluna.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_1">
                        <div class="print">
                        <img src="./assets/master-assets/img/slide_img/colunas/coluna_opt.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_2">
                        <div class="print">
                        <img src="./assets/master-assets/img/slide_img/colunas/rename_column.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_1">
                        <div class="print">
                        <img src="./assets/master-assets/img/slide_img/colunas/delete_column.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                 </section>
             </details>
             <details>
                 <summary class="btn-primary" >Criar Tarefas</summary>
                 <h1 class="title">Criar Tarefas</h1>
                 <section>
                     <div class="prints_1">
                        <div class="print">
                            <img src="./assets/master-assets/img/slide_img/tarefas/criar_tarefa.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_2">
                        <div class="print">
                        <img src="./assets/master-assets/img/slide_img/tarefas/definindo_tarefa.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_1">
                        <div class="print">
                        <img src="./assets/master-assets/img/slide_img/tarefas/edit_tarefa.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_2">
                        <div class="print">
                        <img src="./assets/master-assets/img/slide_img/tarefas/delet_tarefa.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                 </section>
             </details>
             <details>
                 <summary class="btn-primary" >Perfil</summary>
                 <h1 class="title">Perfil</h1>
                 <section>
                     <div class="prints_1">
                        <div class="print">
                            <img src="./assets/master-assets/img/slide_img/tarefas/criar_tarefa.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_2">
                        <div class="print">
                        <img src="./assets/master-assets/img/slide_img/tarefas/definindo_tarefa.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_1">
                        <div class="print">
                        <img src="./assets/master-assets/img/slide_img/tarefas/edit_tarefa.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                     <div class="prints_2">
                        <div class="print">
                        <img src="./assets/master-assets/img/slide_img/tarefas/delet_tarefa.png">
                        </div>
                        <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt.
                        </div>
                     </div>
                 </section>
             </details>
         </div>
    </div>
    <div class="container_2" id="marketing">
         <h1 class="title">Por quê usar Linggo?</h1>
         <div class="chaves">
             <div class="chave">
                 <h2>Rotina</h2>
                 <p class="text">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec, volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt. Donec vitae purus ut nisl consectetur egestas quis eget nulla. Vestibulum sit amet nunc vitae enim vulputate posuere. Pellentesque rhoncus vehicula vehicula.
                 </p>
             </div>
             <div class="chave">
                 <h2>Produtividade</h2>
                 <p class="text">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec, volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt. Donec vitae purus ut nisl consectetur egestas quis eget nulla. Vestibulum sit amet nunc vitae enim vulputate posuere. Pellentesque rhoncus vehicula vehicula.
                 </p>
             </div>
             <div class="chave">
                 <h2>Practicidade</h2>
                 <p class="text">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ex, tempor eget nibh nec, volutpat vulputate lectus. Donec non lectus at massa hendrerit tincidunt. Donec vitae purus ut nisl consectetur egestas quis eget nulla. Vestibulum sit amet nunc vitae enim vulputate posuere. Pellentesque rhoncus vehicula vehicula.
                 </p>
             </div>
         </div>
    </div>
    <div class="container_1" id="cadastre-se">
        <a href="./src/php/cadastro.php" target="_self"><h2>Cadastre-se agora!</h2></a>
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
