<?php

class Filme {
    private $titulo;
    private $genero;
    private $duracao;
    private $assistido;

    public function __construct($titulo, $genero, $duracao) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracao = $duracao;
        $this->assistido = false;
    }

    public function marcarComoAssistido() {
        $this->assistido = true;
    }

    public function exibirInformacoes() {
        echo "Titulo: {$this->titulo}<br>";
        echo "Genero: {$this->genero}<br>";
        echo "Duracao: {$this->duracao} minutos<br>";
    }

    public function foiAssistido() {
        if ($this->assistido == true) {
            return "O filme ja foi assistido.";
        } else {
            return "O filme ainda nao foi assistido.";
        }
    }
}

$filme = new Filme("Prison break", "drama", 90 , 92);

$filme->marcarComoAssistido();
$filme->exibirInformacoes();

echo "Situacao: " . $filme->foiAssistido() . "<br>";

?>