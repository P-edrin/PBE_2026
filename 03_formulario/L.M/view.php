<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Inscrição em Evento</title>
</head>

<body>

    <h2 style="color:darkred;">
        Inscrição em Evento
    </h2>

    <form style="color:purple;">

        <label>Nome Completo:</label>
        <br>

        <input type="text" name="nome"
        style="color:purple;">

        <br><br>

        <label>Tipo de ingresso:</label>
        <br>

        <select name="ingresso"
        style="color:purple;">

            <option value="estudante">Estudante</option>
            <option value="profissional">Profissional</option>
            <option value="vip">VIP</option>

        </select>

        <br><br>

        <label>Data do Evento:</label>
        <br>

        <input type="date" name="data">

        <br><br>

        <label>Hora de Chegada:</label>
        <br>

        <input type="time" name="hora">

        <br><br>

        <button type="submit"
        style="background:purple; color:white;">
            Inscrever-se
        </button>

    </form>

</body>
</html>
