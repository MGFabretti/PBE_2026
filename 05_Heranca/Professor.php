<?php

require_once "Pessoa.php";

class Professor extends Pessoa{
    private $disciplina;

    public function __construct($nome, $email, $disciplina){
        $this->disciplina = $disciplina;
        // Exutando o contruct de outro
        parent::__construct($nome, $email);
    }

    public function getDisciplina(){
        return $this->disciplina;
    }

    public function exibirDadosProfessor(){
        parent::exibirDadosPessoa();
        echo "Diciplina $this->disciplina <br><hr>";
    }
}