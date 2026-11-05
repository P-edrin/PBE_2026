
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Folha de Pagamento</title>
</head>
<body>

    <h1>Gerar Holerite</h1>

    <form action="logica.php" method="POST">

        <label>Nome do funcionário:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label>Cargo:</label>
        <select name="cargo" required>
            <option value="">Selecione</option>
            <option value="Auxiliar">Auxiliar - R$ 2.200,00</option>
            <option value="Técnico">Técnico - R$ 3.520,00</option>
            <option value="Analista">Analista - R$ 5.500,00</option>
        </select>
        <br><br>

        <label>Horas extras no mês:</label>
        <input type="number" name="horasExtras" min="0" step="1" required>
        <br><br>

        <label>Utiliza vale-transporte?</label>
        <br>

        <input type="radio" name="valeTransporte" value="Sim" required>
        Sim

        <input type="radio" name="valeTransporte" value="Não">
        Não

        <br><br>

        <button type="submit">Gerar Holerite</button>

    </form>

</body>
</html>
