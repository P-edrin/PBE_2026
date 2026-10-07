<?php
class conta {

    public $titular;
    public $numero;
    public $saldo;
    public $tipo;
   

    function depositar($valor) {
        $this->saldo = $this->saldo + $valor;
        echo "O saldo aumentou para $this->saldo ";
    }

    function sacar($valor) {
        $this->saldo = $this->saldo - $valor;
        echo "O saldo resultou em $this->saldo";
    }

    function consultarSaldo() {
        echo "O valor do saldo é $this->saldo";
    }
}

$conta1 = new conta();

$conta1->titular = "Pedro";
$conta1->numero = "12";
$conta1->saldo = 1000;
$conta1->tipo = "credito";


echo "titular: " . $conta1->titular . "<br>";
echo "numero: " . $conta1->numero . "<br>";
echo "saldo: " . $conta1->saldo . "<br>";
echo "tipo: " . $conta1->tipo . "<br>";

echo("<br></br>");

class conta2 {

    public $titular;
    public $numero;
    public $saldo;
    public $tipo;
   

    function depositar($valor) {
        $this->saldo = $this->saldo + $valor;
        echo "O saldo aumentou para $this->saldo ";
    }

    function sacar($valor) {
        $this->saldo = $this->saldo - $valor;
        echo "O saldo resultou em $this->saldo";
    }

    function consultarSaldo() {
        echo "O valor do saldo é $this->saldo";
    }
}

$conta2 = new conta();

$conta2->titular = "Pedro";
$conta2->numero = "12";
$conta2->saldo = 1000;
$conta2->tipo = "credito";


echo "titular: " . $conta2->titular . "<br>";
echo "numero: " . $conta2->numero . "<br>";
echo "saldo: " . $conta2->saldo . "<br>";
echo "tipo: " . $conta2->tipo . "<br>";

?>
