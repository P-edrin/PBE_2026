<?php

$funcionarios = [
    [
        "nome" => "João",
        "cargo" => "Desenvolvedor",
        "salario" => 3500
    ],
    [
        "nome" => "Maria",
        "cargo" => "Analista",
        "salario" => 3000
    ],
    [
        "nome" => "Pedro",
        "cargo" => "Designer",
        "salario" => 2800
    ],
    [
        "nome" => "Ana",
        "cargo" => "Gerente",
        "salario" => 5000
    ]
];

$totalSalarios = 0;
$quantidadeFuncionarios = 0;

foreach ($funcionarios as $funcionario) {
    echo "Nome: " . $funcionario["nome"] . "<br>";
    echo "Cargo: " . $funcionario["cargo"] . "<br>";
    echo "Salário: R$ " . number_format($funcionario["salario"], 2, ",", ".") . "<br><br>";

    $totalSalarios += $funcionario["salario"];
    $quantidadeFuncionarios++;
}

echo "Quantidade de funcionários: " . $quantidadeFuncionarios . "<br>";
echo "Soma total dos salários: R$ " . number_format($totalSalarios, 2, ",", ".");
?>