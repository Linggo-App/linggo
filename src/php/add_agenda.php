<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="schedules">
          <h1 class="schedule_titulo">
              Titulo
          </h1>
          <h2 class="schedule_categoria">
              Categoria
          </h2>
        </div>
    </div>
</body>
</html>