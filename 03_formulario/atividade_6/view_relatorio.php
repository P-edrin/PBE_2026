<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório da Compra</title>
</head>
<body>

<h1>Relatório da Compra</h1>

<p>Nome do cliente: <?php echo $nome; ?></p>

<p>Filme: <?php echo $filme; ?></p>

<p>Quantidade de ingressos: <?php echo $quantidade; ?></p>

<p>Tipo de ingresso: <?php echo $tipo; ?></p>

<p>Valor total: R$ <?php echo number_format($valorTotal, 2, ",", "."); ?></p>

<?php

if ($quantidade > 10) {
    echo "<p>Você recebeu 10% de desconto por comprar mais de 10 ingressos!</p>";
}

?>

</body>
</html> 