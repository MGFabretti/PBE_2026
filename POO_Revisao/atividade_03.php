<?php

class Filme{
    private $titulo;
    private $genero;
    private $duracao;
    private $assistido;

    public function __construct($titulo, $genero, $duracao, $assistido=false) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracao = $duracao;
        $this->assistido = $assistido;
    }

    public function marcarComoAssistido(){
        $this->assistido = True;
    }

    public function exibirInformacoes(){
        return $titulo;
        return $genero;
        return $duracao;
        return $assistido;
    }

    public function foiAssistido(){
        if($assistido = True){
            echo "Esse filme foi assistido";
        }else{
            echo "Esse filme não foi assistido";
        }
    }
}

$filme1 = new Filme("Avatar", "Ação", 3.00, true);
    echo "<pre>";
    print_r($filme1);
    echo "</pre>";

$filme2 = new Filme("Matriz", "Ficção", 1.00, false);
    echo "<pre>";
    print_r($filme2);
    echo "</pre>";