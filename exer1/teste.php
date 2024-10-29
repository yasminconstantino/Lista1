<?php
// Recebe os dados do formulário
$altura = $_POST['altura'];
$sexo = $_POST['sexo'];

// Valida os dados (pode adicionar mais validações)
if (empty($altura) || empty($sexo)) {
    echo "Por favor, preencha todos os campos.";
    exit;
}

// Calcula o peso ideal com base no sexo
if ($sexo == 1) { // Feminino
    $peso_ideal = (62.1 * $altura) - 44.7;
} else { // Masculino
    $peso_ideal = (72.7 * $altura) - 58;
}

// Formata o resultado para duas casas decimais
$peso_ideal = number_format($peso_ideal, 2, '.', '');

// Exibe o resultado
echo "O seu peso ideal é: " . $peso_ideal . " kg";

?>