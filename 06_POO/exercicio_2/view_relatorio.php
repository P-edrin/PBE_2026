<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Boletim Escolar</title>
</head>
<body>

    <h1>Boletim Escolar</h1>
    <p>Nome: <?= $aluno->getNome() ?></p>
    <p>Turma: <?= $aluno->getTurma() ?></p>

    <table border="1">
        <tr>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Média</th>
        </tr>
        <tr>
            <td><?= number_format($aluno->getNota1(), 1, ',', '.') ?></td>
            <td><?= number_format($aluno->getNota2(), 1, ',', '.') ?></td>
            <td><?= number_format($aluno->getNota3(), 1, ',', '.') ?></td>
            <td><?= number_format($aluno->calcularMedia(), 1, ',', '.') ?></td>
        </tr>
    </table>

    <p>Faltas: <?= $aluno->getFaltas() ?></p>
    <p>Frequência: <?= number_format($aluno->calcularFrequencia(), 1, ',', '.') ?>%</p>
    <h2><?= $aluno->verificarSituacao() ?></h2>
    <p>Parabéns, continue assim!</p>
    <p>Atenção: procure o professor para saber os próximos passos.</p>
    <br>

    <a href="view.php">Cadastrar outro aluno</a>

</body>
</html>