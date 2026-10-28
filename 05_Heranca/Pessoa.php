<?php

class Pessoa{
    protected $nome;
    protected $email;

    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }
    // Exibir informações
    public function getNome(){
        return $this->nome;
    }
    // Add informações
    public function setNome(){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail(){
        $this->email = $email;
    }
    // Exibir Todas informações
    public function exibirDadosPessoa(){
        echo "Nome:  $this->nome <br> Email: $this->email <br>";
    }
}