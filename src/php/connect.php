<?php
    ini_set('memory_limit', '-1');
    $con=mysqli_connect("localhost","root","","linggo") or die ("Sem conexão"); 
    $serv="localhost/linggo/";
    // $host="localhost"; // Host do DB 
    // $usuario="id16830556_linggoapp"; // Usuário do DB
    // $senha="Killua_24_AllukaNanaki"; // Nome do Banco
    // $banco="id16830556_web000_linggoapp"; // Nome do DB
    // $con= new MySQLi("$host","$usuario","$senha","$banco") or die ("Error to connect in the DB"); // Inicia conexção com DB
    // $serv="linggapp.000webhostapp.com/"; //Prefixo para faciliatar linkagem
    mysqli_set_charset($con,"utf8"); // Setando banco para aceitar caracteres especiais 
    
    session_start(); // Iniciando sessão 
?>