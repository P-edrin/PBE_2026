
<?php
class Produto {
    private $nome;
    private $quantidade;
    private $preco;

    public function __construct($nome, $quantidade, $preco) {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }

    public function getnome() {
        return $this->nome;
    }

    public function getquantidade() {
        return $this->quantidade;
    }

    public function getpreco() {
        return $this->preco;
    }

    public function calculartotal() {
        return $this->preco * $this->quantidade;
    }
}
?>
