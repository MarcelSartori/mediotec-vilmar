<?php

include('conexao.php');

// Recebo os dados do Registro
$categoria = $_POST['categoria'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$foto = $_FILES['foto'];
$fonte = $_POST['fonte'];
$usuario = 1;
$id = $_POST['id'];


// Verifica se a foto foi enviada
if ($foto['error'] == 4){ // Imagem não enviada

	$sql_noticia = "SELECT * FROM noticias WHERE id = ".$id;
	$resultado_noticia = mysql_query($sql_noticia);
	$noticia = mysql_fetch_array($resultado_noticia);

	$novo_nome = $noticia['foto'];

} else {

	// Upload de Foto
	$pasta = 'fotos/';
	$nome = $foto['name'];
	$ext = end(explode('.', $nome));
	$novo_nome = md5(date('d-m-Y h:i:s')).'.'.$ext;

	move_uploaded_file($foto['tmp_name'], $pasta.$novo_nome);
}

$sql = 'UPDATE noticias SET categoria = '.$categoria.', titulo = "'.$titulo.'", texto = "'.$texto.'", foto = "'.$novo_nome.'", fonte = "'.$fonte.'", usuario = '.$usuario.' WHERE id = '.$id;

$resultado = mysql_query($sql) or die(mysql_error());

if ($resultado) {
	header("Location: index.php?mensagem=sucesso");
} else {
	header("Location: index.php?mensagem=falha");
}