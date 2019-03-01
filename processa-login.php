<?php
// Iniciando a Sessão
session_start();

// Conexão com o Banco de Dados
include('conexao.php');

// Recebe os dados do formulário
$login = $_POST['login'];
$senha = md5($_POST['senha']);

// Consulta ao Banco de Dados
$sql = 'SELECT * FROM usuarios WHERE login = "'.$login.'" AND senha = "'.$senha.'" ';
$resultado = mysql_query($sql);
$total = mysql_num_rows($resultado);

// Verifica se o usuário existe
if ($total == 1){

	// Dados do usuário
	$usuario = mysql_fetch_array($resultado);

	// Crio as variáveis de Sessão
	$_SESSION['cod_usuario'] = $usuario['id'];
	$_SESSION['nome'] = $usuario['nome'];
	$_SESSION['login'] = $usuario['login'];
	$_SESSION['nivel'] = $usuario['nivel'];

	// Redirecionar o Usuário
	header("Location: index.php");
} else {

	session_destroy();

	// Redirecionar o Usuário
	header("Location: login.php?mensagem=erro");
}