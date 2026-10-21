<?php

class Carros{
    private $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade = 0) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function acelerando($acelerar){
        $this->acelerar = $this->acelerar + 10;
    }

    public function freando($frear){
        $this->frear = $this->frear - 10;
    }

    public function verVelocidade(){
        return $velocidade;
    }
}

$carro1 = new Carros("Honda", 100);
    echo "<pre>";
    print_r($carro1);
    echo "</pre>";

$carro2 = new Carros("Bike", 300);
    echo "<pre>";
    print_r($carro2);
    echo "</pre>";