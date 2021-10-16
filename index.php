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



    <style>

    /*aplicando uma nova grid area exclusiva para o header da página home, em que o menu ocupa as duas primeiras colunas e o logo da página ocupa a ultima coluna*/

         header{

            grid-template-areas: 

            "menu menu logo"

            ;

            /* position: fixed;

            top: 0;

            z-index: 10000; */

        } 



/*resetando algumas configurações, como flex grow e aplicando um novo valor fixo*/

        .menu__createbtn{

            flex-grow: 0;

            width: 200px;

        }



/*configuração para smartphone*/

        @media(max-width:680px){

            

            /*alterando a grid area para o botão do menu assumir as duas primeiras colunas*/

    header{

        grid-template-areas: 

        "menu_btn menu_btn logo"

        "menu menu menu"

        !important;

       /* overflow: hidden; */

       position: relative;

       

    }

        }



/*configuração para tablets*/

        @media(max-width:900px){

            

             /*alterando a grid area para o botão do menu assumir as duas primeiras colunas*/

    header{

        grid-template-areas: 

        "menu_btn menu_btn logo"

        "menu menu menu"

       ;

       /* overflow: hidden; */

       position: relative;

       

    }

}

</style>

</head>



<body>

<header><!--abrindo a tag header -->

        <input type="checkbox" name="" id="check_menu" style="display: none;"><!-- checkbox para acionar o menu nas telas de smartphones e tablets, com display none para ficar invisivel  -->

        <label id="menu_btn" for="check_menu" ><!--abrindo a label que ficará responsável de ativar o checkbox -->

              <i class="fas fa-bars"></i><!-- icone de hamburguer retirado do site fontawesome, formando o icone através da cdn localizado no head -->

             </label><!-- fechando a tag label -->

        <nav class="menu"><!-- abrindo a tag nav e aplicando a classe menu -->

    

            <ul><!-- abrindo a tag ul para criar uma lista -->

                <li><a href="#sobre" target="_self"><i class="fas fa-info-circle"></i> Sobre</a></li><!-- primeiro item, com o link para o container Sobre e icone do site fontawesome -->

                <li><a href="#equipe" target="_self"><i class="fas fa-users"></i> Equipe</a></li><!-- segundo item, com o link para o container Equipe e icone do site fontawesome -->

                <li><a href="https://www.facebook.com/Linggo-APP-104781658511510/" target="_blank"><i class="fas fa-question-circle"></i> Suporte</a></li><!-- terceiro item, com o link para a nossa página no facebook voltado para o suporte ao nosso usuário e icone do site fontawesome -->

                <li class="menu__createbtn"><a href="./src/php/add_agenda" target="_self"><i class="fas fa-plus"></i> Criar Projeto</a></li><!-- quarto item, com o link para a página de add_agenda para criar projetos e icone do site fontawesome -->

            </ul><!-- fechando a tag de lista -->

        </nav><!-- fechando a tag nav -->

        <a class="cont_logo" href="./index" target="_self"><img class="logo" src="./assets/LingoApp_Branco.png" alt="Logo da página com cores em branco"></a><!-- link que leva para a página home com uma imagem do nosso logo em branco para se destacar com o fundo da página -->

    </header><!-- fechando a tag header -->



    <div class="container_index container_2"><!-- abrindo container central da página home e o primeiro a ser exibido -->

            <img src="./assets/Linggo-Logo.png" alt="" ><!-- tag de img que busca a imagem do nosso logo na pasta assets -->

            <div class="btn-primary"><a href="./src/php/add_agenda" target="_self"><i class="fas fa-plus"></i> Criar Projeto</a></div><!-- div para criar o botão de criar projeto semelhante ao do header, e com link para a página de add_agenda -->

    </div><!-- fechando o container index -->

    

    <div class="container_1"  id="sobre"><!-- abrindo container Sobre -->

        <h1 class="title">Sobre</h1><!-- h1 com class title, para determinar o titulo do container -->

        <p class="text"><!-- abrindo paragrafo com class text, determinado onde ficará o texto do container -->

        Nosso site/app apresenta uma vasta simplicidade para o seu cotidiano, ajudando a organizar sua rotina. Esse projeto foi criado com intuito de simplificar a vida dos estudantes e dos professores em suas tarefas, ajudando na organização de trabalhos, provas e outras atividades. Mas também pode ser usado como uma ferramenta de trabalho para freelancers ou para empresas que buscam organizar melhor suas rotinas e melhorar seus rendimentos. O nosso principal objetivo é ajudar o usuário a ser mais organizado e produtivo no seu dia a dia.

        </p><!-- fechando a tag do paragrafo -->

    </div><!-- fechando o container sobre -->

    

    <div class="container_2" id="equipe"><!-- abrindo container equipe -->

        <h1 class="title">Equipe</h1><!-- h1 com class title, para determinar o titulo do container -->

        <div class="cards"><!-- abrindo o container dos cards -->

            <div class="card"><!-- abrindo container card -->

                <div class="img"><!-- abrindo class img -->

                    <img src="https://avatars2.githubusercontent.com/u/62577482?s=460&u=9cd418ac4c3ff1b1817567f32848c642fc5c4976&v=4"> <!-- tag img capturando a imagem  de perfil do github -->

                </div><!-- fechando o container img -->

                

                <div class="card_info"><!-- abrindo container de informações -->

                    <h2>Caio Valdoveste</h2><!-- nome do integrante -->

                    <p><li>Gerente de projeto</li></p><!-- informação -->

                    <p><li>Desenvolvedor do App</li></p><!-- informação -->

                    <p><li>Desenvolvedor full stack</li></p><!-- informação -->

                </div><!-- fechando container das informações -->

            </div><!-- fechando container card -->

            <!--<div class="card">-->

            <!--    <div class="img">-->

            <!--    <img src="https://avatars.githubusercontent.com/u/71861617?v=4">-->

            <!--    </div>-->

            <!--    <div class="card_info">-->

            <!--        <h2>Leticia Smidt</h2>-->

            <!--        <p><li>Redatora</li></p> -->

            <!--        <p><li>Desenvolvedor front-end</li></p>-->

            <!--        <p><li>Assistente de Designer</li></p>-->

            <!--    </div>-->

            <!--</div>-->

            <div class="card">

                <div class="img">

                  <img src="https://avatars0.githubusercontent.com/u/64908399?s=460&u=cb6bc7163c5cbf01cbe06bca0237975c0d5e2928&v=4">

                </div>

                <div class="card_info">

                    <h2>Rafael Santos</h2>

                    <p><li>Desenvolvedor full stack</li></p>

                    <p><li>Assistente de Designer</li></p>

                    <p><li>Redator</li></p>    

                </div>

            </div>

            <!--<div class="card">-->

            <!--    <div class="img">-->

            <!--    <img src="https://avatars3.githubusercontent.com/u/68129713?s=460&u=6a039f994ea8301c13882d58a490b975eece3585&v=4">-->

            <!--    </div>-->

            <!--    <div class="card_info">-->

            <!--        <h2>Ricardo Felix</h2>-->

            <!--        <p><li>Designer</li></p>-->

            <!--        <p><li>Redator</li></p>  -->

            <!--        <p><li>Ajudante geral</li></p>-->

            <!--    </div>-->

            <!--</div>-->

        </div><!-- fechando container dos cards -->

    </div><!-- fechando o container equipe -->

    

    <div class="container_1 " id="tutorial"><!-- abrindo container tutorial -->

         <h1 class="title">Tutorial</h1><!-- titulo -->

         <div class="tutorials"><!-- abrindo container de tutoriais -->

             <details><!-- abrindo tag details para fazer detalhamentos na página -->

                 <summary class="btn-primary" >Cadastro</summary><!-- summary é uma tag que anda junto com a tag details e sem essa tag a details não funciona-->

                 <h1 class="title">Cadastro</h1><!-- titulo -->

                 <section><!-- abrindo uma sessão -->

                     <div class="prints_1"><!-- print 1, organizará as imagens á direita e os textos á esquerda -->

                        <div class="print"><!-- abrindo container onde se localizará a imagem -->

                            <img src="./assets/master-assets/img/slide_img/cadastro/cadastro_login.jpeg"><!-- tag img capturando as imagens na pasta assets -->

                        </div><!-- fechando container da imagem -->

                        <div class="text">><!-- abrindo container onde se localizara o texto -->

                            Para acessar a página de cadastro e login, basta clicar no icone

                            localizado em nosso header no canto superior esquerdo, este icone lhe redirecionará para essa tela que está dividida em duas partes, no lado esquerdo pode fazer o login caso já for cadastrado e no lado direito você pode estar fazendo seu cadastro em nossa página.

                        </div><!-- fechando container do texto -->

                     </div><!-- fechando container da print 1 -->

                     

                     <div class="prints_2"><!-- print 2, organizará os textos á direita e as imagens á esquerda -->

                        <div class="print">

                            <img src="./assets/master-assets/img/slide_img/cadastro/cadastro_login_opt2.jpeg">

                        </div>

                        <div class="text">

                            Tambem é possível acessar a página clicando no nome "Logar" ao 

                            lado do icone. Para efetuar o cadastro, basta preencher os seguntes campos: apelido, email e senha.

                        </div>

                     </div><!-- fechando container da print 2 -->

                     <div class="prints_1">

                        <div class="print">

                            <img src="./assets/master-assets/img/slide_img/cadastro/invalid_user.png">

                        </div>

                        <div class="text">

                            Caso os campos ficarem em vermelho, significa que estão invalidos e seu cadastro não será efetuado, isso pode ocorrer caso seu apelido não atingir a quantidade minima de caractéres(obs: mínimo de 6 caractéres), também pode acontecer se seu email não for válido e esse pode ocorrer ao tentar confirmar sua senha, pois as senhas devem ser compátiveis para evitar erros de digitação por parte do usuário. 

                        </div>

                     </div>

                     <div class="prints_2">

                        <div class="print">

                            <img src="./assets/master-assets/img/slide_img/cadastro/validando_user.jpeg">

                        </div>

                        <div class="text">

                            Quandos os campos ficarem em verde, significa que todos os dados estão válidos e você poderá efetuar o cadastro com sucesso. (obs: Se o email já estiver cadastrado em nossa página, o sistema não permitirá que você realize o cadastro com o mesmo email).

                        </div>

                     </div>

                     <div class="prints_1">

                        <div class="print">

                            <img src="./assets/master-assets/img/slide_img/cadastro/registred.png">

                        </div>

                        <div class="text">

                            Se essa menssagem aparecer, seu cadastro foi realizado com sucesso!

                        </div>

                     </div>

                     <div class="prints_2">

                        <div class="print">

                            <img src="./assets/master-assets/img/slide_img/cadastro/login.png">

                        </div>

                        <div class="text">

                            Para efetuar seu login, utilize o email e a senha que você cadastrou em nosso site, basta clicar em login e pronto! Já pode utilizar nossa página para organizar suas rotinas e seus projetos. 

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

                            Após efetuar o login, o usuário será direcionado para essa página, aqui é o começo de tudo onde o usuário poderá organizar suas rotinas e projetos, para começar, basta clicar no quadrado cinza com o icone "+".

                        </div>

                     </div>

                     <div class="prints_2">

                        <div class="print">

                           <img src="./assets/master-assets/img/slide_img/projetos/select_cores.jpeg">

                        </div>

                        <div class="text">

                            Após clicar no icone, essa janela irá se abrir, aqui o usuário pode definir a cor de sua rotina (para ser mais facil de identificar) e também pode definir um titulo para sua rotina.

                        </div>

                     </div>

                     <div class="prints_1">

                        <div class="print">

                          <img src="./assets/master-assets/img/slide_img/projetos/pallet_color.png">

                        </div>

                        <div class="text">

                            Clicando em "Cor", essas opções de cores vão se abrir e dessa forma o usuário poderá escolher a cor que mais se encaixa com o tema de sua rotina (dentro das cores que aparecem na paleta).

                        </div>

                     </div>

                     <div class="prints_2">

                        <div class="print">

                             <img src="./assets/master-assets/img/slide_img/projetos/titulo_projeto.png">

                        </div>

                        <div class="text">

                            Definindo um titulo para sua rotina, esse titulo poderá ser alterado caso o usuário preferir, esse titulo busca facilitar a identificação para o usuário. Após definir essas duas coisas, basta clicar no botão abaixo para criar sua rotina.

                        </div>

                     </div>

                     <div class="prints_1">

                        <div class="print">

                             <img src="./assets/master-assets/img/slide_img/projetos/final.jpeg">

                        </div>

                        <div class="text">

                            Após criar o projeto, basta clicar no mesmo para que o usuário seja direcionado para a página de rotina, lá o usuário poderá construir suas colunas e definir suas tarefas e horários.

                        </div>

                     </div>

                     <div class="prints_2">

                        <div class="print">

                             <img src="./assets/master-assets/img/slide_img/projetos/rename_project.png">

                        </div>

                        <div class="text">

                            Caso o usuário queira renomear seu projeto, basta clicar na caixa onde está marcado em vermelho, e escrever um novo titulo, após clicar fora da caixa de texto o projeto será renomeado.

                        </div>

                     </div>

                     <div class="prints_1">

                        <div class="print">

                             <img src="./assets/master-assets/img/slide_img/projetos/delet_project.png">

                        </div>

                        <div class="text">

                            Para deletar o projeto, basta clicar no botão que está localizado ao lado do nome do projeto, o projeto não será excluido permanentemente, ele ficará localizado em seu perfil e poderá ser restaurado quando o usuário preferir.

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

                            Essa é a página de rotina, aqui o usuário pode criar colunas e tarefas para organizar seu projeto, para criar uma coluna é muito simples basta clicar nessa coluna vazia onde o mouse está indicando.

                        </div>

                     </div>

                     <div class="prints_2">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/colunas/criar_coluna.png">

                        </div>

                        <div class="text">

                            Após clicar, essa janela irá se abrir, basta definir um nome para sua coluna e clicar no botão "Criar coluna".

                        </div>

                     </div>

                     <div class="prints_1">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/colunas/coluna_opt.png">

                        </div>

                        <div class="text">

                            Após criar a coluna, você terá acesso a dois botões, o botão com icone "+" serve para o usuário criar uma tarefa para a coluna. os botão com icone "..." serve para acessar algumas configurações da coluna.

                        </div>

                     </div>

                     <div class="prints_2">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/colunas/rename_column.png">

                        </div>

                        <div class="text">

                            Clicando em renomear coluna, irá abrir essa janela para que o usuário possa trocar o nome de sua coluna, caso ele queira.

                        </div>

                     </div>

                     <div class="prints_1">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/colunas/delete_column.png">

                        </div>

                        <div class="text">

                            Ao clicar em deletar a coluna, a coluna será excluida permanentemente junto com as tarefas criadas nessa coluna. 

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

                            Clicando no icone "+" na parte de cima da coluna, abrirá a opção de criar uma tarefa, basta preencher seus campos e pressionar o botão Adicionar. Caso queria cancelar a ação clique em cancelar.

                        </div>

                     </div>

                     <div class="prints_2">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/tarefas/definindo_tarefa.png">

                        </div>

                        <div class="text">

                            Para definir uma tarefa é preciso determinar um nome e um horário que para executá-la, após definir esses campos, basta clicar em "Adicionar" para criar sua tarefa.

                        </div>

                     </div>

                     <div class="prints_1">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/tarefas/edit_tarefa.png">

                        </div>

                        <div class="text">

                            Após criar sua tarefa, o usuário ganha acesso á duas opções, editar a tarefa e deletar a tarefa. Para editar a tarefa, basta clicar no icone onde está marcado em verde, assim abrirá uma janela para que o usuário possa editar o nome da tarefa e também o horário.

                        </div>

                     </div>

                     <div class="prints_2">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/tarefas/delet_tarefa.png">

                        </div>

                        <div class="text">

                            Para deletar a tarefa, basta clicar no icone marcado em vermelho e a tarefa será excluida permanentemente.

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

                            <img src="./assets/master-assets/img/slide_img/perfil/entrando_na_pag.png">

                        </div>

                        <div class="text">

                            Para acessar a página de perfil, basta clicar clicar no icone localizado no canto superior do header ou clicar no seu username que fica ao lado do icone.

                        </div>

                     </div>

                     <div class="prints_2">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/perfil/perfil_inicio.png">

                        </div>

                        <div class="text">

                            Nessa página o usuário pode editar algumas configurações de seu perfil como apelido e troca de senha e também o usuário tem acesso

                            a seus projetos excluidos caso queira restaurá-los. 

                        </div>

                     </div>

                     <div class="prints_1">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/perfil/editar_perfil.png">

                        </div>

                        <div class="text">

                            Para editar seu perfil basta clicar no primeiro botão nas opções localizadas ao lado esquerdo da tela.

                        </div>

                     </div>

                     <div class="prints_2">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/perfil/trocando_nome.png">

                        </div>

                        <div class="text">

                            Para trocar o apelido, basta clicar na caixa de texto onde está o apelido atual do usuário e digitar um novo apelido, após terminar de digitar basta clicar no botão "Salvar Alteração".

                        </div>

                     </div>

                     <div class="prints_1">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/perfil/salvando_senha.png">

                        </div>

                        <div class="text">

                            Para trocar sua senha atual, basta preencher os campos com sua senha atual, sua nova senha e a confirmação de sua nova senha, após preencher tudo basta clicar em salvar nova senha.

                        </div>

                     </div>

                     <div class="prints_2">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/perfil/proj_delets.png">

                        </div>

                        <div class="text">

                            Clicando em Projetos Excluidos, o usuário poderá visualizar seus projetos antigos que foram excluidos por algum motivo.

                        </div>

                     </div>

                     <div class="prints_1">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/perfil/restore_proj.png">

                        </div>

                        <div class="text">

                            Para restaurar o projeto, basta clicar no projeto que queira restaurar e será encaminhado para essa página, onde é possível visualizar as rotinas e as tarefas dentro daquele projeto que foi deletado.

                        </div>

                     </div>

                     <div class="prints_2">

                        <div class="print">

                        <img src="./assets/master-assets/img/slide_img/perfil/restore_proj2.png">

                        </div>

                        <div class="text">

                            Basta clicar em confirmar que o projeto será restaurado. (Obs: Se exceder o limite dos projetos criados, não poderá restaurar o projeto).

                        </div>

                     </div>

                 </section>

             </details>

         </div>

    </div>

    <div class="container_2" id="marketing"><!-- abrindo container marketing -->

         <h1 class="title">Por quê usar Linggo?</h1><!-- titulo -->

         <div class="chaves"><!-- abrindo container das palavras chaves -->

             <div class="chave"><!-- abrindo container da chave onde ficarão titulos e textos -->

                 <h2>Rotina</h2><!-- titulo -->

                 <p class="text"><!-- abrindo container onde se localiza o texto -->

                    Organize a rotina de seus projetos de modo mais rápido e prático! Com Linggo você consegue organizar seus estudos, seus trabalhos e traçar caminhos para a realização de seus objetivos. 

                 </p><!-- fechando a tag de texto -->

             </div><!-- fechando container da palavra chave -->

             <div class="chave">

                 <h2>Produtividade</h2>

                 <p class="text">

                    Aumente a sua produtividade criando tarefas e definindo hora certa para começa-las! Quando se define um tempo certo para a execução de uma tarefa, seu pensamento não se desvia até que consiga completa-la.

                 </p>

             </div>

             <div class="chave">

                 <h2>Praticidade</h2>

                 <p class="text">

                    Linggo trabalha com o sistema de de Kanban de forma mais simples para facil compreensão de usuários que não estão acostumados com esse sistema de organização.

                 </p>

             </div>

         </div><!-- fechando container das palavras chaves -->

    </div><!-- fechando container de marketing -->

    

    <div class="container_1" id="cadastre-se"><!-- abrindo container cadastre-se -->

        <a href="./src/php/cadastro" target="_self"><h2>Cadastre-se agora!</h2></a><!-- link para a página de cadastro com um h2 para destacar o texto dentro do link -->

    </div><!-- fechando container cadastre-se -->

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

