<?php

class Produto {
    private $Nome;
    private $Preco;
    private $Estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->Nome = $nome;
        $this->Preco = $preco;
        $this->Estoque = $estoque;
    }

    public function vender($quantidade) {
        if ($quantidade <= $this->Estoque) {
            $this->Estoque -= $quantidade;
            echo "Venda realizada com sucesso!";
        } else {
            echo "Estoque insuficiente.";
        }
    }

    public function reajustarPreco($percentual) {
        $this->Preco += $this->Preco * ($percentual / 100);
    }

    public function exibirInfo() {
        echo "Nome: " . $this->Nome ;
        echo "Preço: R$ " . $this->Preco, 2;
        echo "Estoque: " . $this->Estoque . " unidades";
    }    
}

$produto = new Produto("teclado gamer", 250, 10);
$produto ->vender(2);
$produto->reajustarPreco(10);
$produto->exibirInfo();
?>