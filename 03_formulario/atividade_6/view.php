<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Compra de Ingressos</title>
</head>
<body>

<h1>Compra de Ingressos - Cinema</h1>

<form action="logica.php" method="POST">

    <label>Nome do cliente:</label><br>
    <input type="text" name="nome" required>
    <br><br>

    <label>Filme:</label><br>
    <input type="text" name="filme" required>
    <br><br>

    <label>Quantidade de ingressos:</label><br>
    <input type="number" name="quantidade" min="1" required>
    <br><br>

    <label>Tipo de ingresso:</label><br>
    <br>

    <input type="radio" name="tipo" value="Inteira" required>
    Inteira

    <br>

    <input type="radio" name="tipo" value="Meia-entrada">
    Meia-entrada

    <br><br>

    <button type="submit">Comprar Ingressos</button>

</form>

</body>
</html>