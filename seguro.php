<?php
// Iniciando Sessão
session_start();

echo '<pre>';
echo session_id();
print_r($_SESSION);
echo '</pre>';