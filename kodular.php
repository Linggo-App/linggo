<?php
// Juan Antonio Villalpando
// juana1991@yahoo.com 
// http://kio4.com
// https://kio4.000webhostapp.com/mysqli_post.php

// 1.- IDENTIFICACION nombre de la base, del usuario, clave y servidor
$db_host="localhost";
$db_name="id16830556_web000_linggoapp";
$db_login="id16830556_linggoapp";
$db_pswd="Killua_24_AllukaNanaki";

// 2.- CONEXION A LA BASE DE DATOS
$link = new mysqli($db_host, $db_login, $db_pswd, $db_name);

$boton = $_POST['boton'];

///////////////////// BUSCAR POR NOMBRE - SEARCH BY NAME /////////////////////////////
if ($boton == "btnLogin"){
	$email=$_POST['login-email'];
	$pass= $_POST['login-senha'];
	$hacer = mysqli_query($link, "SELECT * FROM usuarios WHERE EMAIL='$email' and SENHA='$pass'");
	enviar_respuesta($hacer);
}

////////////////////////////// RESPUESTA - RESPONSE ///////////////////////
// En los casos que hay btnBuscarNombre o btnVerTabla y se debe enviar una respuesta actúa este código.
function enviar_respuesta($hacer)
{
$resultado = mysqli_query($GLOBALS['link'], "SHOW COLUMNS FROM personas");
$numerodefilas = mysqli_num_rows($resultado);
	if ($numerodefilas > 0) {
	$en_csv='';
		while ($rowr = mysqli_fetch_row($hacer)) {
			for ($j=0;$j<$numerodefilas;$j++) {
			$en_csv .= $rowr[$j].", ";
			}
		$en_csv .= "\n";
		}
	}

print $en_csv;
}
///////////////////////////////////////////////////////////////////
?>