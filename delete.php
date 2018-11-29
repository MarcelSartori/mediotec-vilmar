<?php

include("conexao.php");

$id = $_GET['id'];

$sql = 'DELETE FROM noticias WHERE id = '.$id;

$resultado = mysql_query($sql) or die(mysql_error());

if ($resultado) {
	echo "O registro foi excluído com sucesso";
} else {
	echo "Não foi possível excluir o registro";
}