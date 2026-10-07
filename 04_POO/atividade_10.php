<?php
    echo"<b>CARRO</b>";
    echo"<br><br>";

class Carro {

    private $Modelo;
    private $Consumo;
    private $Tanque;

    function __construct($Modelo, $Consumo = 10, $TanqueInicial = 0) {
        $this->Modelo = $Modelo;
        $this->Consumo = $Consumo;
        $this->Tanque = $TanqueInicial;
    }

    function abastecer($Litros) {

        if ($Litros > 0) {
            $this->Tanque = $this->Tanque + $Litros;

            echo "Abastecidos $Litros litro(s) no $this->Modelo.<br>";
        } else {
            echo "Erro: quantidade inválida.<br>";
        }
    }

    function dirigir($Km) {

        $Combustivel = $Km / $this->Consumo;

        if ($Combustivel <= $this->Tanque) {

            $this->Tanque = $this->Tanque - $Combustivel;

            echo "O carro $this->Modelo percorreu $Km km e consumiu $Combustivel litros.<br>";

        } else {

            echo "Não há combustível suficiente para percorrer $Km km.<br>";
        }
    }

    function exibirInfo() {
        echo "Modelo: $this->Modelo | Consumo: $this->Consumo km/L | Tanque: $this->Tanque L";
        echo "<br>";
    }
}

$carro = new Carro("Honda Civic", 12, 20);

$carro->exibirInfo();

$carro->dirigir(60);

$carro->abastecer(10);

$carro->exibirInfo();

?>