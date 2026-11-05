<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio</title>
</head>
<body>
    <h1>Produto Cadastro<h1>
        <p>Nome: <?= $produto->getNome() ?></p>
        <p>Quantidade: <?= $produto->getquantidade() ?></p>
        <p>Preco: <?= $produto->getpreco() ?></p>
        <p>Total em estoque: <?= $produto->calculartotal() ?></p>
    
        <a href="view.php">Cadastrar outro </a>
</body>
</html>