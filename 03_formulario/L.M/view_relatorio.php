<!DOCTYPE html>
<html>
<head>
    <title>Inscrição em Evento</title>
</head>

<body>

    <h2>Inscrição em Evento</h2>

    <form action="view_relatorio.php" method="POST">

        Nome Completo:<br>
        <input type="text" name="nome">
        <br><br>

        Tipo de ingresso:<br>
        <select name="ingresso">
            <option value="estudante">Estudante</option>
            <option value="profissional">Profissional</option>
            <option value="vip">VIP</option>
        </select>
        <br><br>

        Data do Evento:<br>
        <input type="date" name="data">
        <br><br>

        Hora de Chegada:<br>
        <input type="time" name="hora">
        <br><br>

        <input type="submit" value="Inscrever-se">

    </form>

</body>
</html>
