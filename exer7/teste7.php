<?php
// Recebe os dados do formulário via POST
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$bandeira = $_POST['bandeira'];

// Exibe os dados recebidos
echo "Nome: " . $nome . "<br>";
echo "Email: " . $email . "<br>";
echo "CPF: " . $cpf . "<br>";
echo "Bandeira do Cartão: " . $bandeira;
?>