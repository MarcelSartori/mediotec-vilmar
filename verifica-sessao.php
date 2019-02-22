<?php

session_start();
echo session_id().'<br>';

echo 'Olá '.$_SESSION['nome'].' seja bem vindo ao sistema!';

// Ver os dados da sessão
echo '<pre>';
print_r($_SESSION);
echo '</pre>';