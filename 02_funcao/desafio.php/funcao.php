<?php
function calcularPedido($nome, $preco, $quantidade, $desconto = 0, $imposto = 0) {
    $subtotal = $preco * $quantidade;
    $valorDesconto = $subtotal * ($desconto / 100);
    $valorTotalComDesconto = $subtotal - $valorDesconto;
    $valorImposto = $valorTotalComDesconto * ($imposto / 100);
    $totalFinal = $valorTotalComDesconto + $valorImposto;

    return [
        'nomeProduto' => $nome,
        'subtotal' => $subtotal,
        'valorDesconto' => $valorDesconto,
        'valorImposto' => $valorImposto,
        'totalFinal' => $totalFinal
    ];
}

function calculofrete($valorTotal){
    $frete = $valorTotal * (10/100);
    $TatalComFrete = $frete + $valorTotal;
    return $TatalComFrete;
}

?>