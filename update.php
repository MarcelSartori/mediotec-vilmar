<?php

include('conexao.php');

// Recebo os dados do Registro
$categoria = $_POST['categoria'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$foto = NULL;
$fonte = $_POST['fonte'];
$usuario = 1;

$id = $_POST['id'];

$sql = 'UPDATE noticias SET categoria = '.$categoria.', titulo = "'.$titulo.'", texto = "'.$texto.'", foto = "'.$foto.'", fonte = "'.$fonte.'", usuario = '.$usuario.' WHERE id = '.$id;

$resultado = mysql_query($sql) or die(mysql_error());

if ($resultado){
	header("Location: index.php");
} else {
	echo "Erro ao atualizar o registro";
}