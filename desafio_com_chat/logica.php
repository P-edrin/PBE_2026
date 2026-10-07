<?php

// ================================
// RECEBENDO OS DADOS
// ================================

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$animal = $_POST['animal'];
$especie = $_POST['especie'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$servico = $_POST['servico'];
$data = $_POST['data'];
$observacoes = $_POST['observacoes'];


// ================================
// TABELA DE PREÇOS
// ================================

$precos = [

    "Consulta" => 120,

    "Vacinação" => 90,

    "Exame" => 150,

    "Cirurgia" => 850,

    "Odontologia" => 200,

    "Emergência" => 250

];


// ================================
// PEGANDO O VALOR
// ================================

if (isset($precos[$servico])) {

    $valor = $precos[$servico];

} else {

    $valor = 0;

}


// ================================
// DESCONTO
// ================================

$desconto = 0;


// Animais idosos recebem desconto

if ($idade >= 10) {

    $desconto = $valor * 0.10;

}


// ================================
// VALOR FINAL
// ================================

$valorDesconto = $valor - $desconto;


// ================================
// DATA
// ================================

$dataFormatada = date(
    "d/m/Y",
    strtotime($data)
);


// ================================
// CLASSIFICAÇÃO
// ================================

if ($idade <= 1) {

    $classificacao = "Filhote";

} elseif ($idade <= 7) {

    $classificacao = "Adulto";

} else {

    $classificacao = "Idoso";

}


// ================================
// STATUS
// ================================

$status = "Agendamento confirmado";


// ================================
// ARRAY COM OS DADOS
// ================================

$dados = [

    "nome" => $nome,

    "telefone" => $telefone,

    "animal" => $animal,

    "especie" => $especie,

    "idade" => $idade,

    "sexo" => $sexo,

    "servico" => $servico,

    "data" => $dataFormatada,

    "observacoes" => $observacoes,

    "valor" => $valor,

    "desconto" => $desconto,

    "valorFinal" => $valorDesconto,

    "classificacao" => $classificacao,

    "status" => $status

];


// ================================
// ABRINDO O RELATÓRIO
// ================================

require_once "view_relatorio.php";

?>