<?php

$a = 1;
$b = -5;
$c = 6;

$delta = ($b ** 2) - (4 * $a * $c);

if ($delta < 0) {
    echo "A equação não possui raízes reais, pois o Delta é negativo ($delta).";
} elseif ($delta == 0) {
    $x =(-$b) / (2 *$a);
    echo " a unica raiz é: " . $x;
} else{
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);

    
    echo "Valor de x1: " . $x1 . "\n";
    echo "Valor de x2: " . $x2 . "\n";
}
?>