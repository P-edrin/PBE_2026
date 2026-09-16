
<?php

$Nome = $_POST['Nome'];
$Salario_bruto = $_POST['Salario_bruto'];
$horas_extras = $_POST['horas_Extras'];
$Beneficios = $_POST['Beneficios'];
$desconto = $_POST['Desconto'];

$valor_hora = $Salario_bruto / 160;

$valor_hora_extras = $valor_hora * 1.5;

$valor_total_horas_extras = $horas_extras * $valor_hora_extras;

$salario_bruto_sem_desconto =
    $Salario_bruto + $valor_total_horas_extras + $Beneficios;

if ($salario_bruto_sem_desconto >= 5000) {
    $imposto = $salario_bruto_sem_desconto * 10 / 100;
} elseif ($salario_bruto_sem_desconto >= 3000) {
    $imposto = $salario_bruto_sem_desconto * 5 / 100;
} else {
    $imposto = 0;
}

$salario_liquido = $salario_bruto_sem_desconto - $imposto - $desconto;

if ($salario_liquido > 4000) {
    $remuneracao = "Bem remunerado";
} else {
    $remuneracao = "Médio";
}

echo "Nome: $Nome <br>";
echo "Salário bruto: R$ $Salario_bruto <br>";
echo "Total de horas extras: $horas_extras <br>";
echo "Valor das horas extras: R$ $valor_total_horas_extras <br>";
echo "Benefícios: R$ $Beneficios <br>";
echo "Salário bruto + horas extras + benefícios: R$ $salario_bruto_sem_desconto <br>";
echo "Descontos: R$ $desconto <br>";
echo "Imposto: R$ $imposto <br>";
echo "Salário líquido: R$ $salario_liquido <br>";
echo "Remuneração: $remuneracao <br>";

?>

