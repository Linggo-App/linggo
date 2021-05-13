<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../global.css">
    <title>Perfil</title>
</head>
<body>
    <?php
     
        include("./header");
        if(!isset($_SESSION["id_user"])){
            header("location: cadastro");
        }else{
            echo $_SESSION["username"];
    ?>
        <form method="post">
            <input type="submit" name="logout" class="logs" value="Logout">
        </form>

</body>
</html>
<?php 
            if(isset($_POST["logout"])){
                session_unset();
                session_destroy();
                echo "<script>location.reload();</script>";
            }
        }
?>