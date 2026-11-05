
<?php

require_once "Funcionario.php";

// Recebendo os dados do formulário
$nome = $_POST["nome"];
$cargo = $_POST["cargo"];
$horasExtras = $_POST["horasExtras"];
$valeTransporte = $_POST["valeTransporte"];

// Criando o objeto funcionário
$funcionario = new Funcionario(
    $nome,
    $cargo,
    $horasExtras,
    $valeTransporte
);

// Chamando o relatório
require_once "view_relatorio.php";

?>
