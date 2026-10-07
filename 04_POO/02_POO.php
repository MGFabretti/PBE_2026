<?php

class ContaBancaria {
    public $titular;
    public $numero;
    public $saldo;
    public $tipo;
// Construct, inicializar um objeto automaticamente com valores padrão ou obrigatórios assim que você o cria usando a palavra-chave
//Pesquisei pois tava com dúvida não foi IA
    function __construct($titular, $numero, $saldoInicial = 0, $tipo = "Corrente") {
        $this->titular = $titular;
        $this->numero = $numero;
        $this->saldo = $saldoInicial;
        $this->tipo = $tipo;
    }

    function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        }
    }

    function consultarSaldo() {
        return $this->saldo;
    }
}

$minhaConta = new ContaBancaria("João Silva", "12345-6", 500.00, "Corrente");
$minhaConta->depositar(200.00);
$minhaConta->sacar(100.00);
echo "Titular: " . $minhaConta->titular ;
echo "Saldo atual: R$ " . $minhaConta->consultarSaldo();
echo "<br>";
$minhaConta = new ContaBancaria("João Silva", "12345-6", 500.00, "Corrente");
$minhaConta->depositar(200.00);
$minhaConta->sacar(100.00);
echo "Titular: " . $minhaConta->titular ;
echo "Saldo atual: R$ " . $minhaConta->consultarSaldo();
?>