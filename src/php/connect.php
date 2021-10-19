<?php
    ini_set('memory_limit', '-1');
    $host="localhost"; // Host do DB 
    $con= new MySQLi("$host","root","","linggo") or die ("Error to connect in the DB"); // Inicia conexção com DB
    // $serv="linggapp.000webhostapp.com/"; //Prefixo para faciliatar linkagem
    $serv="localhost/linggo/"; //Prefixo para faciliatar linkagem
    mysqli_set_charset($con,"utf8"); // Setando banco para aceitar caracteres especiais 
    
    session_start(); // Iniciando sessão 
?>
