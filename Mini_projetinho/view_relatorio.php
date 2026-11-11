<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório EnerControl</title>
</head>

<body style="background-image: url('foto.png'); background-size: cover; background-position: center; background-attachment: fixed;">

<div>
    <h1>Relatório de Consumo de Energia</h1>
    <p>Data: <?= date("d/m/Y", strtotime($data)) ?></p>
    <p>Setor: <?= $setor ?></p>
    <h2>Máquinas</h2>

    <?php foreach ($relatorio as $item) { ?>

        <hr>
        <p>Máquina: <?= $item["maquina"] ?></p>
        <p>Potência: <?= $item["potencia"] ?> kW</p>
        <p>Ação: <?= $item["acao"] ?></p>
        <p>Horas de funcionamento: <?= $item["horas"] ?></p>
        <p>Consumo: <?= number_format($item["consumo"], 2, ",", ".") ?> kWh</p>
        <p>Custo: R$ <?= number_format($item["custo"], 2, ",", ".") ?></p>

    <?php } ?>

    <hr>
    <h2>Resumo do consumo</h2>
    <p>Consumo total: <?= number_format($consumoTotal, 2, ",", ".") ?> kWh</p>
    <p>Custo total: R$ <?= number_format($custoTotal, 2, ",", ".") ?></p>
    <p>Projeção mensal: R$ <?= number_format($projecaoMensal, 2, ",", ".") ?></p>

    <?php if ($consumoTotal > 200) { ?>
        <p>Atenção: o consumo total ultrapassou 200 kWh!</p>
    <?php } else { ?>
        <p>O consumo total está dentro do limite de 200 kWh.</p>
    <?php } ?>
    <br>

    <a href="view.php">Voltar ao lançamento</a>

</div>

</body>
</html>
