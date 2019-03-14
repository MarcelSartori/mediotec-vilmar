<?php

// Criando um Cookie com 3 dias de duração
//setcookie('nome', 'Marcel', (time() + (3 * 24 * 3600)));

// Apagando um Cookie
unset($_COOKIE['nome']);

// Exibindo o valor o Cookie
print_r($_COOKIE);