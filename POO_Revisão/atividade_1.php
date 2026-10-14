<?php

class Aluno {
    private $nome;
    private $nota;

    public function __construct($nome, $nota = 0) {
        $this->nome = $nome;
        $this->nota = $nota;
    }
    public function getStatus() {
        if ($this->nota >= 6){
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }
}

$aluno1 = new Aluno("Pedro", 8);
$aluno2 = new Aluno("Ana", 7);

echo "<pre>";
print_r($aluno1);
echo "Situação: " . $aluno1->getStatus() . "\n\n";

print_r($aluno2);
echo "Situação: " . $aluno2->getStatus();
echo "</pre>";

?>