<?php
// Iniciando Sessão
if (session_status() !== PHP_SESSION_ACTIVE ){ 
	session_start();
}


if (isset($_SESSION['cod_usuario'])){

	if ($_SESSION['nivel'] != "administrador"){
		header("Location: login.php?mensagem=erro-administrador");
	}

} else{
	header("Location: login.php");
}