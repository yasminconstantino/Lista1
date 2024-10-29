<?php
$numero = $_POST['numero'];

if ($numero < 0) {
    echo "Número negativo.";
} else {
    $soma = 0;
    for ($i = 1; $i < $numero; $i++) {
        $soma += $i;
    }
    echo "A soma dos números menores que " . $numero . " é: " . $soma;
}
?>