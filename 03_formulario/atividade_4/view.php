<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcular Média</title>
</head>
<body>

<h1>Calculadora de Média</h1>

<form action="Logica.php" method="POST">

    Nome do aluno:
    <input type="text" name="nome" required><br>
    <br><br>

    Nota 1:
    <input type="number" name="nota1" step="0.01" required><br>
    <br><br>

    Nota 2:
    <input type="number" name="nota2" step="0.01" required><br>
    <br><br>

    Nota 3:
    <input type="number" name="nota3" step="0.01" required><br>
    <br><br>

    <button type="submit">Calcular Média</button>

</form>

</body>
</html>