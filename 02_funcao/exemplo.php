<?php
$frequencia =90;
$media1 = 9;

echo "Pedro - ";
if ($frequencia < 75 ) { // frequencia insulficente
    echo "reprovado por falta ";
}
elseif ($media1 >= 7 ){ // maior que 7 aprovado 
    echo "Aprovado";
}
elseif ($media1 >= 5 ){ // nota entre 5 e 6.9 = recuperação
    echo "Recuperação";
}
else{ // media insulficente reprovado
    echo "Reprovado";
}
echo "<br>";
$frequencia =50;
$media1 = 9;

echo "Ana lara - ";
if ($frequencia < 75 ) { // frequencia insulficente
    echo "reprovado por falta ";
}
elseif ($media1 >= 7 ){ // maior que 7 aprovado 
    echo "Aprovado";
}
elseif ($media1 >= 5 ){ // nota entre 5 e 6.9 = recuperação
    echo "Recuperação";
}
else{ // media insulficente reprovado
    echo "Reprovado";
}

echo "<br>";
$frequencia =90;
$media1 = 6;

echo "Vicente - ";
if ($frequencia < 75 ) { // frequencia insulficente
    echo "reprovado por falta ";
}
elseif ($media1 >= 7 ){ // maior que 7 aprovado 
    echo "Aprovado";
}
elseif ($media1 >= 5 ){ // nota entre 5 e 6.9 = recuperação
    echo "Recuperação";
}
else{ // media insulficente reprovado
    echo "Reprovado";
}




?>

