<?php
// Obtém os valores dos checkboxes
$linguagens_selecionadas = $_POST['linguagens'];

// Verifica se alguma linguagem foi selecionada
if (!empty($linguagens_selecionadas)) {
    echo "Você escolheu as seguintes linguagens:<br>";
    foreach ($linguagens_selecionadas as $linguagem) {
        echo "- " . $linguagem . "<br>";
    }
} else {
    echo "Nenhuma linguagem foi selecionada.";
}
?>