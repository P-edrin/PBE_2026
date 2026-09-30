<?php

$nome = $_POST["nome"];
$filme = $_POST["filme"];
$quantidade = $_POST["quantidade"];
$tipo = $_POST["tipo"];

if ($tipo == "Inteira") {
    $valorIndividual = 30;
} else {
    $valorIndividual = 15;
}

$valorTotal = $valorIndividual * $quantidade;

if ($quantidade > 10) {
    $desconto = $valorTotal * 0.10;
    $valorTotal = $valorTotal - $desconto;
}

include "view_relatorio.php";

?>