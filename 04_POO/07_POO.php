<?php

class ContaBancaria {
    public $titular;
    public $saldo;

    public function __construct($titular, $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        $this->saldo -= $valor;
    }

    public function exibirSaldo() {
        echo "Titular: " . $this->titular . "<br>";
        echo "Saldo atual: R$ " . $this->saldo, 2 . "<br>";
    }
}

$minhaConta = new ContaBancaria("João Silva", 1000.00);

$minhaConta->depositar(500.00);
$minhaConta->sacar(200.00);
$minhaConta->exibirSaldo();
?>