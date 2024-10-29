<?php
// Recebe os dados do formulário via GET
$nome = $_GET['nome'];
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];

// Calcula a média
$media = ($nota1 + $nota2 + $nota3) / 3;

// Exibe o resultado
echo "Nome do Estudante: " . $nome . "<br>";
echo "Média: " . $media;
?>