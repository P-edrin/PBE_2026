<?php
require_once "funcao.php";
// invocando/executando a função 
// que esta o arquivo funcao.php

$resultado = calcularPedido("Teclado", 100, 10, 5, 7);

echo "Nome: " . $resultado["nomeProduto"] . "<br>";
echo "Subtotal: " . $resultado["subtotal"] . "<br>";
echo "Valor Desconto: " . $resultado["valorDesconto"] . "<br>";
echo "Valor Imposto: " . $resultado["valorImposto"] . "<br>";
echo "Total Final: " . $resultado["totalFinal"] . "<br>";
// invocando/executando a funcao de calculo de frete

$TatalComFrete = calculofrete($resultado['totalFinal']);
echo "total com frete ". $TatalComFrete;
?>
