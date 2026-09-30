<?php

$cliente = $_POST["cliente"];

$nome1 = $_POST["nome1"];
$preco1 = $_POST["preco1"];
$qtd1 = $_POST["qtd1"];

$nome2 = $_POST["nome2"];
$preco2 = $_POST["preco2"];
$qtd2 = $_POST["qtd2"];

$nome3 = $_POST["nome3"];
$preco3 = $_POST["preco3"];
$qtd3 = $_POST["qtd3"];

$produtos = [
    [
        "nome" => $nome1,
        "preco" => $preco1,
        "quantidade" => $qtd1
    ],
    ["nome" => $nome2,"preco" => $preco2,"quantidade" => $qtd2],
    ["nome" => $nome3,"preco" => $preco3,"quantidade" => $qtd3]
];
$valorTotal = 0;

foreach ($produtos as &$produto) {
    $produto["subtotal"] = $produto["preco"] * $produto["quantidade"];
    $valorTotal = $valorTotal + $produto["subtotal"];
}
if ($valorTotal > 500) {
    $desconto = $valorTotal * 0.10;
    $valorFinal = $valorTotal - $desconto;
} else {
    $desconto = 0;
    $valorFinal = $valorTotal;
}

include "view_relatorio.php";

?>