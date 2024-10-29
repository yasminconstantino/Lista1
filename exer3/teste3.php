<?php
// Recebe os dados do formulário
$nome = $_POST['nome'];
$livro = $_POST['livro'];
$tipo_usuario = $_POST['tipo_usuario'];

// Calcula a data de devolução
$data_atual = date("Y-m-d");
if ($tipo_usuario == 1) { // Professor
    $prazo = 14;
} else { // Aluno
    $prazo = 7;
}
$data_devolucao = date('Y-m-d', strtotime($data_atual . ' + ' . $prazo . ' days'));

// Exibe o recibo
echo "<h2>Recibo de Empréstimo</h2>";
echo "<p>Nome do Usuário: " . $nome . "</p>";
echo "<p>Livro Emprestado: " . $livro . "</p>";
echo "<p>Data do Empréstimo: " . $data_atual . "</p>";
echo "<p>Data de Devolução: " . $data_devolucao . "</p>";
?>