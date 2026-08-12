<?php

$produtos = [
    [
        "nome" => "Camiseta",
        "preco" => 59.90
    ],
    [
        "nome" => "Calça Jeans",
        "preco" => 120.00
    ],
    [
        "nome" => "Tênis",
        "preco" => 89.90
    ],
    [
        "nome" => "Boné",
        "preco" => 45.00
    ],
    [
        "nome" => "Mochila",
        "preco" => 150.00
    ]
];

foreach ($produtos as $produto) {
    if ($produto["preco"] < 100) {
        echo "Produto: " . $produto["nome"] . "<br>";
        echo "Preço: R$ " . number_format($produto["preco"], 2, ",", ".") . "<br><br>";
    }
}

?>