<?php

function verificarMaioridade($idade) {
    if ($idade >= 18) {
        return "Maior de idade";
    } else {
        return "Menor de idade";
    }
}


$idade1 = 15;
$idade2 = 18;
$idade3 = 25;

$resultado1 = verificarMaioridade($idade1);
echo "Idade: $idade1 é $resultado1<br>";


$resultado2 = verificarMaioridade($idade2);
echo "Idade: $idade2 é $resultado2<br>";

$resultado3 = verificarMaioridade($idade3);
echo "Idade: $idade3 é $resultado3<br>";

?>