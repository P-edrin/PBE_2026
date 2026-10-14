<?php

class Pedido {
    private $cliente;
    private $valorItens;

    public function __construct($cliente, $valorItens = 0){
        $this->cliente = $cliente;
        $this->valorItens = $valorItens;
    }

    public function adicionarItem($valor){
        $this->valorItens += $valor;  
    }

    public function getTotal(){
        return $this->valorItens;
    }

    public function exibirPedido(){
        echo "cliente: $this->cliente - total dos itens: $this->valorItens <br>";
    }
}

class NotaFiscal {
    private $totalPedido;
    private $imposto;
    private $totalPagar; // total do pedido + porcentagem do imposto 

    public function __construct($totalPedido, $imposto = 10){
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->totalPagar = 0;
    }

    public function calcularTotal(){
        $this->totalPagar = 
        $this->totalPedido + ($this->totalPedido * ($this->imposto / 100));
    }

    public function exibirNota(){
        echo "subTotal: R$ $this->totalPedido <br>";
        echo "Imposto: R$ $this->imposto <br>";
        echo "Total Pagar: R$ $this->totalPagar <br>";
    }
}

$pedido = new Pedido("Pedro", 20);

$pedido->adicionarItem(50);
$pedido->adicionarItem(27);
$pedido->exibirPedido();

$notaFiscal = new NotaFiscal($pedido->getTotal(), 8);
$notaFiscal->calcularTotal();
$notaFiscal->exibirNota();

?>