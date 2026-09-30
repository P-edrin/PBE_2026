<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
</head>
<body>

<h1>Carrinho de Compras</h1>

<form action="logica.php" method="POST">

    <label>Nome do cliente:</label><br>
    <input type="text" name="cliente" required>
    <br><br>


    <h3>Produto 1</h3>

    <label>Nome do produto:</label><br>
    <input type="text" name="nome1" required>
    <br><br>

    <label>Preço:</label><br>
    <input type="number" name="preco1" step="0.01" required>
    <br><br>

    <label>Quantidade:</label><br>
    <input type="number" name="qtd1" min="1" required>
    <br><br>


    <h3>Produto 2</h3>

    <label>Nome do produto:</label><br>
    <input type="text" name="nome2" required>
    <br><br>

    <label>Preço:</label><br>
    <input type="number" name="preco2" step="0.01" required>
    <br><br>

    <label>Quantidade:</label><br>
    <input type="number" name="qtd2" min="1" required>
    <br><br>


    <h3>Produto 3</h3>

    <label>Nome do produto:</label><br>
    <input type="text" name="nome3" required>
    <br><br>

    <label>Preço:</label><br>
    <input type="number" name="preco3" step="0.01" required>
    <br><br>

    <label>Quantidade:</label><br>
    <input type="number" name="qtd3" min="1" required>
    <br><br>

    <button type="submit">Finalizar Compra</button>

</form>

</body>
</html>