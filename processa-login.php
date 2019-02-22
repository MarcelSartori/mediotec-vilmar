<?php

// Conexão com o Banco de Dados
include('conexao.php');

// Recebe os dados do formulário
$login = $_POST['login'];
$senha = md5($_POST['senha']);

echo 'Login: '.$login.'<br>';
echo 'Senha: '.$senha.'<br>';