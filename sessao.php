<?php

session_start();

// Variáveis de Sessão
$_SESSION['nome'] = "Marcel Sartori";
$_SESSION['login'] = "admin";
$_SESSION['nivel'] = "administrador";


// Ver os dados da sessão
echo '<pre>';
print_r($_SESSION);
echo '</pre>';