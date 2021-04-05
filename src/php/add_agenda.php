<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/arquivo.js"></script>
    <title>Tela principal</title>
</head>
<body>
    <?php 
        include("./header.php");
    ?>
    <div class="div_consulta">
        <h1 class="titulo">Todas as agendas</h1>
        <form class="consulta" action="" method="get">
            <div class="barra_busca">
                <input type="text" name="" id="" placeholder="Procurar Agenda..."><label for="search"><i class="fas fa-search btn_search"></i></label>
                <input type="submit" id="search" style="display: none;">
            </div>
            <select name="" id="">
                <option value="categoria">Categoria</option>
                <option value="titulo">Titulo</option>
            </select>
        </form>
    </div>
    <div class="agendas">
        <div class="create_schedule schedules">
          <i class="fas fa-plus-circle"></i>
        </div>
        <!-- <div class="schedules">
          <h1 class="schedule_titulo">
              Titulo
          </h1>
          <h2 class="schedule_categoria">
              Categoria
          </h2>
        </div> -->
    </div>
    <section class="lightbox">
            <div class="modal">
                <i class="fas fa-times close"></i>
                <form method="POST" action="" class="add_agenda">
                 <span class="add_agenda container_form form_part1">
                    <div class="cor">
                        <h1 class="form_btn open_colors">
                        <span class="bg"></span>    
                        <p><i class="fas fa-palette"></i> Cor</p></h1>
                        <div class="cores modal_color">
                        <i class="fas fa-times close_color"></i>

                            <div class="color_content">
                                <span>

                                </span>
                            </div>
                            <span class="form_btn">
                            <span class="bg"></span>  

                                <p>Ok</p>
                            </span>
                        </div>
                    </div>
                    <label class="input" for="titulo">
                        <input type="text" placeholder=" " id="titulo" name="titulo">
                        <span class="place">Titulo</span>
                    </label>
                    <label class="input" for="assunto">
                        <input type="text" placeholder=" " id="assunto" name="assunto">
                        <span class="place">Assunto</span>
                    </label>
                    <label class="form_btn">
                        <span class="bg"></span>
                        <p>Próximo</p>
                    </label>
                 </span>
                </form>
            </div>  
        </section>

        <div class="overlay"></div>
</body>
</html>