<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerFit</title>
</head>
<body>

    <h1>Matrícula na Academia</h1>

    <form action="logica.php" method="POST">

        <h2>Dados do aluno</h2>

        <label>Nome:</label>
        <br>
        <input type="text" name="nome" required>
        <br>

        <label>Peso:</label>
        <br>
        <input type="number" step="0.1" name="peso" required>
        <br>

        <label>Altura:</label>
        <br>
        <input type="number" step="0.01" name="altura" required>
        <br>

        <h2>Dados da matrícula</h2>

        <label>Plano:</label>
        
        <select name="plano">
            <option value="Básico">Básico - R$ 80</option>
            <option value="Plus">Plus - R$ 120</option>
            <option value="Premium">Premium - R$ 180</option>
        </select>
        <br>

        <label>Quantidade de meses:</label>
       
        <input type="number" name="meses" min="1" max="12" required>
        <br>

        <h2>Modalidades extras</h2>

        <input type="checkbox" name="modalidades[]" value="Natação">
        Natação - R$ 60
        <br>

        <input type="checkbox" name="modalidades[]" value="Funcional">
        Funcional - R$ 40
        <br>

        <input type="checkbox" name="modalidades[]" value="Lutas">
        Lutas - R$ 50
        <br><br>

        <button type="submit">Gerar Matrícula</button>

    </form>

</body>
</html>