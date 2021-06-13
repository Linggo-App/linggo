<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../global.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/support.css">
    <title>Suporte</title>
</head>
<?php include("./header.php"); ?>
<body>
    <section class="container_index container_2">
        <form action="" method="post">
        <h1 class="title">Como podemos ajudar?</h1><br><br>
        <label class="input" for="nome">
                <input type="text" placeholder=" " id="nome" name="nome" required>
                <span class="place">Nome Completo</span>
            </label><br>
            <label class="input" for="email">
                <input type="text" placeholder=" " id="email" name="email" required>
                <span class="place">Digite seu Email</span>
            </label><br>
            <label class="input" for="assunto">
                <input type="text" placeholder=" " id="assunto" name="assunto" maxlength="15" required>
                <span class="place">Assunto</span>
            </label>
            <br>
            <textarea class="input" placeholder="mensagem" name="msg" id="msg" cols="30" rows="5"></textarea><br>
            <label for="enviar_email" class="form_btn">
                <input type="submit" id="enviar_email" name="enviar_email" value="" style="display:none;">
                <span class="bg"></span>
                <p>Enviar</p>
            </label>
        </form>
    </section>  
    <footer>
         <?php include("./footer.php"); ?>
    </footer>
</body>
</html>

<?php
    if(isset($_POST["enviar_email"])){
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $assunto=$_POST["assunto"];
        $msg=$_POST["msg"];
        $dest="linggoapp@hotmail.com";

       // var_dump(mail($dest,$assunto,$msg,$email));

        if(mail($dest,$assunto,$msg,$nome,$email)){
            echo "<script>alert('Seu email foi enviado! Em breve entraremos em contato!')</script>";
        }else{
            echo "<script>alert('Seu não email foi enviado! Tente novamente mais tarde')</script>";
        }
    }
?>