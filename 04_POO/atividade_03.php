<?php
    echo"<b>AULA 1</b>";
    echo"<br><br>";
class Aula {

    public $Disciplina;
    public $Professor;
    public $Duracao;
    public $Numero_da_sala;
    public $Bloco;

    function exibirInformacoes() {
        echo "Disciplina: $this->Disciplina <br>";
        echo "Professor: $this->Professor <br>";
        echo "Duração: $this->Duracao <br>";
        echo "Número da sala: $this->Numero_da_sala <br>";
        echo "Bloco: $this->Bloco <br>";
    }

    function trocarProfessor($Nome_professor) {
        $this->Professor = $Nome_professor;

        echo "O novo professor é: $this->Professor <br>";
    }

    function alterarLocal($Novo_bloco, $Novo_numero_sala) {
        $this->Numero_da_sala = $Novo_numero_sala;
        $this->Bloco = $Novo_bloco;

        echo "O novo local é: $this->Bloco, sala $this->Numero_da_sala <br>";
    }
}

$aula1 = new Aula();

$aula1->Disciplina = "Programação";
$aula1->Professor = "Leonardo";
$aula1->Duracao = "2 horas";
$aula1->Numero_da_sala = 5;
$aula1->Bloco = "Bloco A";

$aula1->exibirInformacoes();
echo "<hr>";

$aula1->trocarProfessor("Gabriel");
echo "<hr>";

$aula1->alterarLocal("Bloco B", 10);
echo "<hr>";

echo"<br>";

echo"<b>AULA 2</b>";
echo"<br><br>";

class Aula2 {

    public $Disciplina;
    public $Professor;
    public $Duracao;
    public $Numero_da_sala;
    public $Bloco;

    function exibirInformacoes() {
        echo "Disciplina: $this->Disciplina <br>";
        echo "Professor: $this->Professor <br>";
        echo "Duração: $this->Duracao <br>";
        echo "Número da sala: $this->Numero_da_sala <br>";
        echo "Bloco: $this->Bloco <br>";
    }

    function trocarProfessor($Nome_professor) {
        $this->Professor = $Nome_professor;

        echo "O novo professor é: $this->Professor <br>";
    }

    function alterarLocal($Novo_bloco, $Novo_numero_sala) {
        $this->Numero_da_sala = $Novo_numero_sala;
        $this->Bloco = $Novo_bloco;

        echo "O novo local é: $this->Bloco, sala $this->Numero_da_sala <br>";
    }
}

$aula2 = new Aula();

$aula2->Disciplina = "Projeto de Software";
$aula2->Professor = "Gabriel";
$aula2->Duracao = "2 horas";
$aula2->Numero_da_sala = 5;
$aula2->Bloco = "Bloco A";

$aula2->exibirInformacoes();
echo "<hr>";

$aula2->trocarProfessor("Leonardo");
echo "<hr>";

$aula2->alterarLocal("Bloco A", 11);
echo "<hr>";
?>