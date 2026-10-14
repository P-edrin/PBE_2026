<?php

class Turma {
    private $nome;
    private $professor;
    private $qtdAlunos;
    private $capacidade;

    public function __construct($nome, $professor, $capacidade) {
        $this->nome = $nome;
        $this->professor = $professor;
        $this->capacidade = $capacidade;
        $this->qtdAlunos = 0;
    }

    public function adicionarAluno() {
        if ($this->qtdAlunos < $this->capacidade) {
            $this->qtdAlunos++;
        }
    }

    public function exibirTurma() {
        echo "Turma: {$this->nome}<br>";
        echo "Professor: {$this->professor}<br>";
        echo "Alunos: {$this->qtdAlunos} / {$this->capacidade}";
    }
}

$turma = new Turma("PHP OO", "Pedro", 32);

$turma->adicionarAluno();

$turma->exibirTurma();

?>