<?php

class celular {

    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    function ligar() {
        $this->ligado = true;
        echo "celular foi ligado <br>";
    }

    function desligar() {
        $this->ligado = false;
        echo "celular foi desligado ";
    }

    function usar($consumir) {
        $this->bateria = $this->bateria - $consumir;

        if ($this->bateria < 0) {
            $this->bateria = 0;
        }

        echo "A bateria foi consumida em $consumir <br>";
        echo "Sobrando um total $this->bateria";
    }

    function carregar($carga) {
        $this->bateria = $this->bateria + $carga;

        if ($this->bateria > 100) {
            $this->bateria = 100;
        }

        echo "A bateria foi carregada em $carga";
        echo "Aumentando a bateria para $this->bateria ";
    }
}

$celular1 = new celular();

$celular1->marca = "motorola";
$celular1->modelo = "G9";
$celular1->cor = "rosa";
$celular1->bateria = 50;
$celular1->ligado = true;

echo "marca: " . $celular1->marca . "<br>";
echo "modelo: " . $celular1->modelo . "<br>";
echo "cor: " . $celular1->cor . "<br>";
echo "bateria: " . $celular1->bateria . " <br>";
echo "ligado: " . $celular1->ligado . " <br>";

$celular1->carregar(33);
$celular1->carregar(12);
$celular1->usar(25);
$celular1->desligar();

echo("<br></br>");

class celular2 {

    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    function ligar() {
        $this->ligado = true;
        echo "celular foi ligado <br>";
    }

    function desligar() {
        $this->ligado = false;
        echo "celular foi desligado ";
    }

    function usar($consumir) {
        $this->bateria = $this->bateria - $consumir;

        if ($this->bateria < 0) {
            $this->bateria = 0;
        }

        echo "A bateria foi consumida em $consumir <br>";
        echo "Sobrando um total $this->bateria";
    }

    function carregar($carga) {
        $this->bateria = $this->bateria + $carga;

        if ($this->bateria > 100) {
            $this->bateria = 100;
        }

        echo "A bateria foi carregada em $carga";
        echo "Aumentando a bateria para $this->bateria ";
    }
}

$celular2 = new celular2();

$celular2->marca = "Samsung";
$celular2->modelo = "A70";
$celular2->cor = "Preto";
$celular2->bateria = 50;
$celular2->ligado = true;

echo "marca: " . $celular2->marca . "<br>";
echo "modelo: " . $celular2->modelo . "<br>";
echo "cor: " . $celular2->cor . "<br>";
echo "bateria: " . $celular2->bateria . " <br>";
echo "ligado: " . $celular2->ligado . " <br>";

$celular2->carregar(33);
$celular2->carregar(12);
$celular2->usar(25);
$celular2->desligar();

?>
