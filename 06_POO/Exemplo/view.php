<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="logica.php" method="POST">

    <label>Nome:</label>
    <br>
    <input type="text" name="nome">
<br>
    <label>Quantidade:</label>
    <br>
    <input type="number" name="quantidade">
<br>
    <label>Preço:</label>
    <br>
    <input type="number" step="0.01" name="preco">
<br>
    <button type="submit">Cadastrar</button>

</form>
</body>
</html>