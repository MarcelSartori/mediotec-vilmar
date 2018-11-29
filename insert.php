<?php

include("conexao.php");

// Dados da Notícia
$categoria = $_POST['categoria'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$fonte = $_POST['fonte'];
$usuario = 1;

$sql = 'INSERT INTO noticias (categoria, titulo, texto, fonte, usuario, data_cadastro) VALUES ('.$categoria.', "'.$titulo.'", "'.$texto.'", "'.$fonte.'", '.$usuario.', NOW())';

$resultado = mysql_query($sql) or die(mysql_error());

if ($resultado) {
	echo "A notícia foi inserida com sucesso";
} else {
	echo "A notícia não pode ser inserida";
}