<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Boletim Escolar</title>
</head>
<body>

    <h1>Cadastro do Aluno</h1>

    <form action="logica.php" method="POST">
        <label>Nome do aluno:</label>
        <input type="text" name="nome" required>

        <br><br>

        <label>Turma:</label>
        <select name="turma" required>
            <option value="">Selecione</option>
            <option value="1º Bimestre">1º Bimestre</option>
            <option value="2º Bimestre">2º Bimestre</option>
            <option value="3º Bimestre">3º Bimestre</option>
        </select>

        <br><br>

        <label>Nota 1:</label>
        <input type="number" name="nota1" min="0" max="10" step="0.1" required>

        <br><br>

        <label>Nota 2:</label>
        <input type="number" name="nota2" min="0" max="10" step="0.1" required>

        <br><br>

        <label>Nota 3:</label>
        <input type="number" name="nota3" min="0" max="10" step="0.1" required>

        <br><br>

        <label>Faltas:</label>
        <input type="number" name="faltas" min="0" max="80" required>

        <br><br>

        <button type="submit">Gerar Boletim</button>

    </form>

</body>
</html>