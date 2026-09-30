<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
</head>
<body style="background-image: url('atendimento.png');">

<h1 style="text-align: center;" >Clinica vida Animal</h1>
<div style="text-align: center;">
<form action="logica.php" method="POST">

    <label>Nome do cliente:</label><br>
    <input type="text" name="cliente" required>
    <br><br>

    <label>Nome do Animal:</label><br>
    <input type="text" name="animal" required>
    <br><br>

    <label>Idade:</label><br>
    <input type="number" name="idade" step="0.01" required>
    <br><br>

    <label>Acontecimento:</label><br>
    <input type="text" name="acontecimento" min="1" required>
    <br><br>

    <button type="submit">Finalizar consulta </button>

     </form>
    </div>
</body>
</html>