<?php

// Recebo os dados do Form
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];


$texto = 'O usuário <strong>'.$nome.'</strong> entrou em contato via site.<br>';
$texto .= 'E-mail: <strong>'.$email.'</strong><br>';
$texto .= 'Telefone: <strong>'.$telefone.'</strong><br>';
$texto .= '<br>Mensagem enviada:<br>'.$mensagem;

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

$envio = mail('mslwebstudio@gmail.com', 'Formulário de Contato via site', $texto, $headers);

if ($envio){
	echo 'Mensagem enviada com sucesso!';
} else {
	echo "Houve um erro ao enviar a mensagem. Tente novamente.";
}