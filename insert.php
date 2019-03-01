<?php
// Iniciando a Sessão
session_start();

include("conexao.php");

// Dados da Notícia
$categoria = $_POST['categoria'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$fonte = $_POST['fonte'];
$foto = $_FILES['foto'];
$usuario = $_SESSION['cod_usuario'];

echo '<pre>';
print_r($foto);
echo '</pre>';

// Upload de Foto
$pasta = 'fotos/';
$nome = $foto['name'];
$ext = end(explode('.', $nome));
$novo_nome = md5(date('d-m-Y h:i:s')).'.'.$ext;

move_uploaded_file($foto['tmp_name'], $pasta.$novo_nome);

$sql = 'INSERT INTO noticias (categoria, titulo, texto, fonte, foto, usuario, data_cadastro) VALUES ('.$categoria.', "'.$titulo.'", "'.$texto.'", "'.$fonte.'", "'.$novo_nome.'", '.$usuario.', NOW())';

$resultado = mysql_query($sql) or die(mysql_error());

if ($resultado) {
	header("Location: index.php?mensagem=sucesso");
} else {
	header("Location: index.php?mensagem=falha");
}