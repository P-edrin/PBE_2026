<?php

class Funcionario {

    private $nome;
    private $salario;

    function __construct($nome, $salario = 1000) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    function aumentarSalario($percentual) {

        if ($percentual > 0 && $percentual <= 10) {

            $aumento = $this->salario * ($percentual / 100);

            $this->salario = $this->salario + $aumento;

        } else {

            echo "Erro: o percentual de aumento deve ser maior que 0 e menor ou igual a 10%.<br>";
        }
    }

    function exibirSalario() {

        echo "Nome: $this->nome <br>";
        echo "Salário: R$ $this->salario <br>";
    }
}

$funcionario = new Funcionario("Pedro", 50000);

$funcionario->exibirSalario();

echo "<br>";

$funcionario->aumentarSalario(10);

$funcionario->exibirSalario();

?>