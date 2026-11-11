<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio</title>
</head>
<body>
    <h1>Produto Cadastro</h1>

    <p>Nome: <?= $produto->getNome() ?></p>
    <p>Quantidade: <?= $produto->getquantidade() ?></p>
    <p>Preço: R$ <?= number_format($produto->getpreco(), 2, ',', '.') ?></p>
    <p>Total em estoque: R$ <?= number_format($produto->calculartotal(), 2, ',', '.') ?></p>
    <p>Valor do desconto: R$ <?= number_format($produto->calcularDesconto(), 2, ',', '.') ?></p>
    <p>Total com desconto: R$ <?= number_format($produto->calcularTotalComDesconto(), 2, ',', '.') ?></p>
    <p>Situação do estoque: <?= $produto->verificarEstoque() ?></p>
   <?php
        if ($quantidade >= 10) {
            echo "<p>Parabéns! Você ganhou 10% de desconto.</p>";
        }elseif ($quantidade < 10) {
            echo "<p>Dica: comprando 10 unidades ou mais você ganha 10% de desconto.</p>";
        }
    ?>
        <a href="view.php">Cadastrar outro</a>

</body>
</html> 