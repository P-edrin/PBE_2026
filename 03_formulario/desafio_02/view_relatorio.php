<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório da Compra</title>
</head>
<body>

<h1>Relatório da Compra</h1>

<p>Nome do cliente: <?php echo $cliente; ?></p>

<table border="1">

    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Subtotal</th>
    </tr>

    <?php foreach ($produtos as $produto) { ?>

    <tr>

        <td><?php echo $produto["nome"]; ?></td>

        <td>
            R$ <?php echo number_format($produto["preco"], 2, ",", "."); ?>
        </td>

        <td><?php echo $produto["quantidade"]; ?></td>

        <td>
            R$ <?php echo number_format($produto["subtotal"], 2, ",", "."); ?>
        </td>

    </tr>

    <?php } ?>

</table>

<p>
    Valor total:
    R$ <?php echo number_format($valorTotal, 2, ",", "."); ?>
</p>

<?php

if ($valorTotal > 500) {

    echo "<p>Você recebeu 10% de desconto!</p>";

}

?>

<p>
    Desconto:
    R$ <?php echo number_format($desconto, 2, ",", "."); ?>
</p>

<p>
    <strong>
        Valor final:
        R$ <?php echo number_format($valorFinal, 2, ",", "."); ?>
    </strong>
</p>

</body>
</html>