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
                <form method="POST" action="" class="add_agenda" style="flex-direction: row;">
                 <span class="add_agenda container_form form_part1">
                    <div class="cor">
                        <h1 class="form_btn open_colors">
                        <span class="bg"></span>    
                        <p><i class="fas fa-palette"></i> Cor</p></h1>
                        <div class="cores modal_color">
                        <i class="fas fa-times close_color"></i>

                            <div class="color_content">
                                <label for="color1">
                                    <input type="radio" id="color1" name="color_agenda" value="#fff" checked> 

                                    <span style="background-color:#fff ;">
                                    
                                    </span>
                                </label>
                                <label for="color2">
                                    <input type="radio" id="color2" name="color_agenda" value="#18D97F">

                                    <span style="background-color:#18D97F;">
                                    
                                    </span>
                                </label>
                                <label for="color3">
                                    <input type="radio" id="color3" name="color_agenda" value="#8C530D">

                                    <span style="background-color:#8C530D;">
                                    
                                    </span>
                                </label>
                                <label for="color4">
                                    <input type="radio" id="color4" name="color_agenda" value="#F25922">

                                    <span style="background-color:#F25922;">
                                    
                                    </span>
                                </label>
                                <label for="color5">
                                    <input type="radio" id="color5" name="color_agenda" value="#BF544B">

                                    <span style="background-color:#BF544B;">
                                    
                                    </span>
                                </label>
                                <label for="color6">
                                    <input type="radio" id="color6" name="color_agenda" value="#D91818">

                                    <span style="background-color:#D91818;">
                                    
                                    </span>
                                </label>
                                <label for="color7">
                                    <input type="radio" id="color7" name="color_agenda" value="#242259">

                                    <span style="background-color:#242259;">
                                    
                                    </span>
                                </label>
                                <label for="color8">
                                    <input type="radio" id="color8" name="color_agenda" value="#23518C">

                                    <span style="background-color:#23518C;">
                                    
                                    </span>
                                </label>
                                <label for="color9">
                                    <input type="radio" id="color9" name="color_agenda" value="#5FC2D9">

                                    <span style="background-color:#5FC2D9;">
                                    
                                    </span>
                                </label>
                                <label for="color10">
                                    <input type="radio" id="color10" name="color_agenda" value="#F2AE30">

                                    <span style="background-color:#F2AE30;">
                                    
                                    </span>
                                </label>
                                <label for="color11">
                                    <input type="radio" id="color11" name="color_agenda" value="#D93B3B">

                                    <span style="background-color:#D93B3B;">
                                    
                                    </span>
                                </label>
                                <label for="color12">
                                    <input type="radio" id="color12" name="color_agenda" value="#F24B59">

                                    <span style="background-color:#F24B59;">
                                    
                                    </span>
                                </label>
                                <label for="color13">
                                    <input type="radio" id="color13" name="color_agenda" value="#666CD9">

                                    <span style="background-color:#666CD9;">
                                    
                                    </span>
                                </label>
                                <label for="color14">
                                    <input type="radio" id="color14" name="color_agenda" value="#02734A">

                                    <span style="background-color:#02734A;">
                                    
                                    </span>
                                </label>
                                <label for="color15">
                                    <input type="radio" id="color15" name="color_agenda" value="#F2C335">

                                    <span style="background-color:#F2C335;">
                                    
                                    </span>
                                </label>
                                <label for="color16">
                                    <input type="radio" id="color16" name="color_agenda" value="#F2AFA0">

                                    <span style="background-color:#F2AFA0;">
                                    
                                    </span>
                                </label>
                            </div>
                            <span id="ok_btn" class="form_btn">
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
                    <div id="prox" class="form_btn">
                        <span class="bg"></span>
                        <p>Próximo</p>
                    </div>
                 </span>
                 <div class="overlay"></div>

                 <span class="add_agenda container_form form_part2">
                     <h1>parte 2</h1>
                     <div id="ant">
                        <p>voltar</p>
                    </div>
                 </span>
                </form>
 
            </div>  
        </section>

        <div class="overlay"></div>
</body>
</html>