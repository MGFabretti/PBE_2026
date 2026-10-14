<?php

Class Pedidos{
    private $cliente;
    private $valorItens;

    public function __construct($cliente, $valorItens= 0){
        $this->cliente = $cliente;
        $this->valorItens = $valorItens;
    }

    public function adicionarItem($valor){
        $this->valorItens += $valor;
    }

    public function getTotal(){
        return $this ->valorItens;
    }

    public function exibirPedido(){
        echo "Cliente: $this->cliente - Total do Pedido: $this->valorItens <br>";
    }
}

Class NotaFiscal{
    private $totalPedido;
    private $imposto;
    private $totalPagar;

    public function __construct($totalPedido, $imposto= 10){
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->totalPagar = 0;
    }

    public function calcularTotal(){
        $this->totalPagar = $totalPedido + ($this->totalPedido * ($this->imposto / 100));
    }

    public function exibirNota(){
        echo "SubTotal: R$ $this-> totalPedido <br>";
        echo "Imposto: R$ $this-> imposto <br>";
        echo "Total a Pagar:  $this-> totalPagar <br>";
    }
}

$pedido = new Pedidos("Leonardo", 20);
$pedido-> exibirPedido();
$pedido-> adicionarItem(50);
$pedido-> adicionarItem(27);

$Nota = new NotaFiscal($pedido->getTotal(), 8);
$Nota-> calcularTotal();
$Nota-> exibirNota();
?>