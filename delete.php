<?php

include("conexao.php");

$id = $_GET['id'];

$sql = 'DELETE FROM noticias WHERE id = '.$id;

$resultado = mysql_query($sql) or die(mysql_error());

if ($resultado) {
	header("Location: index.php?mensagem=sucesso");
} else {
	header("Location: index.php?mensagem=falha");
}