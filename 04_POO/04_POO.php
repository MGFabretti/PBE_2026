<?php

class Pedido {
    public $numero;
    public $cliente;
    public $valor = 0;
    public $status = 'Aguardando';

    function adicionarItem($valor) {
        $this->valor += $valor;
    }

    function cancelar() {
        $this->status = 'Cancelado';
    }

    function finalizar() {
        $this->status = 'Finalizado';
    }

    function exibirResumo() {
        echo "Número: " . $this->numero . "<br>";
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Valor Total: R$ " . $this->valor, 2 . "<br>";
        echo "Status: " . $this->status . "<br>";
        echo "<hr>";
    }
}

$pedido1 = new Pedido();
$pedido1->numero = 101;
$pedido1->cliente = "Maria Silva";
$pedido1->adicionarItem(50.00);
$pedido1->adicionarItem(30.50);
$pedido1->finalizar();
$pedido1->exibirResumo();

$pedido2 = new Pedido();
$pedido2->numero = 102;
$pedido2->cliente = "João Santos";
$pedido2->adicionarItem(120.00);
$pedido2->cancelar();
$pedido2->exibirResumo();
?> 