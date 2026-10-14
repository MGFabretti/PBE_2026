<?php

class ContaBancaria {
    private $nome;
    private $salario;

    function __construct($nome, $salario = 1000) {
        $this->nome = $nome;
        $this->salario = $salario;
    }
    public function aumentarSalario($percentual) {
        if($percentual > 0 && $percentual <= 10){
            $this->salario += $this->salario * ($percentual / 100);
        }else{
            echo "Percentual invalido";
        }
    }
    public function exibirSalario() {
        $salarioFormatado = "R$ " . number_format($this->salario, 2, ',', '.');
        echo "Funcionario:  {$this->nome} | Salario: {$salarioFormatado} <br>"; 
    }
}

$minhaConta = new ContaBancaria("João Silva", );

$minhaConta->aumentarSalario(10);
$minhaConta->exibirSalario();
?>