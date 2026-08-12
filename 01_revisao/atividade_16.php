<?php

$estoque = [
    [
        "nome" => "Teclado",
        "quantidade" => 10
    ],
    [
        "nome" => "Mouse",
        "quantidade" => 5
    ],
    [
        "nome" => "Monitor",
        "quantidade" => 0
    ],
    [
        "nome" => "Fone de ouvido",
        "quantidade" => 8
    ],
    [
        "nome" => "Webcam",
        "quantidade" => 0
    ]
];

foreach ($estoque as $produto) {
    echo "Produto: " . $produto["nome"] . "<br>";
    
    if ($produto["quantidade"] == 0) {
        echo "Sem estoque <br>";
    } else {
        echo "Quantidade: " . $produto["quantidade"] . "<br>";
    }

    echo "<br>";
}

?>