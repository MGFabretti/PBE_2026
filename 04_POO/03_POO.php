<?php
class Aula{
    public $disciplina;
    public $professor;
    public $duracao;
    public $numeroSala;
    public $bloco;

   function exibirInformacoes()
    {
        echo "Disciplina: " . $this->disciplina . "<br>";
        echo "Professor: " . $this->professor . "<br>";
        echo "Duração: " . $this->duracao . "<br>";
        echo "Número da sala: " . $this->numeroSala . "<br>";
        echo "Bloco: " . $this->bloco . "<br>";
    }

    function trocarProfessor($novoProfessor)
    {
        $this->professor = $novoProfessor;
     
    }
  
    function alterarLocal($n_sala, $bloco)
    {
        $this->numeroSala = $n_sala;
        $this->bloco = $bloco;
    }
}
$aula = new Aula();

$aula->disciplina = "Programação";
$aula->professor = "Laura";
$aula->duracao = "5 horas";
$aula->numeroSala = 10;
$aula->bloco = "A";

$aula->exibirInformacoes();
echo "<hr>";
$aula->trocarProfessor("Gabriel");
$aula->alterarLocal("B", 10);
$aula->exibirInformacoes();
?>