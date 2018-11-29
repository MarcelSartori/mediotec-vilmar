<?php

include('conexao.php');

// Recebo os dados do Registro
$categoria = 1;
$titulo = "[EDITADO] Notícia de Teste";
$texto = "[EDITADO] Texto da Notícia de Teste";
$foto = NULL;
$fonte = "[EDITADO] Marcel";
$usuario = 1;

$id = $_GET['id'];

$sql = 'UPDATE noticias SET categoria = '.$categoria.', titulo = "'.$titulo.'", texto = "'.$texto.'", foto = "'.$foto.'", fonte = "'.$fonte.'", usuario = '.$usuario.' WHERE id = '.$id;

$resultado = mysql_query($sql) or die(mysql_error());

if ($resultado){
	echo "Registro atualizado com sucesso!";
} else {
	echo "Erro ao atualizar o registro";
}