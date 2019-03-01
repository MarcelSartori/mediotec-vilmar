<?php

session_start();

// Ver os dados da sessão
echo '<pre>';
print_r($_SESSION);
print_r(session_status());
echo '</pre>';
