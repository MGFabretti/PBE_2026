<?php

class Carro {
    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct($modelo, $consumo = 10, $tanqueInicial = 0) {
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }

    public function abastecer($litros) {
        if ($litros > 0) {
            $this->tanque += $litros;
            echo "Sucesso: Foram abastecidos " . $litros . " litros.";
        } else {
            echo "Erro: O valor digitado é inválido.";
        }
    }

    public function dirigir($km) {
        $combustivelNecessario = $km / $this->consumo;

        if ($this->tanque >= $combustivelNecessario) {
            $this->tanque -= $combustivelNecessario;
            echo "Sucesso: Você dirigiu " . $km . " km";
        } else {
            echo "Erro: Combustível insuficiente para a viagem.";
        }
    }

    public function exibirInfo() {
        echo "Modelo: " . $this->modelo;
        echo "Consumo: " . $this->consumo . " km/L";
        echo "Combustível no tanque: " . $this->tanque . " litros";
    }
}

$carro = new Carro("Honda Civic" , 12, 20);
$carro->exibirInfo();
$carro->dirigir(60);
$carro->abastecer(10);
$carro->exibirInfo();
?>