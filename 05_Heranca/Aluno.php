<?php

require_once "Pessoa.php";

class Aluno extends Pessoa{
    private $matricula;
    private $notas = [];

    public function __contruct($nome, $email, $matricula){
        parent::__contruct($nome, $email);
        $this->matricula = $matricula;
    }

    public function adicionarNota($nota){
        $this->notas[] = $nota;
    }

    public function calcularMedia(){
        if(count($this->notas) == 0) return 0;
        return array_sum($this->notas) / count($this->notas);
    }

    public function verificarSituacao(){
        return $this->calcularMedia() >= 7 ? "Aprovado" : "Reprovado";
    }

    public function exibirDadosAluno(){
        parent::exibirDadosPessoa();
        echo "Matricula: {$this->matricula} <br>";
        echo "Media: " .number_format($this->calcularMedia(), 2) . "<br>";
        echo "Situação: " . $this->verificarSituacao() . "<br><hr>";
    }
}