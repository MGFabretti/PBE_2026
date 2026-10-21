<?php

class Turma{
    private $nome;
    private $professor;
    private $qtdAlunos;
    private $capacidade;

    public function __construct($nome, $professor, $qtdAlunos = 0, $capacidade) {
        $this->nome = $nome;
        $this->professor = $professor;
        $this->qtdAlunos = $qtdAlunos;
        $this->capacidade = $capacidade;
    }

    public function adicionarAluno(){
        
    }

    public function removerAluno(){
        
    }

    public function exibirTurma(){
        
    }
}

$aluno1 = new Turma();
    echo "<pre>";
    print_r($filme1);
    echo "</pre>";

$aluno2 = new Turma();
    echo "<pre>";
    print_r($filme2);
    echo "</pre>";