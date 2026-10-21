<?php

class Imc{
    private $nome;
    private $idade;
    private $peso;
    private $altura;

    public function __construct($nome, $idade, $peso, $altura) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcularIMC($peso, $altura){
        $imc = $peso / ($altura ** 2);
        return $imc;
    }

    public function classificarIMC(){
        if ($imc < 18.5) {
        return "Abaixo do peso";
        } elseif ($imc < 24.9) {
        return "Peso normal";
        } elseif ($imc < 29.9) {
        return "Sobrepeso";
        } else {
        return "Obesidade";
        }
    }

    public function exibirFicha(){
        
    }
}

$pessoa1 = new Imc("Leo", 22, 80, 1.80);
    echo "<pre>";
    print_r($pessoa1);
    echo "</pre>";

$pessoa2 = new Imc("Gab", 23, 78, 1.78);
    echo "<pre>";
    print_r($pessoa2);
    echo "</pre>";