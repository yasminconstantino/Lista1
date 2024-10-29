<?php
// Recebe os dados do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cidade = $_POST['cidade'];

// Valida a idade
if ($idade < 18) {
    echo "Inscrição Inválida. É necessário ter 18 anos ou mais.";
} else {
    // Verifica a cidade escolhida
    switch ($cidade) {
        case '1':
        case '2':
            echo "Olá, " . $nome . ". Sua inscrição para a Zona Sul foi realizada com sucesso.";
            break;
        case '3':
            echo "Olá, " . $nome . ". Sua inscrição para a Capital foi realizada com sucesso.";
            break;
        default:
            echo "Cidade inválida.";
    }
}
?>